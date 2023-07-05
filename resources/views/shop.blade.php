<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <style>
        .active{
            background-color: #0c84ff;
        }
    </style>
</head>

<body>
<!-- Page Preloder -->


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
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                @foreach($category->attributes as $attribute)
                    <div class="filter-widget">
                        <h4 class="fw-title">{{ $attribute->title }}</h4>
                        <div class="fw-tags">

                            @foreach($attribute->values as $attributeValue)
                                <a class="attr-filter" data-attr-id="{{ $attributeValue->id }}" href="javascript:void(0)">{{ $attributeValue->title }}</a>
                            @endforeach
                        </div>
                    </div>
                @endforeach


                <div class="filter-widget">
                    <h4 class="fw-title">Price</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" id="minamount">
                                <input type="text" id="maxamount">
                            </div>
                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                             data-min="33" data-max="98">
                            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        </div>
                    </div>
                    <button href="#" id="filter-elements" class="filter-btn ">Filter</button>
                </div>

            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="product-show-option">
                    <div class="row">


                    </div>
                </div>
                <div class="product-list">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-4 col-sm-6">
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
        </div>
    </div>
</section>
<!-- Product Shop Section End -->

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
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


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
        var filters = []
        $('.attr-filter').on('click', function (){
           const filterId = ($(this).data('attr-id'))
            if(!$(this).hasClass('active')){
                $(this).addClass('active')
                filters.push(filterId)

            }else{
                $(this).removeClass('active')
                filters = filters.filter(e => e != filterId)

            }
        })

        $('#filter-elements').on('click', function (e){
            e.preventDefault()
           queryParams = new URLSearchParams({
                "attr[]":filters.toString()
            })
           window.location.href = window.location.href.replace('#', '').split('?')[0] + '?' + queryParams.toString()
        })

    </script>
</body>

</html>
