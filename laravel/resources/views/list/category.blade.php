<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/all.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/themify-icons.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/price_rangs.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ asset('/') }}"> <img
                                src="{{ asset('dist/images/logo.png') }}" width="150px" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('client.Home') }}">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Shop
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="{{ route('client.category') }}"> shop
                                            category</a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="{{ route('auth.getLogin') }}">login</a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2">
                                        blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="{{ route('client.blog') }}"> blog</a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('client.contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <a id="search_1" href="javascript:void(0)"><label for="search-box"
                                    class="fas fa-search icons"></label></a>

                            <div style="margin-right: 8px">

                                @if (Auth::User())
                                    <a href="{{ asset('auth/logout') }}"> <i class="fa fa-window-close"
                                            aria-hidden="true"></i></a>
                                @else
                                    <a href="{{ route('auth.getLogin') }}"><i class="fas fa-user"></i></a>
                                @endif



                            </div>
                            <div class="dropdown cart">
                                <a class="dropdown-toggle" href="{{ route('client.cart') }}" id="navbarDropdown3">
                                    <i class="fas fa-shopping-cart icons"></i>
                                </a>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Shop Category</h2>
                            <p>Home <span>-</span> Shop Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Browse Categories</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    @foreach ($category as $category)
                                        <li>
                                            <a
                                                href="{{ route('client.categoryProducts', $category->id) }}">{{ $category->name }}</a>

                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-9">

                    <div class="col-lg-9">
                        <div class="product_top_bar">
                            <form action="{{ route('client.searchProduct') }}" class="input-group" method="get">
                                @csrf
                                <input type="text" name="name" placeholder="nhập vào sản phẩm muốn tìm..."
                                    class="form-control">
                                <button class="btn btn-primary">Tìm kiếm</button>
                            </form>
                        </div>


                        <div class="row align-items-center latest_product_inner">
                            @foreach ($products as $item)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{ asset($item->images) }}" alt="">
                                        <div class="single_product_text">
                                            <h4>{{ $item->nameProduct }}</h4>
                                            {{-- <button class="btn btn-success" >{{$item->status==0 ? "còn hàng" : "hết"}}</button><br> --}}
                                            <hr>
                                            <span class="text-monospace">
                                                <h5>Mục: {{ isset($item->category) ? $item->category->name : '' }}
                                                </h5>
                                            </span>
                                            <span></span>
                                            <h3>Giá: {{ $item->price }} VNĐ</h3>
                                            <a href="{{ route('client.single-product', $item->id) }}"
                                                class="add_cart">Xem chi tiết +<i
                                                    class="fas fa-shopping-cart icons"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-lg-12">
                                <div class="pageination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">

                                            <div> {{ $products->links() }}</div>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->


    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Top Products</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Managed Website</a></li>
                            <li><a href="">Manage Reputation</a></li>
                            <li><a href="">Power Tools</a></li>
                            <li><a href="">Marketing Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Features</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Guides</a></li>
                            <li><a href="">Research</a></li>
                            <li><a href="">Experts</a></li>
                            <li><a href="">Agencies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                        </p>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative mail_part">
                                <input type="email" name="email" id="newsletter-form-email"
                                    placeholder="Email Address" class="placeholder hide-on-focus"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm">subscribe</button>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{ asset('dist/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('dist/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ asset('dist/js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('dist/js/swiper.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('dist/js/masonry.pkgd.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('dist/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.nice-select.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('dist/js/slick.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('dist/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('dist/js/contact.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.form.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('dist/js/mail-script.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('dist/js/custom.js') }}"></script>
</body>

</html>
