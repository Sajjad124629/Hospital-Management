<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Appoinment;
use App\Models\News;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
          if(Auth::user()->usertype=='0'){
            $postdata = News::all();
            $doctor = Doctor::all();
            return view('user.home',['doctor'=>$doctor,'postdata'=>$postdata]);
          }
          else{
            return view('admin.home');
          }
        }
        else{
            return redirect()->back();
        }
    }
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{
            $postdata = News::all();
        $doctor = Doctor::all();
        return view('user.home',['doctor'=>$doctor,'postdata'=>$postdata]);
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



}
