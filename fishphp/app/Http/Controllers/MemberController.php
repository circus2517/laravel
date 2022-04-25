<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Hash;


class MemberController extends Controller
{
    //

    public function editPage()
    {
        return view('auth.edit');
    }

    public function update(Request $request)
    {
        $role = \Auth::user()->role;
        $user = User::findOrFail($request['id']);

        DB::table('users')
            ->where('id', '=', $request->id)
            ->update([
                'password' => Hash::make($request->password),
        ]);

        if($role == '1'){
            return redirect('admin');
        }else{
            return redirect('auth/divert');
        }
    }
}
