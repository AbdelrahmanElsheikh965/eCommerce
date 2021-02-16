<?php

namespace App\Http\Controllers;

use App\categories;
use App\product_user;
use App\products;
use App\User;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $myRequest)
    {
        //
//        $referer = Request::referer();
        // or
//        $referer = URL::previous();
////        $referer = Request::server('HTTP_REFERER');
//        if (strpos($referer,'addToCart') !== false) {
//            $msg = 'coming from adding to cart';
//        }
        $products = products::latest()->paginate(3);
        $categories = categories::latest()->get();
        if ($myRequest->session()->has('msg')) {
            $msg = $myRequest->session()->get('msg');
            $myRequest->session()->forget('msg');
            return view('home')->with([
                'products' => $products,
                'categories' => $categories,
                'msg' => $msg
            ]);
        } else {
            return view('home')->with([
                'products' => $products,
                'categories' => $categories
            ]);
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
//        $userCart = product_user::select('user_id','product_id')->where('user_id', $id)->get();
//        $userCart = product_user::where('user_id', $id)->get();
//        $userCart = User::has('products')->where('id', $id)->get();
//        $userCart = User::find($id);
        $categories = categories::latest()->get();
        $products = products::latest()->get();
        $user = User::find($id);
        return view('User.cart')->with([
            'products'=>$products,
            'categories'=>$categories,
            'user'=>$user
        ]);
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
        product_user::find($id);
//        $product = product_user::find($id);
//        $product->destroy($id);
        return redirect(route('home.index'));
    }
}
