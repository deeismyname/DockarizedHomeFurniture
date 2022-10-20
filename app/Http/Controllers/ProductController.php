<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $product = Product::all();
        return view('admin.all_products', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.edit.create_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(523,605)->save('upload/home_about/'.$name_gen);
            $save_url = 'upload/products/'.$name_gen;

            $this->validate($request, [
                'name' => $request->name,
                'category' => $request->category,
                'price' => $request->price,
                'description' => $request->description,
                'status' => $request -> status,
                'tags' => $request -> tags,
                'estimated_delivery_time' => $request->estimated_delivery_time,
                'available_quantity' => $request->available_quantity,
                'colors' => $request->colors,
                'supplier_name' => $request->supplier_name,
                'supplier_phone' => $request->supplier_phone,
                'video_description' => $request->video_description,
                'primary_image' => $save_url,
                'other_images' => $save_url,

            ]);
            $notification = array(
            'message' => 'Product created successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    // else{

        //     Product::store([
        //         'name' => $request->name,
        //         'category' => $request->category,
        //         'price' => $request->price,
        //         'product_description' => $request->product_description,
        //         'status' => $request -> status,
        //         'estimated_delivery_time' => $request->estimated_delivery_time,
        //         'available_quantity' => $request->available_quantity,
        //         'colors' => $request->colors,
        //         'supplier_name' => $request->supplier_name,
        //         'supplier_phone' => $request->supplier_phone,
        //         'video_description' => $request->video_description,

        //     ]);
        //     $notification = array(
        //     'message' => 'About Page Updated without Image Successfully',
        //     'alert-type' => 'success'
        // );

        // return redirect()->back()->with($notification);

        // } // end Else
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.show_product');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.edit.edit_product');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(523,605)->save('upload/home_about/'.$name_gen);
            $save_url = 'upload/home_about/'.$name_gen;

            Product::findOrFail($product)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about_image' => $save_url,

            ]);
            $notification = array(
            'message' => 'About Page Updated with Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } else{

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,

            ]);
            $notification = array(
            'message' => 'About Page Updated without Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } // end Else
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
