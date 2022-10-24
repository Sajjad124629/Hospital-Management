<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Home;
use App\Models\Appoinment;
use App\Models\News;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
          if(Auth::user()->usertype=='0'){
            $search = request()->query('search');
            if($search){
                $post = News::where('newstitle','Like',"%{$search}%")->simplePaginate(3);
            }

            else{
                $post = News::all()->random(3);
            }

            $postdata = $post;
            $doctor = Doctor::all();
            $homedata = Home::all();
            return view('user.home',['doctor'=>$doctor,'postdata'=>$postdata,'homedata'=>$homedata[0]]);
          }
          else{
            return view('admin.home');
          }
        }
        else{
            return redirect()->back();
        }
    }
    public function index(Request $request){
        if(Auth::id()){
            return redirect('home');
        }
        else{
            $search = request()->query('search');
            if($search){
                $post = News::where('newstitle','Like',"%{$search}%")->simplePaginate(3);
            }

            else{
                $post = News::all()->random(3);
            }



            $postdata =$post;
            $homedata = Home::all();
            $doctor = Doctor::all();

        return view('user.home',['doctor'=>$doctor,'postdata'=>$postdata,'homedata'=>$homedata[0]]);
        }
    }

    public function appointment(Request $request){
        $appoinment = new Appoinment;
        $appoinment->name = $request->name;
        $appoinment->email=$request->email;
        $appoinment->date=$request->date;
        $appoinment->doctor=$request->doctor;
        $appoinment->phone=$request->number;
        $appoinment->message=$request->message;

        $appoinment->status='In Progress';

        if(Auth::id()){

            $appoinment->user_id=Auth::user()->id;
        }

        $appoinment->save();

        return redirect()->back()->with('message','Appoinment Request SuccessFull.We Will contact You Soon');


    }

    public function myappointment(){

        if(Auth::id()){
            $userid = Auth::user()->id;
            $appoint = Appoinment::where('user_id',$userid)->get();

            return view('user.my_appointment',['appoint'=>$appoint]);
        }
        else{
            return redirect()->back();
        }

    }
    public function cancel_appoint($id){
         $appoints = Appoinment::find($id);
         $appoints->delete();
        return redirect()->back();

    }


    public function about(){
        $search = request()->query('search');
        if($search){
            $post = Doctor::where('name','Like',"%{$search}%")->simplePaginate(3);
        }

        else{
            $post = Doctor::all()->random(3);
        }
        $doctortdata =  $post;
        $homedata = Home::all();
        return view('user.about',['doctordata'=>$doctortdata,'homedata'=>$homedata[0]]);
    }

    public function doctorpage(){
        $search = request()->query('search');
        if($search){
            $post = Doctor::where('name','Like',"%{$search}%")->simplePaginate(3);
        }

        else{
            $post = Doctor::all();
        }
        $doctortdata = $post;
        return view('user.doctorpage',['doctordata'=>$doctortdata]);
    }

    public function newspage(){

        $search = request()->query('search');
        if($search){
            $post = News::where('newstitle','Like',"%{$search}%")->simplePaginate(3);
        }

        else{
            $post = News::all();
        }
        $newsdata = $post;
        $newsdatarandom = News::all()->random(3);
        return view('user.newspage',['newsdata'=>$newsdata,'newsdatarandom'=>$newsdatarandom]);
    }


    public  function news_details($id){
        $getNewsdetails = News::find($id);
        $newsdatarandom = News::all()->random(3);
        return view('user.news_details',['newsDetails'=>$getNewsdetails,'newsdatarandomdetails'=>$newsdatarandom]);
    }

    public function map(){
        return view('user.map');
    }

}
