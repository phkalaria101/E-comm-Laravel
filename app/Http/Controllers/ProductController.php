<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class ProductController extends Controller
{
    //
    function index()
    {
        return "Welcome To Product Page";
    }
}
