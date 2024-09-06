<?php

namespace App\Http\Controllers;

use App\Models\ShowCategory;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // { $product = Product::find('all');
    //     return view('admin.edit.display_category', compact('product'));
    // }

    public function index()
    {
        $categories = Categories::all();
        // dd($categories);
        return view('admin.edit.display_category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $category = Categories::find($id);
        return view('admin.edit.create_category', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category_name = $request->category_name;
        $categories_id = $request->categories_id;

        $create_category = Categories::create([
            'category_name' => $category_name,
            'categories_id' => $categories_id
        ]);

        $notification = array(
            'message' => 'Welcome image created with Image Successfully',
            'alert-type' => 'success'
        );

        if($create_category){
            return redirect()->route('show_category.index')->with($notification);
        }else{
            return redirect()->route('show_category.index')->with("Something went wrong. Please try again later");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShowCategory  $showCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ShowCategory $showCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShowCategory  $showCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $Category)
    {
        return view('admin.edit.edit_category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShowCategory  $showCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShowCategory $showCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShowCategory  $showCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShowCategory $showCategory)
    {
        //
    }
}
