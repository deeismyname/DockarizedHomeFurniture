<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Image;
use App\Models\WelcomeImage;
use Illuminate\Http\Request;


class HomeViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hero = WelcomeImage::with('categories')->get();
        // $category = Categories::with('products')->get();
        return view('admin.all_hero', compact('hero'));
    }//end of function

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::get();
        return view('admin.edit.create_hero', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1080,566)->save('upload/hero/'.$name_gen);
            $save_url = 'upload/hero/'.$name_gen;

            WelcomeImage:: insert([
                'catchy_title' => $request->catchy_title,
                'bold_short_Image_detail' => $request->bold_short_Image_detail,
                'image' => $save_url,
                'categories_id' =>$request->category
            ]);
            $notification = array(
            'message' => 'Welcome image created with Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('set_page.index')->with($notification);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hero = WelcomeImage::find($id);
        return view('admin.edit.edit_hero', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
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

        return redirect()->Back()->with($notification);

        } else{

            WelcomeImage::findOrFail($hero_id)->update([
                'catchy_title' => $request->catchy_title,
                'bold_short_Image_detail' => $request->bold_short_Image_detail,


            ]);
            $notification = array(
            'message' => 'Welcome Page Updated without Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('set_page.index')->with($notification);

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
    }//end of function

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
