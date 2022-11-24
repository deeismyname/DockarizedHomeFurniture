<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Image;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\NullableType;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::with('categories')->get();
        // $category = Categories::with('products')->get();
        return view('admin.all_products', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Categories::all();
        return view('admin.edit.create_product', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = $request->file('primary_image');
            $name_gen = md5(rand(1000, 10000)).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(605,300)->save('upload/products/'.$name_gen);
            $save_url = 'upload/products/'.$name_gen;


        $image_1 = $request->file('image_1');
        $name_gen = md5(rand(1000, 10000)).'.'.$image_1->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image_1)->resize(605,300)->save('upload/products/'.$name_gen);
        $save_url_1 = 'upload/products/'.$name_gen;



        $image_2 = $request->file('image_2');
            $name_gen = md5(rand(1000, 10000)).'.'.$image_2->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image_2)->resize(605,300)->save('upload/products/'.$name_gen);
            $save_url_2 = 'upload/products/'.$name_gen;


            Product::insert([
                'name' => $request->name,
                'categories_id' => $request->category,
                'price' => $request->price,
                'description' => $request->description,
                'status' => $request -> status,
                'estimated_delivery_time' => $request->estimated_delivery_time,
                'available_quantity' => $request->available_quantity,
                'colors' => $request->colors,
                'supplier_name' => $request->supplier_name,
                'supplier_phone' => $request->supplier_phone,
                'video_description' => $request->video_description,
                'primary_image' => $save_url,
                'image_1' => $save_url_1,
                'image_2' => $save_url_2,


            ]);


            $notification = array(
            'message' => 'Product created successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
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
        return view('admin.edit.edit_product', compact('product'));
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


$my_array = [$request->file('primary_image'), $request->file('image_1'), $request->file('image_2')];
$insert_array = [];
foreach($my_array as $item) {
$save_url = '';
if($item) {
$image = $item;
    $name_gen = md5(rand(1000, 10000)).'.'.$image->getClientOriginalExtension();

    Image::make($image)->resize(523,605)->save('upload/products/'.$name_gen);
    $save_url = 'upload/products/'.$name_gen;


}
array_push($insert_array, $save_url);

}


$request->validate([
    'name' =>  'max:255',
    'category_id' => 'max:255',
    'price' =>  'max:255',
    'description' => 'nullable | max:255',
    'status'=> 'max:255',
    'estimated_delivery_time' => 'max:255',
    'available_quantity'=> 'max:255',
    'colors'=> 'max:255',
    'supplier_name'=> 'max:255',
    'supplier_phone' => 'max:255',
    'video_description'=> 'max:255',

]);

        // $product = Product::find($product->id);
       $product->update ([
        'name' => $request->name,
        'category_id' => $request->category,
        'price' => $request->price,
        'description' => $request->description,
        'status' => $request -> status,
        'estimated_delivery_time' => $request->estimated_delivery_time,
        'available_quantity' => $request->available_quantity,
        'colors' => $request->colors,
        'supplier_name' => $request->supplier_name,
        'supplier_phone' => $request->supplier_phone,
        'video_description' => $request->video_description,
        'primary_image' => $insert_array[0],
        'image_1' => $insert_array[1],
        'image_2' => $insert_array[2],
        ]);


    // $product->update($validatedData + [ 'primary_image' => $insert_array[0], 'image_1' => $insert_array[1], 'image_2' => $insert_array[2], ]);



        $notification = array(
        'message' => 'Product updated successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);


}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back()
                        ->with('success','Product deleted successfully');
    }

    public function checkout(Product $product)
    {
        return view('main.checkout', compact('product'));
    }

    public function search() {
        $search_text = $_GET['query'];
        $products = Product:: where('name', 'LIKE', '%'.$search_text.'%')->with('category')->get();
        return view('main.products', compact('products'));
    }
}


