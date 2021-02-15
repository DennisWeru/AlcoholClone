@extends('site.layout')
@section('content')
<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/banner.jpg)" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">


                <div class="row row-mt-15em">
                    <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                        {{-- <span class="intro-text-small">Hand-crafted by <a href="http://gettemplates.co" target="_blank">GetTemplates.co</a></span> --}}
                        {{-- <h1 class="cursive-font">All in good taste!</h1> --}}
                    </div>

                </div>


            </div>
        </div>
    </div>
</header>
<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2 class="cursive-font primary-color">Popular Drinks</h2>

                <p>.</p>
            </div>
        </div>
        <div class="row">
            @foreach($popular_drinks as $drinks => $value)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <a class="fh5co-card-item view_details" id="{!! $value->uniqid !!}">
                    <figure>
                        <div class="overlay view_details" id="{!! $value->uniqid !!}"><i class="ti-plus"></i></div>
                        <img src="{!! $value->main_photo !!}" alt="Image" class="img-responsive">
                    </figure>
                    <div class="fh5co-text">
                        <h2>{!! $value->name !!}</h2>
                        <p>{!! $value->quantity !!}</p>
                        <p><span class="price cursive-font">Ksh. {!! $value->price !!}</span></p>

                    </div>
                   <center> <a class="btn btn-danger add-cart" id="{!! $value->uniqid !!}"><i class="fa fa-shopping-basket"></i>Order Now</a></center>
                </a>
            </div>

            @endforeach









        </div>
    </div>
</div>

<div id="gtco-features">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                <h2 class="cursive-font">Our Products</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="fa fa-beer"></i>
                    </span>
                    <h3>Beer</h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        {{-- <i class="fas fa-glass-whiskey"></i> --}}
                        <i class="fa fa-glass-whiskey" contenteditable="/f79f"></i>
                    </span>
                    <h3>Whiskey</h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        {{-- <i class="fas fa-wine-bottle"></i> --}}
                        <i class="fa fa-glass-martini-alt"></i>

                    </span>
                    <h3>Gin</h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="fas fa-glass-cheers"></i>
                    </span>
                    <h3>Wine</h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="fas fa-wine-bottle"></i>
                    </span>
                    <h3>Vodka</h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="fa fa-glass-whiskey"></i>
                        {{-- <i class="fas fa-glass-whiskey-rocks"></i>/ --}}
                        {{-- <i class="ti-truck"></i> --}}
                    </span>
                    <h3>Brandy</h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>

            </div>

        </div>
    </div>
</div>









@endsection
