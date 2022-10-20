<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        $status = Auth::user()->status;
        if($status== '1'){
            return view('admin.index');
        }
        else{
            return view('main.home');
        }
    }
}
