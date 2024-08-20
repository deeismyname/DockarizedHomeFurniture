<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Categories;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $default_category = "All";
        if($request->category){
            $products = Categories::where('category_name', $request->category)->firstOrFail()->products()->paginate(15)->withQueryString();
            $default_category = $request->category;
        }
        else{
            $products = Product::latest()->paginate(15);
        }

        $categories = Categories::all();

        return view('main.products', compact('products', 'categories', 'default_category'));
        //super works well

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $category = Categories::all();
    //     $product = Product::find($id);
    //     $comments = $product->comments ? json_decode($product->comments, true) : [];
    //     foreach($comments as $comment){
    //         $comment->user = User::find($comment[key]);
    //     }
    //     return view('main.product', compact('product', 'category', 'comments'));
    // }

    public function show($id)
{
    $category = Categories::all();
    $product = Product::find($id);

    $comments = $product->comments ? json_decode($product->comments, true) : [];
    $product->comments = $comments;


    // Create an array to store the comments with user information
    $comments_with_users = [];

    foreach($comments as $user_id => $comment_text) {
        $user = User::select('name')->find($user_id);
        $comments_with_users[] = [
            'content' => $comment_text,
            'user' => $user ? $user->name : 'Unknown User',
        ];
    }

    return view('main.product', compact('product', 'category', 'comments_with_users'));
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
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
        //
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
