<?php

namespace App\Http\Controllers;

use App\categories;
use App\products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = products::latest()->paginate(3);
        $categories = categories::latest()->get();
        return view('home')->with([
            'products'=>$products,
            'categories'=>$categories
        ]);
    }
}
