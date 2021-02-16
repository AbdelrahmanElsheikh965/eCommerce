<?php

namespace App\Http\Controllers;

use App\categories;
use App\products;
use App\product_user;
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

    }

    public function showDetail($id){
        return view('User.detail');
    }
    public function add(Request $myRequest, $user_id, $product_id)
    {
        $userCart = new product_user();
        $userCart->user_id = $user_id;
        $userCart->product_id = $product_id;
        $userCart->save();
        $myRequest->session()->put('msg', 'Added to Cart Successfully');
        return redirect(route('home.index'));

//        $userTest = user_fav::select("*")
//                                ->where([
//                                    ["user_id", "=", $user_id],
//                                    ["product_id", "=", $product_id]
//                                ])
//                                ->get();
//        if ($userTest == true){
//            $myRequest->session()->put('msg', 'Already Added to Cart Before');
//            return redirect(route('home.index'));
//        }else{
//            $userCart->user_id = $user_id;
//            $userCart->product_id = $product_id;
//            $userCart->save();
//            $myRequest->session()->put('msg', 'Added to Cart Successfully');
//            return redirect(route('home.index'));
//        }
    }
}
