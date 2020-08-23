@extends('layouts.app')

@section('content')
    <div class="row no-gutters">
        <div class="col-md-8 mx-auto mt-5 web-business" style="color: antiquewhite;font-family:'Rancho';font-size:16px;text-shadow:1px 0 1px rgba(255,255,255,0.72);">
            <h4 class="text-center web-business-head">IT & MOBILE</h4>
            <p class="text-justify p-3 text-monospace web-business-text">
                Hello Everyone ! We have a good new. Do you want to advertise your business and
                let the people notice about your business more and more? We are here to support IT relating services
                for you. If you want to run your business widely with partners and get the customers from all over the world,
                you must have your own website on the internet to advertise your brand and business.
                Because nowadays almost everyone works on the Internet. Advertisements on TV or in newspaper are expensive and
                cannot attract the young people though. So website become the most popular way to approach the customers.
                Website is an internet workplace from which people can get informations about your business clearly and easily.
                That is why, don't you think that you need a website? Contact us for more details. Warmly welcome for your inquiry.
            </p>
        </div>
    </div>
    <div class="container text-center">
        <div class="bounce mx-auto" id="bounce">
            <a class="fa fa-arrow-down fa-2x" style="text-decoration: none;"></a>
        </div>
        <!--            <div class="mx-auto">-->
        <!--                <img src="assets/images/scrollDown2.gif" class="brand m-0 text-danger" style="height:80px;font-family: 'Andada', serif;" alt="">-->
        <!--            </div>-->
    </div>
{{--    <div id="galleryShow" class="carousel slide img-fluid galleryShow" data-ride="carousel">--}}
{{--        <ol class="carousel-indicators">--}}
{{--            <li data-target="#galleryShow" data-slide-to="0" class="active"></li>--}}
{{--            <li data-target="#galleryShow" data-slide-to="1"></li>--}}
{{--            <li data-target="#galleryShow" data-slide-to="2"></li>--}}
{{--        </ol>--}}
{{--        <div class="carousel-inner">--}}
{{--            <div class="carousel-item active">--}}
{{--                <img src="assets/images/slideshow/ecowebg.png" class="d-block w-100" alt="...">--}}
{{--                <div class="carousel-caption d-none d-md-block">--}}
{{--                    <h5>First slide label</h5>--}}
{{--                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img src="assets/images/slideshow/ecowebg.png" class="d-block w-100" alt="...">--}}
{{--                <div class="carousel-caption d-none d-md-block">--}}
{{--                    <h5>Second slide label</h5>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img src="assets/images/slideshow/ecowebg.png" class="d-block w-100" alt="...">--}}
{{--                <div class="carousel-caption d-none d-md-block">--}}
{{--                    <h5>Third slide label</h5>--}}
{{--                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <a class="carousel-control-prev" href="#galleryShow" role="button" data-slide="prev">--}}
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Previous</span>--}}
{{--        </a>--}}
{{--        <a class="carousel-control-next" href="#galleryShow" role="button" data-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Next</span>--}}
{{--        </a>--}}
{{--    </div>--}}
    <div id="galleryShow" class="galleryShow">
        <div class=" w3-section text-center table-responsive">
            <img class="mySlides w3-animate-opacity img-fluid w-100" src="assets/images/slideshow/ecowebg.png">
            <img class="mySlides w3-animate-opacity img-fluid w-100" src="assets/images/slideshow/ecowebg.png">
            <img class="mySlides w3-animate-opacity img-fluid w-100" src="assets/images/slideshow/ecowebg.png">
        </div>
    </div>

    <div class="container mt-5">
        <div id="dynContentOne" class="card mb-3" style="max-width: 540px;margin-top:100px;background-color: rgba(244,244,244,0.2)">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="assets/images/ecoweb.png" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="dynContentTwo"  class="card mb-3 ml-auto" style="max-width: 540px;margin-top:100px;background-color: rgba(244,244,244,0.2)">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="assets/images/ecoweb.png" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top content -->
    <div class="top-content">
        <div class="container-fluid">
            <div id="carousel-example" class="carousel slide" data-interval="3000" data-ride="carousel">
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                        <img src="assets/images/backgrounds/1.jpg" class="img-fluid mx-auto d-block" alt="img1">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/images/backgrounds/2.jpg" class="img-fluid mx-auto d-block" alt="img2">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/images/backgrounds/3.jpg" class="img-fluid mx-auto d-block" alt="img3">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/images/backgrounds/4.jpg" class="img-fluid mx-auto d-block" alt="img4">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/images/backgrounds/5.jpg" class="img-fluid mx-auto d-block" alt="img5">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/images/backgrounds/6.jpg" class="img-fluid mx-auto d-block" alt="img6">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/images/backgrounds/7.jpg" class="img-fluid mx-auto d-block" alt="img7">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/images/backgrounds/8.jpg" class="img-fluid mx-auto d-block" alt="img8">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="top-content">
        <div class="container-fluid">
            <div id="carousel-sample" class="carousel slide" data-interval="3000" data-ride="carousel">
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                        <img src="assets/images/backgrounds/1.jpg" class="img-fluid mx-auto d-block" alt="img1">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/images/backgrounds/2.jpg" class="img-fluid mx-auto d-block" alt="img2">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/images/backgrounds/3.jpg" class="img-fluid mx-auto d-block" alt="img3">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/images/backgrounds/4.jpg" class="img-fluid mx-auto d-block" alt="img4">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/images/backgrounds/5.jpg" class="img-fluid mx-auto d-block" alt="img5">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/images/backgrounds/6.jpg" class="img-fluid mx-auto d-block" alt="img6">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/images/backgrounds/7.jpg" class="img-fluid mx-auto d-block" alt="img7">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="assets/images/backgrounds/8.jpg" class="img-fluid mx-auto d-block" alt="img8">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-sample" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-sample" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
@endsection
