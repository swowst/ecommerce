<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="token" content="{{ csrf_token() }}">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("_assets/css/bootstrap.min.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("_assets/css/font-awesome.min.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("_assets/css/themify-icons.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("_assets/css/elegant-icons.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("_assets/css/owl.carousel.min.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("_assets/css/nice-select.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("_assets/css/jquery-ui.min.css") }}" type="text/css">
    <link rel="stylesheet" href="{{asset("_assets/css/slicknav.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{ asset("_assets/css/style.css") }}" type="text/css">
</head>

<body>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="{{ route('homepage') }}">
                            <img src="{{ asset("_assets/img/logo.png") }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <div class="input-group">
                            <input id="searchInput" type="text" placeholder="What do you need?">
                            <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                        </li>
                        <li class="cart-icon">
                            <a href="#">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                        @foreach($basket->getItems() as $basketItem)
                                            <tr>
                                                <td class="si-pic"><img src="{{ asset('storage/'.$basketItem->get('extra_info')['product']->image) }}" alt=""></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>{{ $basketItem->get('price') }}$</p>
                                                        <h6>{{ $basketItem->get('title') }}</h6>
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>total:</span>
                                    <h5>{{ $basket->getTotal() }}$</h5>
                                </div>
                                <div class="select-button">
                                    <a href="{{ route('basket-view') }}" class="primary-btn view-card">VIEW CARD</a>
                                </div>
                            </div>
                        </li>
                        <li class="cart-price">{{ $basket->getTotal() }}$</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <x-categories></x-categories>
</header>
<!-- Header End -->

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                    <a href="./shop.html">Shop</a>
                    <span>Detail</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">

            <div class="col-lg-9">
                <div class="product-view">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="product-pic-zoom">
                                    <img class="product-big-img" src="{{ asset('storage/'.$product->image) }}" alt="">
                                    <div class="zoom-icon">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                                <div class="product-thumbs">
                                    <div class="product-thumbs-track ps-slider owl-carousel">
                                        <div class="pt active" data-imgbigurl="img/product-single/product-1.jpg"><img
                                                src="img/product-single/product-1.jpg" alt=""></div>
                                        <div class="pt" data-imgbigurl="img/product-single/product-2.jpg"><img
                                                src="img/product-single/product-2.jpg" alt=""></div>
                                        <div class="pt" data-imgbigurl="img/product-single/product-3.jpg"><img
                                                src="img/product-single/product-3.jpg" alt=""></div>
                                        <div class="pt" data-imgbigurl="img/product-single/product-3.jpg"><img
                                                src="img/product-single/product-3.jpg" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-details">
                                    <div class="pd-title">
                                        <h3>{{ $product->title }}</h3>
                                        <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                    </div>
                                    <div class="pd-desc">
                                        <p>{{ $product->description }}</p>
                                        <h4>{{$product->price}}$</h4>
                                    </div>
                                    <div class="pd-size-choose">
                                        <h5>Color</h5>
                                        <div class="sc-item">
                                            <input type="radio" id="md-size">
                                            <label for="md-size">bl</label>
                                        </div>
                                        <div class="sc-item">
                                            <input type="radio" id="md-size">
                                            <label for="md-size">wh</label>
                                        </div>
                                        <div class="sc-item">
                                            <input type="radio" id="md-size">
                                            <label for="md-size">or</label>
                                        </div>
                                    </div>
                                    <div class="pd-size-choose">
                                        <h5>Size</h5>
                                        <div class="sc-item">
                                            <input type="radio" id="md-size">
                                            <label for="md-size">m</label>
                                        </div>
                                        <div class="sc-item">
                                            <input type="radio" id="lg-size">
                                            <label for="lg-size">l</label>
                                        </div>
                                        <div class="sc-item">
                                            <input type="radio" id="xl-size">
                                            <label for="xl-size">xs</label>
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" class="count" value="1">
                                        </div>
                                        <a href="#" data-id="{{ $product->id }}" data-filters="" data-qty = "1" class="add-to-card primary-btn pd-cart">Add To Cart</a>

                                    </div>
                                    <ul class="pd-tags">
                                        <li><span>CATEGORIES</span>: {{ $product->category->title }}</li>
                                    </ul>
                                    <div class="pd-share">
                                        <div class="p-code">Sku : 00012</div>
                                        <div class="pd-social">
                                            <a href="#"><i class="ti-facebook"></i></a>
                                            <a href="#"><i class="ti-twitter-alt"></i></a>
                                            <a href="#"><i class="ti-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab">
                            <div class="tab-item-content">
                                <div class="tab-content">
                                    <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                        <div class="product-content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <h5>Introduction</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                                                    <h5>Features</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                                                </div>
                                                <div class="col-lg-5">
                                                    <img src="img/product-single/tab-desc.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                        <div class="specification-table">
                                            <table>
                                                <tr>
                                                    <td class="p-catagory">Customer Rating</td>

                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Price</td>
                                                    <td>
                                                        <div class="p-price">$495.00</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Add To Cart</td>
                                                    <td>
                                                        <div class="cart-add">+ add to cart</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Availability</td>
                                                    <td>
                                                        <div class="p-stock">22 in stock</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Weight</td>
                                                    <td>
                                                        <div class="p-weight">1,3kg</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Size</td>
                                                    <td>
                                                        <div class="p-size">Xxl</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Color</td>
                                                    <td><span class="cs-color"></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Sku</td>
                                                    <td>
                                                        <div class="p-code">00012</div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                        <div class="customer-review-option">
                                            <h4>2 Comments</h4>
                                            <div class="comment-option">
                                                <div class="co-item">
                                                    <div class="avatar-pic">
                                                        <img src="img/product-single/avatar-1.png" alt="">
                                                    </div>
                                                    <div class="avatar-text">
                                                        <div class="at-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <h5>Brandon Kelley <span>27 Aug 2019</span></h5>
                                                        <div class="at-reply">Nice !</div>
                                                    </div>
                                                </div>
                                                <div class="co-item">
                                                    <div class="avatar-pic">
                                                        <img src="img/product-single/avatar-2.png" alt="">
                                                    </div>
                                                    <div class="avatar-text">
                                                        <div class="at-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <h5>Roy Banks <span>27 Aug 2019</span></h5>
                                                        <div class="at-reply">Nice !</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="personal-rating">
                                                <h6>Your Ratind</h6>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <div class="leave-comment">
                                                <h4>Leave A Comment</h4>
                                                <form action="#" class="comment-form">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <input type="text" placeholder="Name">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" placeholder="Email">
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <textarea placeholder="Messages"></textarea>
                                                            <button type="submit" class="site-btn">Send message</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->

