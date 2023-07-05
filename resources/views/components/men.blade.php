<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-control">
                    <ul>
                        <li class="active">Products</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">
                    @foreach($products as $product)
                        <div class="product-item" data-id="{{ $product->id }}">
                            <div class="pi-pic">
                                <img src="{{ asset("storage/". $product->image) }}" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
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
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg m-large" data-setbg="{{ asset("_assets/img/products/man-large.jpg") }}">
                    <h2>Men’s</h2>
                </div>
            </div>
        </div>
    </div>
</section>
