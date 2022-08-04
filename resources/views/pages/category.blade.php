

@extends('layouts/'.$template)


@section('content')
    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Shop Sidebar</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Shop Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-margin">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-12">

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper flex-column flex-md-row p-2 m-b-40 border">

                        <!-- Shop Top Bar Left start -->
                        <div class="shop-top-bar-left">

                            <div class="shop_toolbar_btn">
                                <button data-role="grid_3" type="button" class="active btn-grid-3" title="Grid"><i class="ti-layout-grid4-alt"></i></button>
                                <button data-role="grid_list" type="button" class="btn-list" title="List"><i class="ti-align-justify"></i></button>
                            </div>
                            <div class="shop-top-show">
                                <span>Showing 1–12 of 39 results</span>
                            </div>

                        </div>
                        <!-- Shop Top Bar Left end -->

                        <!-- Shopt Top Bar Right Start -->
                        <div class="shop-top-bar-right">

                            <h4 class="title m-r-10">Short By: </h4>

                            <div class="shop-short-by">
                                <select class="nice-select" aria-label=".form-select-sm example">
                                    <option selected="">Short by Default</option>
                                    <option value="1">Short by Popularity</option>
                                    <option value="2">Short by Rated</option>
                                    <option value="3">Short by Latest</option>
                                    <option value="3">Short by Price</option>
                                    <option value="3">Short by Price</option>
                                </select>
                            </div>
                        </div>
                        <!-- Shopt Top Bar Right End -->

                    </div>
                    <!--shop toolbar end-->

                    <!-- Shop Wrapper Start -->
                    <div class="row shop_wrapper grid_3">


                        @foreach($category->products as $product)
                            <!-- Single Product Start -->
                            <div class="col-lg-4 col-md-4 col-sm-6 product">
                                <div class="product-inner">
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="fit-image" src="/assets/images/{{ $product->img }}" alt="Product">
                                        </a>
                                        <span class="badges">
                                                <span class="sale">-18%</span>
                                        </span>
                                        <div class="action-wrapper">
                                            <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                            <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="single-product.html">{{ $product->name }}</a></h5>
                                        <span class="rating">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        <span class="price">
                                            <span class="new">{{ $product->price }}</span>
                                            @if($product->old_price)
                                                <span class="old">{{ $product->old_price }}</span>
                                            @endif
                                        </span>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                        <!-- Cart Button Start -->
                                        <div class="cart-btn action-btn">
                                            <div class="action-cart-btn-wrapper d-flex">
                                                <div class="add-to_cart">
                                                    <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                                </div>
                                                <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                            </div>
                                        </div>
                                        <!-- Cart Button End -->
                                    </div>
                                </div>
                            </div>
                        @endforeach







                        <!-- Single Product Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="fit-image" src="assets/images/products/medium-product/1.png" alt="Product">
                                    </a>
                                    <span class="badges">
                                            <span class="sale">-18%</span>
                                    </span>
                                    <div class="action-wrapper">
                                        <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                        <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">An Animal Album</a></h5>
                                    <span class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    <span class="price">
                                            <span class="new">$80.50</span>
                                    <span class="old">$85.80</span>
                                    </span>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="fit-image" src="assets/images/products/medium-product/3.png" alt="Product">
                                    </a>
                                    <span class="badges">
                                            <span class="new">New</span>
                                    </span>
                                    <div class="action-wrapper">
                                        <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                        <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">Wait, You Need This</a></h5>
                                    <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    <span class="price">
                                            <span class="new">$90.00</span>
                                    </span>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="fit-image" src="assets/images/products/medium-product/4.png" alt="Product">
                                    </a>
                                    <div class="action-wrapper">
                                        <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                        <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">Pet Food Corner</a></h5>
                                    <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    <span class="price">
                                            <span class="new">$105.00</span>
                                    </span>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="fit-image" src="assets/images/products/medium-product/5.png" alt="Product">
                                    </a>
                                    <span class="badges">
                                            <span class="sale">-18%</span>
                                    </span>
                                    <div class="action-wrapper">
                                        <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                        <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                    </div>

                                    <div class="countdown-area">
                                        <div class="countdown-wrapper" data-countdown="2028/12/28"><div class="single-countdown"><span class="single-countdown_time">2367</span><span class="single-countdown_text">Days</span></div><div class="single-countdown"><span class="single-countdown_time">03</span><span class="single-countdown_text">Hours</span></div><div class="single-countdown"><span class="single-countdown_time">32</span><span class="single-countdown_text">Mins</span></div><div class="single-countdown"><span class="single-countdown_time">34</span><span class="single-countdown_text">Secs</span></div></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">Pet Leaving House</a></h5>
                                    <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    <span class="price">
                                            <span class="new">$47.50</span>
                                    <span class="old">$50.00</span>
                                    </span>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="fit-image" src="assets/images/products/medium-product/6.png" alt="Product">
                                    </a>
                                    <span class="badges">
                                            <span class="sale">-20%</span>
                                    </span>
                                    <div class="action-wrapper">
                                        <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                        <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">Pet Leaving House</a></h5>
                                    <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    <span class="price">
                                            <span class="new">$58.50</span>
                                    <span class="old">$62.85</span>
                                    </span>
                                    <p>A long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal...</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="fit-image" src="assets/images/products/medium-product/7.png" alt="Product">
                                    </a>
                                    <span class="badges">
                                            <span class="new">New</span>
                                    </span>
                                    <div class="action-wrapper">
                                        <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                        <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">This is the testing</a></h5>
                                    <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    <span class="price">
                                            <span class="new">$78.50</span>
                                    </span>
                                    <p>As opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for...</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="fit-image" src="assets/images/products/medium-product/8.png" alt="Product">
                                    </a>
                                    <div class="action-wrapper">
                                        <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                        <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">Basic Dog Trainning</a></h5>
                                    <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    <span class="price">
                                            <span class="new">$55.00</span>
                                    </span>
                                    <p>There are many variations of passages of lorem ipsum, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="fit-image" src="assets/images/products/medium-product/2.png" alt="Product">
                                    </a>
                                    <span class="badges">
                                            <span class="sale">-20%</span>
                                    </span>
                                    <div class="action-wrapper">
                                        <a href="#/" class="action quickview" title="Quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                        <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">Animal For Life</a></h5>
                                    <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    <span class="price">
                                            <span class="new">$75.50</span>
                                    <span class="old">$82.85</span>
                                    </span>
                                    <p>There are many variations of passages of lorem ipsum, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="fit-image" src="assets/images/products/medium-product/8.png" alt="Product">
                                    </a>
                                    <div class="action-wrapper">
                                        <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                        <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">Basic Dog Trainning</a></h5>
                                    <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    <span class="price">
                                            <span class="new">$55.00</span>
                                    </span>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="fit-image" src="assets/images/products/medium-product/1.png" alt="Product">
                                    </a>
                                    <span class="badges">
                                            <span class="sale">-18%</span>
                                    </span>
                                    <div class="action-wrapper">
                                        <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                        <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">An Animal Album</a></h5>
                                    <span class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    <span class="price">
                                            <span class="new">$80.50</span>
                                    <span class="old">$85.80</span>
                                    </span>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="fit-image" src="assets/images/products/medium-product/2.png" alt="Product">
                                    </a>
                                    <span class="badges">
                                            <span class="sale">-20%</span>
                                    </span>
                                    <div class="action-wrapper">
                                        <a href="#/" class="action quickview" title="Quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                        <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">Animal For Life</a></h5>
                                    <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    <span class="price">
                                            <span class="new">$75.50</span>
                                    <span class="old">$82.85</span>
                                    </span>
                                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="fit-image" src="assets/images/products/medium-product/4.png" alt="Product">
                                    </a>
                                    <div class="action-wrapper">
                                        <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                        <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="single-product.html">Pet Food Corner</a></h5>
                                    <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    <span class="price">
                                            <span class="new">$105.00</span>
                                    </span>
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                            <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                    </div>
                    <!-- Shop Wrapper End -->

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper justify-content-center m-t-50">

                        <!-- Shopt Top Bar Right Start -->
                        <div class="shop-top-bar-right">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link active" href="#/">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#/">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#/">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link rounded-0" href="#/" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Shopt Top Bar Right End -->

                    </div>
                    <!--shop toolbar end-->

                </div>
                <div class="col-lg-3 col-12">
                    <!-- Sidebar Widget Start -->
                    <aside class="sidebar_widget m-t-50 mt-lg-0">
                        <div class="widget_inner">
                            <div class="widget-list m-b-50">
                                <h3 class="widget-title m-b-30">Search</h3>
                                <div class="search-box">
                                    <input type="text" class="form-control" placeholder="Search Our Store" aria-label="Search Our Store">
                                    <button class="search-icon" type="button">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="widget-list m-b-50">
                                <h3 class="widget-title m-b-30">Categories</h3>
                                <div class="sidebar-body">
                                    <ul class="sidebar-list">
                                        <li><a href="#/">All Product</a></li>
                                        <li><a href="#/">Best Seller (5)</a></li>
                                        <li><a href="#/">Featured (4)</a></li>
                                        <li><a href="#/">New Products (6)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list m-b-50">
                                <h3 class="widget-title m-b-30">Color</h3>
                                <div class="sidebar-body">
                                    <ul class="checkbox-container categories-list">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                <label class="custom-control-label" for="customCheck12">black (20)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                <label class="custom-control-label" for="customCheck13">red (6)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                <label class="custom-control-label" for="customCheck14">blue (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                <label class="custom-control-label" for="customCheck11">green (5)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                <label class="custom-control-label" for="customCheck15">pink (4)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list m-b-50">
                                <h3 class="widget-title m-b-30">Tags</h3>
                                <div class="sidebar-body">
                                    <ul class="tags m-b-n10">
                                        <li><a href="#/">Pet Food</a></li>
                                        <li><a href="#/">Animals</a></li>
                                        <li><a href="#/">Domestic</a></li>
                                        <li><a href="#/">Wild</a></li>
                                        <li><a href="#/">Dogs</a></li>
                                        <li><a href="#/">Cats</a></li>
                                        <li><a href="#/">Hubby</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list">
                                <h3 class="widget-title m-b-30">Recent Products</h3>
                                <div class="sidebar-body product-list-wrapper m-b-n30">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list m-b-30">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="assets/images/products/small-product/1.png" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Pet Leaving House</a>
                                            </h6>
                                            <span class="price">
                                                    <span class="new">$12.50</span>
                                            <span class="old">$15.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list m-b-30">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="assets/images/products/small-product/2.png" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">This is the testing</a>
                                            </h6>
                                            <span class="price">
                                                    <span class="new">$10.50</span>
                                            <span class="old">$12.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list m-b-30">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img class="fit-image first-image" src="assets/images/products/small-product/3.png" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="single-product.html">Animals for life</a>
                                            </h6>
                                            <span class="price">
                                                    <span class="new">$22.50</span>
                                            <span class="old">$25.85</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- Sidebar Widget End -->
                </div>
            </div>
        </div>
    </div>

@endsection

