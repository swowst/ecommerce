{{--<h4 class="text-blue">Hello {{ auth()->user()->email }}</h4>--}}

<li class="nav-item menu-open my-2">
    <a href="{{ route('admin.home') }}" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Admin
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

</li>


<li class="nav-item menu-open my-2">
    <a href="{{ route('translations.index') }}" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Translations
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

</li>

<li class="nav-item menu-open my-2">
    <a href="{{ route('category.index') }}" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Categories
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

</li>

<li class="nav-item menu-open my-2">
    <a href="{{ route('product.index') }}" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Products
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

</li>

<li class="nav-item menu-open my-2">
    <a href="{{ route('attribute.index') }}" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Attributes
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

</li>

<li class="nav-item menu-open my-2">
    <a href="{{ route('blog.index') }}" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Blog
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

</li>

<li class="nav-item menu-open my-2">
    <a href="{{ route('hero.index') }}" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Main Hero
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

</li>

<li class="nav-item menu-open my-2">
    <a href="{{ route('menu.index') }}" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Menu
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

</li>

<li class="nav-item menu-open my-2">
    <a href="{{ route('admin.logout') }}" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Logout
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

</li>


