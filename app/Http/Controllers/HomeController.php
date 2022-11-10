<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    // public function redirect(){

    //     $product = Product::orderBy('id', 'DESC')->get();

    //     $status = Auth::user()->status;

    //    if($status== '1'){
    //         return view('admin.index');
    //     }
    //     else{
    //         return view('main.home', compact('product'));

    //     }
    // }

    public function redirect(){
        $product = Product::orderBy('id', 'DESC')->get();

        if (Auth::guest()) {
            return view('main.home', compact('product'));
        } else {
            $status = Auth::user()->status;
            if($status== '1'){
                return view('admin.index');
            }
            else{
                return view('main.home', compact('product'));

            }

        }

    }
}

