<div class="nav-item">
    <div class="container">
        <div class="nav-depart">
            <div class="depart-btn">

                <span>All Categories</span>
                <ul class="depart-hover">
                    <li><a href="{{ route('categoryView') }}">Men's</a></li>
                    <li><a href="{{ route('categoryViewWomen') }}">Women's</a></li>
                    <li><a href="">Kid's</a></li>
                </ul>
            </div>
        </div>
        <nav class="nav-menu mobile-menu">
            <ul>
                @foreach($menus as $menu)
                    <li class=""><a href="{{ $menu->url }}">{{ $menu->title }}</a></li>
                @endforeach
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
</div>
