<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\WelcomeImage;

class HomeController extends Controller
{

    public function redirect(){
        $products = Product::orderBy('id', 'DESC')->paginate(4);
        $heros = WelcomeImage::with('categories')->get();
        if (Auth::guest()) {
            return view('main.home', compact('products', 'heros'));
        } else {
            $status = Auth::user()->status;
            if($status== '1'){
                return view('admin.index');
            }
            else{

                return view('main.home', compact('products', 'heros'));


            }

        }

    }
}

