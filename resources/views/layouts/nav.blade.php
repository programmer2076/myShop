<nav id="navbar" class="navbar navbar-expand-md navbar-light sticky-top m-0">
    <div class="container">
        <!--            <a style="font-family: 'Andada', serif;" class="navbar-brand font-effect-3d text-white" href="#">Navbar</a>-->
        <a class="navbar-brand p-0 font-effect-3d" style="font-family: 'Vollkorn';color: ghostwhite" href="{!! route('home') !!}">
            <img src="{{asset('assets/images/ecoweb.png')}}" id="brand" class="brand m-0" style="height:40px;font-family: 'Andada', serif;" alt="">
            <!--                INNWA IT & MOBILE-->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" data-spy="scroll" data-offset="0"  id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mx-auto font-effect-3d the-navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-dark" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Waterfall</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Profile</a>
                </li>
                <li class="nav-item dropdown">
                    <a onmouseover="dropdownShow('dropdown-menu')" onmouseleave="dropdownHide('dropdown-menu')" style="font-family: 'Oswald', serif;font-weight:700;" class="nav-link font-effect-3d text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Product Categories
                    </a>
                    <div onmouseover="dropdownShow('dropdown-menu')" onmouseleave="dropdownHide('dropdown-menu')" style="font-family: 'Playfair Display',serif;background-color: rgb(76,78,93);" class="dropdown-menu rounded dropdown-menu-link font-effect-3d-float mt-0 p-0" id="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-light rounded" href="#">Action</a>
                        <a class="dropdown-item text-light rounded" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-light rounded" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#" tabindex="-1" aria-disabled="true">Service</a>
                </li>
            </ul>

            <!-- Search -->
            <div>
                <form action="javascript:;" class="form-inline my-2 my-lg-0 search-form" id="search-form" accept-charset="UTF-8" name="searchForm" onkeyup="return searchData()">
                    @csrf
                    <input onfocus="searchInput()" class="form-control border border-secondary search" type="search" name="search" id="search" placeholder="Search .." aria-label="Search">
                </form>
                <div id="searchRetData"></div>
            </div>
        {{--                    <form class="form-inline my-2 my-lg-0 search" id="search">--}}
        {{--                        <input class="form-control mr-sm-2 text-light" type="search" style="box-shadow: none;" placeholder="Search" aria-label="Search">--}}
        {{--                        <button class="btn btn-outline-success shadow-sm my-2 my-sm-0" type="submit">Search</button>--}}
        {{--                    </form>--}}

        <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto font-effect-3d-float auth-section">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if(auth()->user()->hasRole('master'))
                                <a class="dropdown-item" href="{{ route('auth') }}">
                                    {{ __('Dashboard') }}
                                </a>
                            @else
                                <a class="dropdown-item" href="{{ route('admin') }}">
                                    {{ __('Dashboard') }}
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
