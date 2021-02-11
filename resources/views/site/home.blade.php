@extends('site.layout')
@section('content')
<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">


                <div class="row row-mt-15em">
                    <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                        <span class="intro-text-small">Hand-crafted by <a href="http://gettemplates.co" target="_blank">GetTemplates.co</a></span>
                        <h1 class="cursive-font">All in good taste!</h1>
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
                <a class="fh5co-card-item">
                    <figure>
                        <div class="overlay add-cart" id="{!! $value->uniqid !!}"><i class="ti-plus"></i></div>
                        <img src="{!! $value->main_photo !!}" alt="Image" class="img-responsive">
                    </figure>
                    <div class="fh5co-text">
                        <h2>{!! $value->name !!}</h2>
                        <p>{!! $value->quantity !!}</p>
                        <p><span class="price cursive-font">Ksh. {!! $value->price !!}</span></p>
                    </div>
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
                <h2 class="cursive-font">Our Services</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="ti-face-smile"></i>
                    </span>
                    <h3>Happy People</h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="ti-thought"></i>
                    </span>
                    <h3>Creative Culinary</h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="ti-truck"></i>
                    </span>
                    <h3>Food Delivery</h3>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>


        </div>
    </div>
</div>









@endsection
