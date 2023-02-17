<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function accountRegisterForm()
    {
        return view('backend.admin.account.add');
    }
    public function accountRegister(Request $request)
    {
        $account = [
            'name' => $request->name,
            'email' => $request->email,
            'nid' => $request->nid,
            'phone' => $request->phone,
            'type' => $request->type,
            'password' => bcrypt($request->password),

        ];

        Account::created($account);
        return redirect()->back()->withSuccess('Account has been Inseted');

    }
}
