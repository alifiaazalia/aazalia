<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function daftar(Request $req)
    {
        $data = User::where('name','like',"%{$req->keyword}%")->paginate(1);
        return view('admin.pages.user.daftar',['data'=>$data]);
    }
}