<!-- Related Products Section End -->
<div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($allProducts as $product)

            <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('storage/'.$product->image) }}" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="{{ route('detail-view', $product->id) }}">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">{{ $product->category->title }}</div>
                            <a href="#">
                                <h5>{{ $product->title }}</h5>
                            </a>
                            <div class="product-price">
                                {{ $product->price }}$
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Related Products Section End -->

<!-- Partner Logo Section Begin -->
<!-- Partner Logo Section End -->

<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="#"><img src="img/footer-logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: 60-49 Road 11378 New York</li>
                        <li>Phone: +65 11.188.888</li>
                        <li>Email: hello.colorlib@gmail.com</li>
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Serivius</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Shop</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>Join Our Newsletter Now</h5>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter Your Mail">
                        <button type="button">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="payment-pic">
                        <img src="img/payment-method.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="{{ asset("_assets/js/jquery-3.3.1.min.js") }}"></script>
<script src="{{ asset("_assets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("_assets/js/jquery-ui.min.js") }}"></script>
<script src="{{ asset("_assets/js/jquery.countdown.min.js") }}"></script>
<script src="{{ asset("_assets/js/jquery.nice-select.min.js") }}"></script>
<script src="{{ asset("_assets/js/jquery.zoom.min.js") }}"></script>
<script src="{{ asset("_assets/js/jquery.dd.min.js") }}"></script>
<script src="{{ asset("_assets/js/jquery.slicknav.js") }}"></script>
<script src="{{ asset("_assets/js/owl.carousel.min.js") }}"></script>
<script src="{{ asset("_assets/js/main.js") }}"></script>

<script>
    $(document).on('change', '.count', function (e){
        e.preventDefault()
        let qty = $(this).val()
        $('.add-to-card').attr('data-qty', qty)
        console.log(qty)
    })

   $(document).on('click', '.add-to-card', function (e){
       e.preventDefault()
       var $el = $(this)
       $.ajax({
           method: 'POST',
           url: "{{ route('add-to-basket') }}",
           data:{
               _token: $("meta[name=token]").attr('content'),
               qty: $el.attr('data-qty'),
               product_id: $el.attr('data-id')
           },
           success(){

           }
       })
   })
</script>

</body>

</html>