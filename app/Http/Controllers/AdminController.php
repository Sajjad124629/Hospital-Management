<?php

namespace App\Http\Controllers;

use App\Models\Appoinment;
use App\Models\Doctor;
use App\Models\Home;
use App\Models\News;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Notification;




class AdminController extends Controller
{
    public function addview(){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                return view('admin.add_doctor');
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('/login');
        }

    }

    public function upload(Request $request){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $doctor = new Doctor;
                $image = $request->file;
                $imagename=time().'.'.$image->getClientoriginalExtension();
                $request->file->move('doctorimage',$imagename);
                $doctor->image=$imagename;

                $doctor->name = $request->name;
                $doctor->phone = $request->number;
                $doctor->speciality = $request->speciality;
                $doctor->room = $request->room;

                $doctor->save();
                return redirect('/view_doctor_list')->with('message','Doctor Add SuccessFully');
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('/login');
        }


    }

    public function doctorlist(){

        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $doctorlist = Doctor::all();
                return view('admin.doctor_list',['doctroinfo'=>$doctorlist]);
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('/login');
        }

    }

    public function edit($id){
        $doctor_edit = Doctor::whereId($id)->first();
        return view('admin.edit_doctor_list',["doctor_edit"=>$doctor_edit]);
    }
    public function update(Request $request  ,$id){
        $update_doctor = Doctor::whereId($id)->first();

        $update_doctor->name = $request->name;
        $update_doctor->phone = $request->number;
        $update_doctor->speciality = $request->speciality;
        $update_doctor->room = $request->room;

        //image update

        $image = $request->file;
        if($image){
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);

        $update_doctor->image=$imagename;
        }

        $update_doctor->save();
        return redirect('/view_doctor_list')->with('update_success', 'Doctor update Is SuccessFull');


    }

    public function delete($id){
        $doctor_delete = Doctor::whereId($id);
        $doctor_delete->delete();
        return redirect('/view_doctor_list')->with('Delete_success','Doctor Delete SuccessFull');
    }

    public function showaAppoints(){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $appointmentdata = Appoinment::all();
                return view('admin.showappointment',['appointmentdata'=>$appointmentdata]);
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('/login');
        }

    }

public function approved($id){
    $approved = Appoinment::find($id);

    $approved->status = 'approved';
    $approved->save();
    return redirect()->back();
}

public function cancel($id){
    $cancel = Appoinment::find($id);
    $cancel->status = 'canceled';
    $cancel->save();
    return redirect()->back();
}

public function appointmentdelete($id){
    $deleteappointment = Appoinment::find($id);
    $deleteappointment->delete();
    return redirect()->back();
}

    public function emailview($id){
        $appointment = Appoinment::find($id);
        return view('admin.email_view',['appointment'=>$appointment]);
    }

    public function sendemail(Request $request,$id){
        $data = Appoinment::find($id);
        $details = [
            'greeting'=> $request->greeding,
            'body'=> $request->body,
            'actiontext'=> $request->actiontext,
            'actionurl'=> $request->actionurl,
            'endpart'=> $request->endpart
        ];
        Notification::send($data,new SendEmailNotification($details));
        return redirect()->back()->with('success','Email Send  Successfully');
    }

    public function news(){

        if(Auth::id()){
            if(Auth::user()->usertype==1){
                return view('admin.news');
            }
            else{
                return redirect()->back();

            }
        }
        else{
            return redirect('/login');

        }

    }

    public function news_post(Request $request){
        $getnews = new News;
        $getnews->newstitle = $request->newstitle;
        $getnews->postcategory = $request->postcategory;
        $getnews->postby = $request->postby;
        $getnews->newstype = $request->newstype;
        $getnews->date = $request->date;

        $getnews->details = $request->description;

        //thumbnail image

        $thumbnailimage = $request->thumnail;
        $thumbnailimagename=time().'.'.$thumbnailimage->getClientoriginalExtension();
        $request->thumnail->move('postthumbnail',$thumbnailimagename);
        $getnews->thumnail=$thumbnailimagename;


        //admin image
        $adminimage = $request->adminimage;
        $adminimagename=time().'.'.$adminimage->getClientoriginalExtension();
        $request->adminimage->move('adminimage',$adminimagename);
        $getnews->adminimage=$adminimagename;


        $getnews->save();
        return redirect()->back()->with('success','Post Add SuccessFull');
    }


    public function post_list(){
        if(Auth::id()){
            if(Auth::user()->usertype==1){

                $postdata = News::all();

                return view('admin.post_list',['postdata'=>$postdata]);
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('/login');
        }

    }

    public function postedit($id){

        $postedit = News::find($id);

        return view('admin.editpost',['postedit'=>$postedit]);


    }

    public function updatepost(Request $request,$id){

        $updatepost = News::find($id);

        $updatepost->newstitle = $request->newstitle;
        $updatepost->postcategory = $request->postcategory;
        $updatepost->postby = $request->postby;
        $updatepost->newstype = $request->newstype;
        $updatepost->date = $request->date;

        $updatepost->details = $request->description;




        //update Thumnail Image

        $thumbnailimage = $request->thumnail;
        $thumbnailimagename=time().'.'.$thumbnailimage->getClientoriginalExtension();
        $request->thumnail->move('postthumbnail',$thumbnailimagename);
        $updatepost->thumnail=$thumbnailimagename;



        //update Admin Image


        $adminimage = $request->adminimage;
        $adminimagename=time().'.'.$adminimage->getClientoriginalExtension();
        $request->adminimage->move('adminimage',$adminimagename);
        $updatepost->adminimage=$adminimagename;


        //save this File

        $updatepost->save();

        return redirect('/post_list')->with('success','Update Successfull');



    }

    public function deletepost($id){
        $deletepost = News::find($id);
        $deletepost->delete();
        return redirect('/post_list')->with('delete','Delete Successfull');
    }


    public function footer_add(){
        return view('admin.footer_add');
    }



    public function siteshow(){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $getdata = Home::all();
                return view('admin.siteshow',['getdata'=>$getdata[0]]);
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('/login');
        }


    }

    public function siteContent($id){

        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $getdata = Home::find($id);
                return view('admin.siteContent',['getdata'=>$getdata]);
            }
            else{
                return redirect()->back();
            }
        }
        else{
            redirect('/login');
        }

    }

    public function updateHomepage(Request $request,$id){
        $getdata = Home::find($id);

        $getdata->homeTitle = $request->title;
        $getdata->homeCaption = $request->caption;
        $getdata->homeBodyTitle = $request->bodytitle;
        $getdata->homeBodydescription = $request->bodydescription;

        //image site

        $bodyimage = $request->file;
        $bodyimagename=time().'.'.$bodyimage->getClientoriginalExtension();
        $request->file->move('bodyimage',$bodyimagename);
        $getdata->homeBodyImage=$bodyimagename;

        $getdata->save();
        return redirect('/siteshow');
    }

}
