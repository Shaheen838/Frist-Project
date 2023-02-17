<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function AddDepartmentForm()
    {
        return view('backend.admin.department.add');
    }
    public function DepartmentStore(Request $request)
    {
        $data = [
            'name' => $request->name,
            'slug' => str_replace(' ', '-', strtolower($request->name)) ,
        ];

        Department::insert($data);
        return redirect()->back()->withSuccess('Department has been Created!');
    }
    public function DepartmentManage()
    {
        $departments = Department::orderBy('id', 'desc' )->get();
        return view('backend.admin.department.manage', compact('departments'));
    }
    public function DepartmentDelete(Department $department)
    {
        $department->delete();
        session()->flash('success', 'Department has been Deleted');
        return redirect()->back();

    }
}
