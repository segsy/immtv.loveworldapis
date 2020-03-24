<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $user = Users::all();
        return view('manageusers', compact('user'));
    }

}
