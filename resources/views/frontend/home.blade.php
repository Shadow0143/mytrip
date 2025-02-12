@extends('frontend.layouts.app')
@section('metades')
    <meta name="description" content="Touran - Travel & Tour HTMl5 Template" />
    <meta name="author" content="Touran - Travel & Tour HTMl5 Template" />
    <meta name="keywords" content="Touran - Travel & Tour HTMl5 Template" />
@endsection
@section('title')
    <title>Touran - Travel & Tour HTMl5 Template</title>
@endsection
@section('css')
@endsection
@section('content')
    <section class="slider-wrapper st-two p-0">
        <div id="slider-style-one" class="carousel slide bs-slider control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >
            <ol class="carousel-indicators">
                <li data-target="#slider-style-one" data-slide-to="0" class="active"></li>
                <li data-target="#slider-style-one" data-slide-to="1"></li>
                <li data-target="#slider-style-one" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{asset('images/slider/a.jpg')}}" alt="Slider Images"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <div class="slide-text slide-style-left st-two">
                                <h1>Get a tour</h1>
                                <h2>We provide best <span>Tour</span> Pacakage In Your <span>Budget</span></h2>
                            </div>
                            <div class="package-box">
                                <h1><span>45%</span> off</h1>
                                <h4>on all package</h4>
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/slider/b.jpg')}}" alt="Slider Images"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <div class="slide-text slide-style-right st-two">
                                <h1>Get a tour</h1>
                                <h2>We provide best <span>Tour</span> Pacakage In Your <span>Budget</span></h2>
                            </div>
                            <div class="package-box slide-style-right">
                                <h1><span>45%</span> off</h1>
                                <h4>on all package</h4>
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/slider/c.jpg')}}" alt="Slider Images"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        
                        <div class="row">
                            <div class="slide-text slide-style-center st-two">
                                <h1>Get a tour</h1>
                                <h2>We provide best <span>Tour</span> Pacakage</h2>
                                <div class="btn-box">
                                    <a href="#" class="btn-theme">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#slider-style-one" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#slider-style-one" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> 
    </section>
    <section class="welcome-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				{{-- <div class="icon-wrp">
    					<div class="icon-box">
    						<i class="fa fa-wifi"></i>
    						<h5>Travel</h5>
    						<a href="#">view more</a>
    					</div>
    					<div class="icon-box">
    						<i class="fa fa-crosshairs"></i>
    						<h5>Packages</h5>
    						<a href="#">view more</a>
    					</div>
    					<div class="icon-box">
    						<i class="fa fa-plane"></i>
    						<h5>Vehicle</h5>
    						<a href="#">view more</a>
    					</div>
    					<div class="icon-box">
    						<i class="fa fa-umbrella"></i>
    						<h5>Hoteel</h5>
    						<a href="#">view more</a>
    					</div>
    					<div class="icon-box">
    						<i class="fa fa-map-marker"></i>
    						<h5>Location</h5>
    						<a href="#">view more</a>
    					</div>
    				</div> --}}
    			</div>
    		</div>
    	</div>
    </section>
    <section class="special-places-sec pb-80 pt-65">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>Welcome to Touran Travel</h4>
                    <h2>Special <span>Tour</span> Places</h2>
                    <p>Deserunt quia ducimus ut illum optio cum eum voluptate corrupti numquam</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-style">
                        <nav>
                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="plc-asia-tab" data-toggle="tab" href="#plc-asia" role="tab" aria-controls="plc-asia" aria-selected="true">Asia</a>
                            <a class="nav-item nav-link" id="plc-urope-tab" data-toggle="tab" href="#plc-urope" role="tab" aria-controls="plc-urope" aria-selected="false">Urope</a>
                            <a class="nav-item nav-link" id="plc-africa-tab" data-toggle="tab" href="#plc-africa" role="tab" aria-controls="plc-africa" aria-selected="false">Africa</a>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="plc-asia" role="tabpanel" aria-labelledby="plc-asia-tab">
                            <div class="specialplaces_carousel owl-carousel owl-theme owl-navst st-two">
                                <div class="item">
                                    <div class="special-places">
                                        <div class="thumb">
                                            <img src="{{asset('images/service/a.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="price-box">
                                                <h5><span>$</span>400</h5>
                                                <h6>Starts From</h6>
                                            </div>
                                            <div class="title-box">
                                                <h4>Redilova Tour Place</h4>
                                                <h3>peelamedu, cbe, india</h3>
                                            </div>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                            </ul>
                                            <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente, magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                            <a class="btn-theme" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="special-places">
                                        <div class="thumb">
                                            <img src="{{asset('images/service/b.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="price-box">
                                                <h5><span>$</span>400</h5>
                                                <h6>Starts From</h6>
                                            </div>
                                            <div class="title-box">
                                                <h4>Mountain adventure</h4>
                                                <h3>peelamedu, cbe, india</h3>
                                            </div>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                            </ul>
                                            <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente, magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                            <a class="btn-theme" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="special-places">
                                        <div class="thumb">
                                            <img src="{{asset('images/service/c.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="price-box">
                                                <h5><span>$</span>400</h5>
                                                <h6>Starts From</h6>
                                            </div>
                                            <div class="title-box">
                                                <h4>adventure swimming</h4>
                                                <h3>peelamedu, cbe, india</h3>
                                            </div>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                            </ul>
                                            <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente, magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                            <a class="btn-theme" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="special-places">
                                        <div class="thumb">
                                            <img src="{{asset('images/service/d.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="price-box">
                                                <h5><span>$</span>400</h5>
                                                <h6>Starts From</h6>
                                            </div>
                                            <div class="title-box">
                                                <h4>Ratargul gorgeous</h4>
                                                <h3>peelamedu, cbe, india</h3>
                                            </div>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                            </ul>
                                            <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente, magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                            <a class="btn-theme" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="plc-urope" role="tabpanel" aria-labelledby="plc-urope-tab">
                            <div class="specialplaces_carousel owl-carousel owl-theme owl-navst st-two">
                                <div class="item">
                                    <div class="special-places">
                                        <div class="thumb">
                                            <img src="{{asset('images/service/a.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="price-box">
                                                <h5><span>$</span>400</h5>
                                                <h6>Starts From</h6>
                                            </div>
                                            <div class="title-box">
                                                <h4>Redilova Tour Place</h4>
                                                <h3>peelamedu, cbe, india</h3>
                                            </div>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                            </ul>
                                            <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente, magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                            <a class="btn-theme" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="special-places">
                                        <div class="thumb">
                                            <img src="{{asset('images/service/b.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="price-box">
                                                <h5><span>$</span>400</h5>
                                                <h6>Starts From</h6>
                                            </div>
                                            <div class="title-box">
                                                <h4>Mountain adventure</h4>
                                                <h3>peelamedu, cbe, india</h3>
                                            </div>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                            </ul>
                                            <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente, magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                            <a class="btn-theme" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="special-places">
                                        <div class="thumb">
                                            <img src="{{asset('images/service/c.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="price-box">
                                                <h5><span>$</span>400</h5>
                                                <h6>Starts From</h6>
                                            </div>
                                            <div class="title-box">
                                                <h4>adventure swimming</h4>
                                                <h3>peelamedu, cbe, india</h3>
                                            </div>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                            </ul>
                                            <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente, magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                            <a class="btn-theme" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="special-places">
                                        <div class="thumb">
                                            <img src="{{asset('images/service/d.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="price-box">
                                                <h5><span>$</span>400</h5>
                                                <h6>Starts From</h6>
                                            </div>
                                            <div class="title-box">
                                                <h4>Ratargul gorgeous</h4>
                                                <h3>peelamedu, cbe, india</h3>
                                            </div>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                            </ul>
                                            <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente, magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                            <a class="btn-theme" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="plc-africa" role="tabpanel" aria-labelledby="plc-africa-tab">
                            <div class="specialplaces_carousel owl-carousel owl-theme owl-navst st-two">
                                <div class="item">
                                    <div class="special-places">
                                        <div class="thumb">
                                            <img src="{{asset('images/service/a.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="price-box">
                                                <h5><span>$</span>400</h5>
                                                <h6>Starts From</h6>
                                            </div>
                                            <div class="title-box">
                                                <h4>Redilova Tour Place</h4>
                                                <h3>peelamedu, cbe, india</h3>
                                            </div>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                            </ul>
                                            <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente, magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                            <a class="btn-theme" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="special-places">
                                        <div class="thumb">
                                            <img src="{{asset('images/service/b.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="price-box">
                                                <h5><span>$</span>400</h5>
                                                <h6>Starts From</h6>
                                            </div>
                                            <div class="title-box">
                                                <h4>Mountain adventure</h4>
                                                <h3>peelamedu, cbe, india</h3>
                                            </div>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                            </ul>
                                            <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente, magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                            <a class="btn-theme" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="special-places">
                                        <div class="thumb">
                                            <img src="{{asset('images/service/c.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="price-box">
                                                <h5><span>$</span>400</h5>
                                                <h6>Starts From</h6>
                                            </div>
                                            <div class="title-box">
                                                <h4>Adventure swimming</h4>
                                                <h3>peelamedu, cbe, india</h3>
                                            </div>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                            </ul>
                                            <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente, magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                            <a class="btn-theme" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="special-places">
                                        <div class="thumb">
                                            <img src="{{asset('images/service/d.jpg')}}" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="price-box">
                                                <h5><span>$</span>400</h5>
                                                <h6>Starts From</h6>
                                            </div>
                                            <div class="title-box">
                                                <h4>Ratargul gorgeous</h4>
                                                <h3>peelamedu, cbe, india</h3>
                                            </div>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                            </ul>
                                            <p>Travel adipisicing elit. Quia tempore, ex delectus rerum optio sapiente, magnam ullam ipsum swit voluptate maxime blanditiis deleniti dicta.</p>
                                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                            <a class="btn-theme" href="#">View Details</a>
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
    <section class="feature-section over-layer-black pt-75 pb-80">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>Touran Travel Features</h4>
                    <h2>Why <span>Choose</span> Touran</h2>
                    <p>Deserunt quia ducimus ut illum optio cum eum voluptate corrupti numquam</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="flaticon-like"></i>
                        </div>
                        <div class="content">
                            <h3><a href="#">Years of <span>experience</span></a></h3>
                            <p>dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="flaticon-manager"></i>
                        </div>
                        <div class="content">
                            <h3><a href="#">Expert Tour <span>Guide</span></a></h3>
                            <p>dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item last">
                        <div class="icon-box">
                            <i class="flaticon-heart-1"></i>
                        </div>
                        <div class="content">
                            <h3><a href="#">Beautiful <span>Tour Place</span></a></h3>
                            <p>dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="special-packages-sec pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="section-title stitle-left">
                        <h4>Our special packages</h4>
                        <h2>Special <span>Packages</span> Offer</h2>
                        <p>Deserunt quia ducimus ut illum optio cum eum voluptate corrupti numquam travel ipsum dolor consectetur adipisicing. Quia tempore, ex delectus rerum optio sapiente, magnam ullam </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="specialpackages_carousel owl-carousel owl-theme owl-navst">
                                <div class="item">
                                    <div class="special-packages">
                                        <div class="thumb">
                                            <img src="{{asset('images/features/a.jpg')}}" alt="">
                                            <div class="offer-price"> Off 40%</div>
                                            <div class="post-title-box">
                                                <div class="price-box">
                                                    <h5><span>$</span>400</h5>
                                                    <h6>Starts From</h6>
                                                </div>
                                                <div class="title-box">
                                                    <h4>Redilova Tour Place</h4>
                                                    <h3>peelamedu, cbe, india</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                            </ul>
                                            <p>Travel ipsum dolor sit amet, consectetur adipisicing. Quia tempore, ex delectus rerum optio sapiente, magnam ullam ipsum voluptate maxime blanditiis.</p>
                                            <div class="small-hotel">
                                                <div class="text">
                                                    <h6>Hotels to Stay</h6>
                                                    <h5>Hotel Saladi Tajo</h5>
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                                        <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                                        <li><a href="#">(3 Ratings)</a></li>
                                                    </ul>
                                                   <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                                </div>
                                                <div class="thumb">
                                                    <img src="{{asset('images/features/sma.jpg')}}" alt="">
                                                    <img src="{{asset('images/features/smb.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                            <a class="btn-theme" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="special-packages">
                                        <div class="thumb">
                                            <img src="{{asset('images/features/b.jpg')}}" alt="">
                                            <div class="offer-price"> Off 40%</div>
                                            <div class="post-title-box">
                                                <div class="price-box">
                                                    <h5><span>$</span>400</h5>
                                                    <h6>Starts From</h6>
                                                </div>
                                                <div class="title-box">
                                                    <h4>Adventure swimming</h4>
                                                    <h3>peelamedu, cbe, india</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                            </ul>
                                            <p>Travel ipsum dolor sit amet, consectetur adipisicing. Quia tempore, ex delectus rerum optio sapiente, magnam ullam ipsum voluptate maxime blanditiis.</p>
                                            <div class="small-hotel">
                                                <div class="text">
                                                    <h6>Hotels to Stay</h6>
                                                    <h5>Hotel Saladi Tajo</h5>
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                                        <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                                        <li><a href="#">(3 Ratings)</a></li>
                                                    </ul>
                                                   <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                                </div>
                                                <div class="thumb">
                                                    <img src="{{asset('images/features/sma.jpg')}}" alt="">
                                                    <img src="{{asset('images/features/smb.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                            <a class="btn-theme" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="special-packages">
                                        <div class="thumb">
                                            <img src="{{asset('images/features/3.jpg')}}" alt="">
                                            <div class="offer-price"> Off 40%</div>
                                            <div class="post-title-box">
                                                <div class="price-box">
                                                    <h5><span>$</span>400</h5>
                                                    <h6>Starts From</h6>
                                                </div>
                                                <div class="title-box">
                                                    <h4>Ratargul gorgeous</h4>
                                                    <h3>peelamedu, cbe, india</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>4 Days</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>2 Person</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>View on Map</a></li>
                                            </ul>
                                            <p>Travel ipsum dolor sit amet, consectetur adipisicing. Quia tempore, ex delectus rerum optio sapiente, magnam ullam ipsum voluptate maxime blanditiis.</p>
                                            <div class="small-hotel">
                                                <div class="text">
                                                    <h6>Hotels to Stay</h6>
                                                    <h5>Hotel Saladi Tajo</h5>
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                                        <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                                        <li><a href="#">(3 Ratings)</a></li>
                                                    </ul>
                                                   <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                                </div>
                                                <div class="thumb">
                                                    <img src="{{asset('images/features/sma.jpg')}}" alt="">
                                                    <img src="{{asset('images/features/smb.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <h5 class="share-btn"><i class="fa fa-share-alt"></i> Share</h5>
                                            <a class="btn-theme" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="add-box thumb">
                        <img src="{{asset('images/features/ad-a.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="funfact-section over-layer-black pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-sec">
                        <h2>Travel <span>Award</span> Year <span>2019</span></h2>
                        <p> Discover  vestibulum <span>pharetra orci turpis</span>, ut interdum </p>
                        <div class="video-content">
                            <img src="{{asset('images/photos/video-img.png')}}" alt="image">
                            <div class="overlay">
                                <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="popup-youtube"><i class="ficon fa fa-play-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="funfact-item">
                                <div class="icon-box">
                                    <i class="fa fa-location-arrow"></i>
                                </div>
                                <div class="content">
                                    <h2>2583</h2>
                                    <h3><a href="#">Travel Package</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="funfact-item">
                                <div class="icon-box">
                                    <i class="fa fa-plane"></i>
                                </div>
                                <div class="content">
                                    <h2>1879</h2>
                                    <h3><a href="#">Locations Made</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="funfact-item">
                                <div class="icon-box">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="content">
                                    <h2>7215</h2>
                                    <h3><a href="#">Satisfied Client</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="funfact-item">
                                <div class="icon-box">
                                    <i class="fa fa-thumbs-up"></i>
                                </div>
                                <div class="content">
                                    <h2>1639</h2>
                                    <h3><a href="#">Recomended Trip</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="latest-hotel-sec pt-75 pb-65">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>Touran Hotel Collection</h4>
                    <h2>Latest <span>Hotel</span> Collection</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit alias recusandae harum eum obcaecati!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="latesthotel_carousel owl-carousel owl-theme owl-navst">
                        <div class="item">
                            <div class="latest-hotel">
                                <div class="thumb">
                                    <img src="{{asset('images/photos/hotel-a.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h4>Hotel Peelamedu Tom</h4>
                                    <h5>peelamedu, cbe, india</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                        <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                        <li><a href="#">(3 Ratings)</a></li>
                                    </ul>
                                    <p>consectetur adipoing elit. Vestibulum pharetra in. Integer lacinia lectus...</p>
                                    <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                    <h3>Off <span>-30%</span></h3>
                                    <a class="btn-theme" href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="latest-hotel">
                                <div class="thumb">
                                    <img src="{{asset('images/photos/hotel-b.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h4>Hotel Raleepado Due</h4>
                                    <h5>peelamedu, cbe, india</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                        <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                        <li><a href="#">(3 Ratings)</a></li>
                                    </ul>
                                    <p>consectetur adipoing elit. Vestibulum pharetra in. Integer lacinia lectus...</p>
                                    <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                    <h3>Off <span>-30%</span></h3>
                                    <a class="btn-theme" href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="latest-hotel">
                                <div class="thumb">
                                    <img src="{{asset('images/photos/hotel-c.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h4>Hotel Tralemdo Tom</h4>
                                    <h5>peelamedu, cbe, india</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                        <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                        <li><a href="#">(3 Ratings)</a></li>
                                    </ul>
                                    <p>consectetur adipoing elit. Vestibulum pharetra in. Integer lacinia lectus...</p>
                                    <a class="map-viw" href="#"><i class="fa fa-map-marker"></i>View on Map</a>
                                    <h3>Off <span>-30%</span></h3>
                                    <a class="btn-theme" href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="global-section over-layer-white pt-70 pb-65">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-12">
                    <div class="global-area">
                        <div class="inner-title">
                            <h2>Now We Are Globaly Everywhare</h2>
                            <h3>Discover  vestibulum <span>pharetra orci turpis</span>, ut interdum </h3>
                            <div class="sec-line"></div>
                        </div>
                        <p>Pellentesque consectetur condimentum libero, interdum aliquet enim sollic tudin ut. Donec dapibus tempor odio eu aliquet. Vivamus ultricies augue ut.</p>
                        <h4>Condimentum at sed sapien:</h4>
                        <ul>
                            <li>consectetur adipting elit.</li>
                            <li>consectetur adipting elit.</li>
                            <li>consectetur adipting elit.</li>
                            <li>consectetur adipting elit.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-8 col-md-10">
                    <div class="map-area">
                        <img src="{{asset('images/photos/map0a.png')}}" alt="image">
                    </div>
                    <p class="map-content">Discover  vestibulum <span class="color-light">Call:</span> <span>+88095085363</span>, ut interdum </p>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-section pt-75 pb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="section-title">
                    <h4>Touran Travel Gallery</h4>
                    <h2>Touran <span>Tour</span> Gallery</h2>
                    <p>Deserunt quia ducimus ut illum optio cum eum voluptate corrupti numquam</p>
                </div>
            </div>
            <div class="row gallery-items">
            	<div class="col-sm-4 col-grid">
            		<div class="gallery-item">
            			<div class="thumb">
            				<img src="{{asset('images/gallery/a.jpg')}}" alt="image">
            				<div class="overlay">
            					<div class="inner">
                					<a href="images/gallery/a.jpg')}}" class="icon lightbox-image">
                						<i class="fa fa-plus"></i>
                					</a>
                					<h4>Beautiful Nature</h4>
                					<p>Tour, Travel</p>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            	<div class="col-sm-4 col-grid col-center">
            		<div class="gallery-item">
            			<div class="thumb">
            				<img src="{{asset('images/gallery/b.jpg')}}" alt="image">
            				<div class="overlay">
            					<div class="inner">
                					<a href="images/gallery/b.jpg')}}" class="icon lightbox-image">
                						<i class="fa fa-plus"></i>
                					</a>
                					<h4>Beautiful Nature</h4>
                					<p>Tour, Travel</p>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            	<div class="col-sm-4 col-grid">
            		<div class="gallery-item">
            			<div class="thumb">
            				<img src="{{asset('images/gallery/c.jpg')}}" alt="image">
            				<div class="overlay">
            					<div class="inner">
                					<a href="images/gallery/c.jpg')}}" class="icon lightbox-image">
                						<i class="fa fa-plus"></i>
                					</a>
                					<h4>Beautiful Nature</h4>
                					<p>Tour, Travel</p>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            	<div class="col-sm-4 col-grid">
            		<div class="gallery-item">
            			<div class="thumb">
            				<img src="{{asset('images/gallery/d.jpg')}}" alt="image">
            				<div class="overlay">
            					<div class="inner">
                					<a href="images/gallery/d.jpg')}}" class="icon lightbox-image">
                						<i class="fa fa-plus"></i>
                					</a>
                					<h4>Beautiful Nature</h4>
                					<p>Tour, Travel</p>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            	<div class="col-sm-4 col-grid col-center">
            		<div class="gallery-item">
            			<div class="thumb">
            				<img src="{{asset('images/gallery/e.jpg')}}" alt="image">
            				<div class="overlay">
            					<div class="inner">
                					<a href="images/gallery/e.jpg')}}" class="icon lightbox-image">
                						<i class="fa fa-plus"></i>
                					</a>
                					<h4>Beautiful Nature</h4>
                					<p>Tour, Travel</p>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            	<div class="col-sm-4 col-grid">
            		<div class="gallery-item">
            			<div class="thumb">
            				<img src="{{asset('images/gallery/f.jpg')}}" alt="image">
            				<div class="overlay">
            					<div class="inner">
                					<a href="images/gallery/f.jpg')}}" class="icon lightbox-image">
                						<i class="fa fa-plus"></i>
                					</a>
                					<h4>Beautiful Nature</h4>
                					<p>Tour, Travel</p>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
        </div>
    </section>
    <section class="testimonials-section pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="testimonial-video mt-0">
                        <h5>Latest Hotel Reviews</h5>
                        <div class="sec-line mb-20"></div>
                        <h3><i class="fa fa-quote-left"></i> If you are going to use a passage of Lorem Ipsum, you need to be on sure there isn’t anything embarras repeat predefined chunks as.</h3>
                        <a class="btn-theme popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas"><i class="fa fa-play-circle"></i> Play Video</a>
                        <div class="review-ratings">
                            <a class="ratings-star" href="#">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-empty"></i>
                                <i class="fa fa-star-o"></i>
                            </a>
                            <a class="ratings-count" href="#">(3 Ratings)</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="inner-title">
                        <h2>Our <span>Client's Say</span></h2>
                        <div class="sec-line mb-40"></div>
                    </div>
                    <div class="testimonials-post testimonials_slide owl-carousel owl-theme owl-navst st-three">
                        <div class="testimonials-item">
                            <div class="thumb">
                                <img src="{{asset('images/testimonials/a.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <h5>Horem Due <small>- Traveler ut illum</small></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                </ul>
                                <p><i class="fa fa-quote-left"></i> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle often repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                            </div>
                        </div>
                        <div class="testimonials-item">
                            <div class="thumb">
                                <img src="{{asset('images/testimonials/a.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <h5>Horem Due <small>- Traveler ut illum</small></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                    <li><a href="#"><i class="fa  fa-star-o"></i></a></li>
                                </ul>
                                <p><i class="fa fa-quote-left"></i> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle often repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="app-section over-layer-white pt-80 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="inner-title title-center">
                        <h2>Now We Are Globaly Everywhare</h2>
                        <h3>Discover  vestibulum <span>pharetra orci turpis</span>, ut interdum </h3>
                        <div class="sec-line line-center"></div>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                    <a class="btn-theme" href="#">Download App</a>
                    <a class="btn-theme btn-two" href="#">Subscribe Now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-section bg-f8 pt-75 pb-50">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h4>Our latest blog</h4>
                    <h2>Touran <span>Latest</span> Blog</h2>
                    <p>Consectetur adipisicing elit. Excepturi nemo tenetur veniam repellat earum inventore modi omnis.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">
                        <div class="thumb">
                            <img alt="" src="{{asset('images/blog/a.jpg')}}">
                            <div class="content">
                                <h3>Summer Vacation Travel On gratest global mounten</h3>
                                <div class="meta-box">
                                    <div class="admin-post"> Admin, TributeTheme </div>
                                    <div class="inner">
                                        <div class="date">
                                            <i class="fa fa-calendar-plus-o"></i> Feb 24
                                        </div>
                                        <div class="comment">
                                            <i class="fa fa-commenting-o"></i> 8
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="blog-details.html" class="read-btn">Continue Reading
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">
                        <div class="thumb">
                            <img alt="" src="{{asset('images/blog/b.jpg')}}">
                            <div class="content">
                                <h3>Winter Vacation Travel On beautiful tour package</h3>
                                <div class="meta-box">
                                    <div class="admin-post"> Admin, TributeTheme </div>
                                    <div class="inner">
                                        <div class="date">
                                            <i class="fa fa-calendar-plus-o"></i> Feb 24
                                        </div>
                                        <div class="comment">
                                            <i class="fa fa-commenting-o"></i> 8
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="blog-details.html" class="read-btn">Continue Reading
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                    <div class="blog-post">
                        <div class="thumb">
                            <img alt="" src="{{asset('images/blog/c.jpg')}}">
                            <div class="content">
                                <h3>Summer Vacation Travel On gratest global Tower</h3>
                                <div class="meta-box">
                                    <div class="admin-post"> Admin, TributeTheme </div>
                                    <div class="inner">
                                        <div class="date">
                                            <i class="fa fa-calendar-plus-o"></i> Feb 24
                                        </div>
                                        <div class="comment">
                                            <i class="fa fa-commenting-o"></i> 8
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="blog-details.html" class="read-btn">Continue Reading
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section pt-80 pb-80">
        <div class="container">
            <div class="row contact-bg">
                <div class="col-md-12 col-lg-4 p-0">
                    <div class="contact-text">
                    	<h2>We are <span>Booking</span></h2>
                        <h4>Get in Touch</h4>
                        <div class="sec-line mb-20"></div>
                        <p>Consectetur adipisicing elit. Temporibus error quod necessitatibus</p>
                        <div class="contact-info">
                            <div class="icon-box">
                                <i class="flaticon-pin-1"></i>
                            </div>
                            <h6>Street melbourne, Australia</h6>
                        </div>
                        <div class="contact-info">
                            <div class="icon-box">
                                <i class="flaticon-flash"></i>
                            </div>
                            <h6>+880 195085 363</h6>
                        </div>
                        <div class="contact-info">
                            <div class="icon-box">
                                <i class="pe-7s-map"></i>
                            </div>
                            <h6>info@bdCoderonline.com</h6>
                        </div>
                        <div class="contact-info">
                            <div class="icon-box">
                                <i class="pe-7s-server"></i>
                            </div>
                            <h6><a href="#">http:/bdCoderonline.com</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 style-2">

    			  	<form class="booking-form" method="post" action="#">
                    	<nav>
    					  <div class="nav nav-tabs" id="nav-tab1" role="tablist">
    					    <a class="nav-item nav-link active" id="nav-hotelbk-tab" data-toggle="tab" href="#nav-hotelbk" role="tab" aria-controls="nav-hotelbk" aria-selected="true">Hotels</a>
    					    <a class="nav-item nav-link" id="nav-packagesbk-tab" data-toggle="tab" href="#nav-packagesbk" role="tab" aria-controls="nav-packagesbk" aria-selected="false">Packages</a>
    					    <a class="nav-item nav-link" id="nav-placesbk-tab" data-toggle="tab" href="#nav-placesbk" role="tab" aria-controls="nav-placesbk" aria-selected="false">Places</a>
    					  </div>
    					</nav>
    					<div class="tab-content" id="nav-tabContent1">
    					  <div class="tab-pane fade show active" id="nav-hotelbk" role="tabpanel" aria-labelledby="nav-hotelbk-tab">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="text" name="hotelname" class="form-control" placeholder="Input Hotel name here" required>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <select class="form-control" name="hbcity">
    							      <option value="choose-city">Choose City</option>
    							      <option value="melbourne-australia">Melbourne, Australia</option>
    							      <option value="chennai-india">Chennai, India</option>
    							      <option value="london-uk">London, UK</option>
    							      <option value="delhi-india">Delhi, India</option>
    							    </select>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <select class="form-control"  name="hbcat">
    							      <option value="choose-category">Choose Category</option>
    							      <option value="business">Business</option>
    							      <option value="family">Family</option>
    							      <option value="romance">Romance</option>
    							      <option value="batchelor">Batchelor</option>
    							    </select>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <select class="form-control"  name="hbminprice">
    							      <option value="choose-category">Min Price</option>
    							      <option value="100">100</option>
    							      <option value="200">200</option>
    							      <option value="300">300</option>
    							      <option value="400">400</option>
    							    </select>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <select class="form-control"  name="hbmaxprice">
    							      <option value="choose-category">Max Price</option>
    							      <option value="200">200</option>
    							      <option value="300">300</option>
    							      <option value="400">400</option>
    							      <option value="500">500</option>
    							    </select>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <select class="form-control"  name="hboffer">
    							      <option value="choose-category">Choose Offer</option>
    							      <option value="5%">5%</option>
    							      <option value="10%">10%</option>
    							      <option value="20%">20%</option>
    							      <option value="25%">25%</option>
    							    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="contact-textarea text-center">
                                        <button class="btn btn-theme" type="submit" value="Submit Form">Find Hotel</button>
                                    </div>
                                </div>
                                <div class="col-md-12 info-text">
                                	<p>we have listed <span>2435</span> hotels all over the world</p>
                                </div>
                            </div>
    					  </div>
    					  <div class="tab-pane fade" id="nav-packagesbk" role="tabpanel" aria-labelledby="nav-packagesbk-tab">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="text" name="package_name" class="form-control" placeholder="Input Package name here" required>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <select class="form-control" name="hbcity">
    							      <option value="choose-city">Choose City</option>
    							      <option value="melbourne-australia">Melbourne, Australia</option>
    							      <option value="chennai-india">Chennai, India</option>
    							      <option value="london-uk">London, UK</option>
    							      <option value="delhi-india">Delhi, India</option>
    							    </select>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <select class="form-control"  name="hbcat">
    							      <option value="choose-category">Choose Category</option>
    							      <option value="holidays">Holidays</option>
    							      <option value="vacation">Vacation</option>
    							      <option value="summer">Summer</option>
    							      <option value="winter">Winter</option>
    							    </select>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <select class="form-control"  name="hbminprice">
    							      <option value="choose-category">Min Price</option>
    							      <option value="100">100</option>
    							      <option value="200">200</option>
    							      <option value="300">300</option>
    							      <option value="400">400</option>
    							    </select>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <select class="form-control"  name="hbmaxprice">
    							      <option value="choose-category">Max Price</option>
    							      <option value="200">200</option>
    							      <option value="300">300</option>
    							      <option value="400">400</option>
    							      <option value="500">500</option>
    							    </select>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <select class="form-control"  name="hboffer">
    							      <option value="choose-category">Choose Offer</option>
    							      <option value="5%">5%</option>
    							      <option value="10%">10%</option>
    							      <option value="20%">20%</option>
    							      <option value="25%">25%</option>
    							    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="contact-textarea text-center">
                                        <button class="btn btn-theme" type="submit" value="Submit Form">Find Package</button>
                                    </div>
                                </div>
                                <div class="col-md-12 info-text">
                                	<p>we have listed <span>3435</span> Packages all over the world</p>
                                </div>
                            </div>
    					  </div>
    					  <div class="tab-pane fade" id="nav-placesbk" role="tabpanel" aria-labelledby="nav-placesbk-tab">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="text" name="place_name" class="form-control" placeholder="Input Place name here" required>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <select class="form-control" name="hbcity">
    							      <option value="choose-city">Choose City</option>
    							      <option value="melbourne-australia">Melbourne, Australia</option>
    							      <option value="chennai-india">Chennai, India</option>
    							      <option value="london-uk">London, UK</option>
    							      <option value="delhi-india">Delhi, India</option>
    							    </select>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <select class="form-control"  name="hbcat">
    							      <option value="choose-category">Choose Category</option>
    							      <option value="adventure">Adventure</option>
    							      <option value="rainy-season">Rainy Season</option>
    							      <option value="ice-tripe">Ice Tripe</option>
    							      <option value="asia">Asia</option>
    							    </select>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <select class="form-control"  name="hbminprice">
    							      <option value="choose-category">Min Price</option>
    							      <option value="100">100</option>
    							      <option value="200">200</option>
    							      <option value="300">300</option>
    							      <option value="400">400</option>
    							    </select>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <select class="form-control"  name="hbmaxprice">
    							      <option value="choose-category">Max Price</option>
    							      <option value="200">200</option>
    							      <option value="300">300</option>
    							      <option value="400">400</option>
    							      <option value="500">500</option>
    							    </select>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <select class="form-control"  name="hboffer">
    							      <option value="choose-category">Choose Offer</option>
    							      <option value="5%">5%</option>
    							      <option value="10%">10%</option>
    							      <option value="20%">20%</option>
    							      <option value="25%">25%</option>
    							    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="contact-textarea text-center">
                                        <button class="btn btn-theme" type="submit" value="Submit Form">Find Place</button>
                                    </div>
                                </div>
                                <div class="col-md-12 info-text">
                                	<p>we have listed <span>8435</span> Places all over the world</p>
                                </div>
                            </div>
    					  </div>
    					</div>
    				</form>

                </div>
            </div>
        </div>
    </section>
    <section class="client-section bg-f8 pb-70 pt-75">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="client_carousel" class="owl-carousel">
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{asset('images/partner/1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{asset('images/partner/2.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{asset('images/partner/3.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{asset('images/partner/4.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{asset('images/partner/5.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{asset('images/partner/6.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-img-item">
                                <img src="{{asset('images/partner/2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
@push('scripts')
    <script type="text/javascript">
        
    </script>
@endpush
