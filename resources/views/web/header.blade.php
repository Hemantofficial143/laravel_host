<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="/"><img src="{{ asset('web_css/img/logo/logo.png') }}" alt=""></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>                                                
                            <ul id="navigation">  
                                <li><a href="/">Home</a></li>
                                <li><a href="shop.html">shop</a></li>
                                <li><a href="/about">about</a></li>
                                <li class="hot"><a href="#">Latest</a>
                                    <ul class="submenu">
                                        <li><a href="shop.html"> Product list</a></li>
                                        <li><a href="product_details.html"> Product Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="submenu">
                                        <li><a href="/login/">Login</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="elements.html">Element</a></li>
                                        <li><a href="confirmation.html">Confirmation</a></li>
                                        <li><a href="checkout.html">Product Checkout</a></li>
                                    </ul>
                                </li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Right -->
                    <div class="header-right">
                        <ul>
                            <li>
                                <div class="nav-search search-switch">
                                    <span class="flaticon-search"></span>
                                </div>
                            </li>
                            @if (Auth::check())
                            <li> <a href="/dashboard/"><span class="flaticon-user"> {{ Auth::user()->name }}</span></a></li>
                            <li><a href="/logout" style="color: black"> <i class="fas fa-sign-out-alt" ></i></a> </li>
                            @else
                            <li> <a href="/login/"><span class="flaticon-user"></span></a></li>
                            @endif
                            
                            
                        </ul>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>