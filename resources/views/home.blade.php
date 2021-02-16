@extends('layouts.app')

@section('content')

@include('User.header')

<body>
@if(isset($msg))
    <script>alert('{{$msg}}')</script>
@endif


{{--<div class="category-tab"><!--category-tab-->--}}
{{--    <div class="col-sm-12">--}}
{{--        <ul class="nav nav-tabs">--}}
{{--            @if(count($categories) > 0)--}}
{{--                    @foreach($categories as $category)--}}
{{--                    <li class="active"> <a href="#" data-toggle="tab">{{$category->name}}</a></li>--}}
{{--                    @endforeach--}}
{{--            @endif--}}

{{--        </ul>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">--}}
{{--        <i class="fa fa-angle-left"></i>--}}
{{--    </a>--}}
{{--    <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">--}}
{{--        <i class="fa fa-angle-right"></i>--}}
{{--    </a>--}}
{{--</div>--}}

<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-md-4 clearfix">
                <div class="logo pull-left">
                    <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
                </div>
                <div class="btn-group pull-right clearfix">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                            USA
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="">Canada</a></li>
                            <li><a href="">UK</a></li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                            DOLLAR
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="">Canadian Dollar</a></li>
                            <li><a href="">Pound</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 clearfix">
                <div class="shop-menu clearfix pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href=""><i class="fa fa-user"></i> Account</a></li>
                        <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                        <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                        <li><a href="{{route('home.show', auth()->user()->id)}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-middle-->

<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="shop.html">Products</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="login.html">Login</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="blog.html">Blog List</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="404.html">404</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <input type="text" placeholder="Search"/>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-bottom-->
</header><!--/header-->

<section>
    <div class="container">
{{--        @if(isset($msg))--}}
{{--            <div class="alert alert-success">--}}
{{--                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
{{--                {{$msg}}--}}
{{--            </div>--}}
{{--        @endif--}}
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->




                        <div class="panel panel-default">
                            <div class="panel-heading">
                                @if(count($categories) > 0)
                                    @foreach($categories as $category)
                                        <li class="active"> <a href="#" data-toggle="tab">{{$category->name}}</a></li>
                                        <br>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                    </div><!--/category-products-->



                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well text-center">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->



                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    @if(count($products) > 0)
                                        @foreach($products as $product)
                                    <img src="{{asset('/storage/uploads/' . $product->image)}}" alt="" />
                                    <h2>{{$product->price}}</h2>
                                    <p>{{$product->description}}</p>
                                    <a href="{{route('user.add', ['u_id'=>auth()->user()->id, 'p_id' => $product->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        @endforeach
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>


                </div><!--features_items-->

                {{$products->links()}}
            </div><!--/recommended_items-->

        </div>
    </div>
    </div>
</section>

@include('User.footer')
@endsection
