<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\categories;

class adminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = products::latest()->paginate(3);
        $categories = categories::latest()->get();
        return view('Admin.products')->with([
            'products'=>$products,
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = categories::latest()->get();
        return view('Admin.add_product')->with('categories', $categories);
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
        $product = new products();
//        $product_category = new categories();
//        $this->validate($request, [
//            'name' => 'required',
//            'description' => 'required',
//            'price' => 'required',
//            'category' => 'required',
//            'image' => 'required',
//        ]);
        $product->name          = $request->name;
        $product->description   = $request->description;
        $product->price         = $request->price;
        if ($request->hasFile('imageFile')){
            $image = $request->file('imageFile')->getClientOriginalName();
            $request->file('imageFile')->storeAs('uploads/', $image);
        }
        $product->image = $image;
        $product->cat_id = $request->category;
        $product->save();
        return redirect(route('products.index'));
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
        //
        $product = products::find($id);
        return view('Admin.editProduct')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
//        $this->validate($request, ['name'=>'required']);
        $product = products::find($id);
        $product->name          = $request->name;
        $product->price         = $request->price;
        $product->description   = $request->description;
        $product->cat_id        = $request->cat_id;
        $product->save();
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $prodcuct = products::find($id);
        $prodcuct->destroy($id);
        return redirect(route('products.index'));
    }
}
