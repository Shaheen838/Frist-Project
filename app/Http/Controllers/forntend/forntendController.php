<?php

namespace App\Http\Controllers\forntend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
Class forntendController extends Controller
{
  public function index()
  {
      return view('forntend.web.home.index');
  }

  public function register()
  {
    $departments = Department::all();
      return view('forntend.web.home.register', compact('departments'));
  }

  public function studentRegister(Request $request)
  {
      $this->validate($request, [
          'name' => 'required|string|max:255',
          'email' => 'required|email|unique:users,email',
          'phone' => 'required|max:15|min:11|unique:users,phone',
          'dept' => 'required',
          'password' => 'required|confirmed|max:20|min:8',
      ]);

      $student = new User();
      $student->name = $request->name;
      $student->email = $request->email;
      $student->phone = $request->phone;
      $student->dept = $request->dept;
      $student->password = bcrypt($request->password);
      $student->save();
      session()->flash('success', 'Your registration has been successfully done, please wait after approval');
      return redirect()->back();


  }


  public function login()
  {
      return view('forntend.web.home.login');
  }


  public function studentlogin(Request $request)
  {
      $this->validate($request, [
          'email' => 'required',
          'password' => 'required|max:20|min:8',
      ]);

      $email = User::where('email', $request->email)->first();
      if (!$email){
          return redirect()->back()->with('error','Your email not match, Please input your valid email');
      }else{
          'Session'::put('studentId', $email->id);
          'Session'::put('studentName', $email->name);
          return redirect('/student/dashboard')->with('success','Wellcome to your Dashbord');
      }
  }
  public function studentdashboard()
  {
      return view('forntend.student.home.index');
  }


   public function studentLogout()
   {
      session()->flush();
      return redirect('/')->withSuccess('Your are successfully logout');
   }
}
