<?php

namespace App\Http\Controllers;

use App\user_fav;
use Illuminate\Http\Request;
use App\categories;
use Illuminate\Support\Facades\DB;

class adminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retrieve all the categories.
//        $categories = categories::all();
        $categories = categories::latest()->paginate(3);
//        $categories = DB::table('categories')->paginate(2);
        return view('Admin.adminCategories')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.add_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [ 'name'=>'required']);
        $category = new categories();
        $category->name = $request->name;
        $category->save();
        return redirect(route('categories.index'));
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
//        $category = categories::find($id);
//        return view('Admin.editCategory')->with('category', $category);
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
        $category = categories::find($id);
        return view('Admin.editCategory')->with('category', $category);

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
        $this->validate($request, ['name'=>'required']);
        $category = categories::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect(route('categories.index'));
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
        $category = categories::find($id);
        $category->destroy($id);
        return redirect(route('categories.index'));
    }
}
