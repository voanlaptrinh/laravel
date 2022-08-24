<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
  <!-- animate CSS -->
  <link rel="stylesheet" href="{{ asset('dist/css/animate.css') }}">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="{{ asset('dist/css/owl.carousel.min.css') }}">
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
                              <a href="{{asset('auth/logout')}}"> <i class="fa fa-window-close" aria-hidden="true"></i></a>
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

  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Shop Single</h2>
              <p>Home <span>-</span> Shop Single</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->
  <!--================End Home Banner Area =================-->

  <!--================Single Product Area =================-->
  <div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner justify-content-between">
        <div class="col-lg-7 col-xl-7">
          <div class="product_slider_img">
            <div id="vertical">
              
              <div data-thumb="{{asset('dist/images/20.jpg')}}">
                <img src="{{asset($single_product->images)}}" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="s_product_text">
            <h5>previous <span>|</span> next</h5>
            <h3>{{$single_product->nameProduct}}</h3>
            <h2>{{$single_product->price}}Đ</h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Category</span> :{{isset($single_product->category) ? $single_product->category->name : ''}}</a>
              </li>
              <li>
                <a href="#"> <span>Availibility</span> : In Stock</a>
              </li>
            </ul>
            <p>
              <h4>Mô tả: </h4> {{$single_product->describe}}
            </p>
            <div class="card_area d-flex justify-content-between align-items-center">
              <div class="product_count">
                <span class="inumber-decrement"> <i class="fa fa-arrow-up"></i></span>
                <input class="input-number" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="fa fa-arrow-down"></i></span>
              </div>
              <a href="{{route('client.addCart', $single_product->id)}}" class="btn_3">add to cart</a>
              <a href="{{route('client.addCart', $single_product->id)}}" class="like_us"> <i class="fas fa-shopping-cart icons"></i> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->

  <!--================Product Description Area =================-->
  <section class="product_description_area">
    <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
            aria-selected="false">Comments</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <div class="row">
            <div class="col-lg-6">
              <div class="comment_list">
                <div class="review_item">
                  <div class="media">
                    <div class="media-body">

                      @foreach ($comment as $comment)

                      <h4>{{$comment->user->name}}</h4>
                      {{$comment->content}} time:  {{$comment->created_at}}
                     
                      <hr>

                      @endforeach


                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="review_box">
                <h4>Post a comment</h4>
                <form class="row contact_form" action="{{route('client.comment', $single_product->id)}}" method="post" >
                  @csrf
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" name="content" id="content" rows="4"
                        placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 text-right">
                    <button class="btn_3">
                      Submit Now
                    </button>
                  </div>
                </form>


              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <!--================End Product Description Area =================-->



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
                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                  class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = ' Email Address '">
                <button type="submit" name="submit" id="newsletter-submit"
                  class="email_icon newsletter-submit button-contactForm">subscribe</button>
                <div class="mt-10 info"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright_part">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="copyright_text">
              <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="footer_icon social_icon">
              <ul class="list-unstyled">
                <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--::footer_part end::-->

  <!-- jquery plugins here-->
   <!-- jquery plugins here-->
  <!-- jquery -->
  <script src="{{asset('dist/js/jquery-1.12.1.min.js')}}"></script>
  <!-- popper js -->
  <script src="{{asset('dist/js/popper.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
  <!-- easing js -->
  <script src="{{asset('dist/js/jquery.magnific-popup.js')}}"></script>
  <!-- swiper js -->
  <script src="{{asset('dist/js/lightslider.min.js')}}"></script>
  <!-- swiper js -->
  <script src="{{asset('dist/js/masonry.pkgd.js')}}"></script>
  <!-- particles js -->
  <script src="{{asset('dist/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('dist/js/jquery.nice-select.min.js')}}"></script>
  <!-- slick js -->
  <script src="{{asset('dist/js/slick.min.js')}}"></script>
  <script src="{{asset('dist/js/swiper.jquery.js')}}"></script>
  <script src="{{asset('dist/js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('dist/js/waypoints.min.js')}}"></script>
  <script src="{{asset('dist/js/contact.js')}}"></script>
  <script src="{{asset('dist/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('dist/js/jquery.form.js')}}"></script>
  <script src="{{asset('dist/js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('dist/js/mail-script.js')}}"></script>
  <script src="{{asset('dist/js/stellar.js')}}"></script>
  <!-- custom js -->
  <script src="{{asset('dist/js/theme.js')}}"></script>
  <script src="{{asset('dist/js/custom.js')}}"></script>
</body>

</html>