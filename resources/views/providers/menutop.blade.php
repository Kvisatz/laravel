<div class="main-menu">
    <ul>
        <li class="has-children">
            <a href="#">Home</a>
            <ul class="sub-menu">
                <li><a href="index.html">Home 1</a></li>
                <li><a href="index-2.html">Home 2</a></li>
                <li><a href="index-3.html">Home 3</a></li>
                <li><a href="index-4.html">Home 4</a></li>
            </ul>
        </li>
        <li class="has-children position-static">
            <a href="#">Shop</a>
            <ul class="mega-menu">
                <li class="mega-menu-col">
                    <h4 class="mega-menu-title">Категории</h4>
                    <ul class="m-b-n10">
                        @foreach($categories as $category)
                            <li><a href="{{ url('/category', [$category->id]) }}">{{ $category->name }} </a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="mega-menu-col">
                    <h4 class="mega-menu-title">Product Layout</h4>
                    <ul class="m-b-n10">
                        <li><a href="single-product.html">Single Product</a></li>
                        <li><a href="single-product-sale.html">Single Product Sale</a></li>
                        <li><a href="single-product-variable.html">Single Product Variable</a></li>
                        <li><a href="single-product-countdown.html">Single Product Countdown</a></li>
                        <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                        <li><a href="single-product-slider.html">Single Product Slider</a></li>
                    </ul>
                </li>
                <li class="mega-menu-col">
                    <h4 class="mega-menu-title">Other Pages</h4>
                    <ul class="m-b-n10">
                        <li><a href="my-account.html">My Account</a></li>
                        <li><a href="login.html">Login | Register</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="compare.html">Compare</a></li>
                    </ul>
                </li>
                <li class="mega-menu-col">
                    <div class="megamenu-image">
                        <a href="shop.html">
                            <img class="fit-image" src="assets/images/header/mega-menu.png" alt="Megamenu Image">
                        </a>
                    </div>
                </li>
            </ul>
        </li>
        <li class="has-children">
            <a href="#">Pages</a>
            <ul class="sub-menu">
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="error-404.html">Error 404</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
            </ul>
        </li>
        <li class="has-children">
            <a href="#">Blog</a>
            <ul class="sub-menu">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                <li><a href="blog-details.html">Blog Details</a></li>
                <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
            </ul>
        </li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</div>