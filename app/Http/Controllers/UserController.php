<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Middleware\UserAuth;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        //return "hello from Controller";
        $user = User::where(['email'=>$req->email])->first();
        if(!$user && !Hash::check($req->password,$user->password))
        {
            return "Provided Credentials Is Not Match With Our Record";
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
