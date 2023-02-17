<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function adminLoginForm()
    {
        return view('backend.admin.login');
    }
    public function adminDashboard()
    {
        return view('backend.admin.dashbord');
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $admin = Admin::where('email', $request ->email)->first();
        if (!$admin)
        {
            return redirect()->back()->withError('Invalid user email');
        }else{
           if (password_verify($request->password,$admin->password )){

            return redirect('/admin/dashboard');
           }else{
            return redirect()->back()->withError('Invalid user password');
           }
        }
    }
    public function adminLogout()
    {
        Session()->flush();
        return redirect('/admin/login')->withSuccess('You are succcesfully log out');
    }
    public function students()
    {
        $students = User::orderBy('created_at', 'desc')->paginate(3);
        return view('backend.admin.students.manage', compact('students'));
    }
    public function studentsDelete(User $user)
    {
        $user->delete();
        session()->flash('success', 'Student has been deleted');
        return redirect()->back();
    }

}
