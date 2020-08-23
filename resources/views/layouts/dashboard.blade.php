<!-- Top container -->
    <div class="w3-bar sticky-top w3-large w3-text-sand" style="z-index:4;background: #23232E;"><!-- #23232E; -->
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        <a class="navbar-brand p-0 font-effect-3d" style="font-family: 'Vollkorn';color: ghostwhite" href="{!! route('home') !!}">
            <img src="{{asset('assets/images/ecoweb.png')}}" id="brand" class="brand m-0" style="height:40px;font-family: 'Andada', serif;" alt="">
            <!--                INNWA IT & MOBILE-->
        </a>
        <a href="{{url('/home')}}"><span class="w3-bar-item w3-right font-effect-3d-float" style="font-family: 'Vollkorn';color: ghostwhite">Site</span></a>
    </div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-text-white w3-animate-left" style="z-index:3;width:300px;background:#2C2C34;" id="mySidebar"><br>
    <div class="w3-container w3-row">
        <div class="w3-col s4" >
            <img src="{{asset('assets/images/ui/avatar2.png')}}" class="w3-circle w3-margin-right" style="width:46px">
        </div>
        <div class="w3-col s8 w3-bar">
            <span>Welcome, <strong class="text-success">{{auth()->user()->name}}</strong></span><br>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
        </div>
    </div>
    <hr>
    <div class="w3-container">
        <a href="{{route('auth')}}" class="w3-text-sand"><h5>Dashboard</h5></a>
    </div>
    <div class="w3-bar-block">
        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
        <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
        @if(auth()->user()->hasRole('master'))
            @include('layouts.auth')
        @endif
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Views</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Traffic</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Manager</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Geo</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Orders</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  General</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a>
    </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
