<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WelcomeImage;
use Image;

class WelcomeImageController extends Controller
{
    public function index(){
        $hero = WelcomeImage::find(1);
        return view('admin.edit.edit_hero', compact('hero'));
    }

    public function update(Request $request){

        $hero_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1080,566)->save('upload/hero/'.$name_gen);
            $save_url = 'upload/hero/'.$name_gen;

            WelcomeImage::findOrFail($hero_id)->update([
                'catchy_title' => $request->catchy_title,
                'bold_short_Image_detail' => $request->bold_short_Image_detail,
                'image' => $save_url,

            ]);
            $notification = array(
            'message' => 'Welcome page Updated with Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);

        } else{

            WelcomeImage::findOrFail($hero_id)->update([
                'catchy_title' => $request->catchy_title,
                'bold_short_Image_detail' => $request->bold_short_Image_detail,


            ]);
            $notification = array(
            'message' => 'Welcome Page Updated without Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } // end Else

     }
    //end of Functions

    public function Hero(Request $request){

        $hero_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1080,566)->save('upload/hero/'.$name_gen);
            $save_url = 'upload/hero/'.$name_gen;

            WelcomeImage::findOrFail($hero_id)->update([
                'catchy_title' => $request->catchy_title,
                'bold_short_Image_detail' => $request->bold_short_Image_detail,
                'image' => $save_url,

            ]);
            $notification = array(
            'message' => 'Welcome page Updated with Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);

        } else{

            WelcomeImage::findOrFail($hero_id)->update([
                'catchy_title' => $request->catchy_title,
                'bold_short_Image_detail' => $request->bold_short_Image_detail,


            ]);
            $notification = array(
            'message' => 'Welcome Page Updated without Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } // end Else

     }
    //end of Functions
}
