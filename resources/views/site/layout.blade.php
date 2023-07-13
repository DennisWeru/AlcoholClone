<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Alcohol Sale</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="{{ asset('argon') }}/css/toastr/toastr.min.css" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="/assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/assets/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="/assets/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/assets/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/assets/css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="/assets/css/bootstrap-datetimepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">

	<!-- Theme style  -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /*jssor slider bullet skin 132 css*/
        .jssorb132 {position:absolute;}
        .jssorb132 .i {position:absolute;cursor:pointer;}
        .jssorb132 .i .b {fill:#fff;fill-opacity:0.8;stroke:#000;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.7;}
        .jssorb132 .i:hover .b {fill:#000;fill-opacity:.7;stroke:#fff;stroke-width:2000;stroke-opacity:0.8;}
        .jssorb132 .iav .b {fill:#000;stroke:#fff;stroke-width:2400;fill-opacity:0.8;stroke-opacity:1;}
        .jssorb132 .i.idn {opacity:0.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
<style>

.breadcrumb-item+.breadcrumb-item::before {
    content: ">"
}

.breadcrumb {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: .1rem 0rem !important;
    margin-bottom: 0rem;
    list-style: none;
    background-color: #ffffff;
    border-radius: .25rem
}

.single_product {
    padding-top: 66px;
    padding-bottom: 140px;
    background-color: #e5e5e5;
    margin-top: 0px;
    padding: 17px
}

/* .product_name {
    font-size: 20px;
    font-weight: 400;
    margin-top: 0px
} */

.badge {
    display: inline-block;
    padding: 0.50em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem
}

.product-rating {
    margin-top: 10px
}

.rating-review {
    color: #5b5b5b
}

.product_price {
    display: inline-block;
    font-size: 30px;
    font-weight: 500;
    margin-top: 9px;
    clear: left
}

.product_discount {
    display: inline-block;
    font-size: 17px;
    font-weight: 300;
    margin-top: 9px;
    clear: left;
    margin-left: 10px;
    color: red
}

.product_saved {
    display: inline-block;
    font-size: 15px;
    font-weight: 200;
    color: #999999;
    clear: left
}

.singleline {
    margin-top: 1rem;
    margin-bottom: .40rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, .1)
}

.product_info {
    color: #4d4d4d;
    display: inline-block
}

.product_options {
    margin-bottom: 10px
}

.product_description {
    padding-left: 0px
}

.product_quantity {
    width: 104px;
    height: 47px;
    border: solid 1px #e5e5e5;
    border-radius: 3px;
    overflow: hidden;
    padding-left: 8px;
    padding-top: -4px;
    padding-bottom: 44px;
    float: left;
    margin-right: 22px;
    margin-bottom: 11px
}

.order_info {
    margin-top: 18px
}

.shop-button {
    height: 47px
}

.product_fav i {
    line-height: 44px;
    color: #cccccc
}

.product_fav {
    display: inline-block;
    width: 52px;
    height: 46px;
    background: #FFFFFF;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    border-radius: 11%;
    text-align: center;
    cursor: pointer;
    margin-left: 3px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.br-dashed {
    border-radius: 5px;
    border: 1px dashed #dddddd;
    margin-top: 6px
}

.pr-info {
    margin-top: 2px;
    padding-left: 2px;
    margin-left: -14px;
    padding-left: 0px
}

.break-all {
    color: #5e5e5e
}

.image_selected {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: calc(100% + 15px);
    height: 525px;
    -webkit-transform: translateX(-15px);
    -moz-transform: translateX(-15px);
    -ms-transform: translateX(-15px);
    -o-transform: translateX(-15px);
    transform: translateX(-15px);
    border: solid 1px #e8e8e8;
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 15px
}

.image_list li {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 165px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1) !important;
    margin-bottom: 15px;
    cursor: pointer;
    padding: 15px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    overflow: hidden
}

@media (max-width: 390px) {
    .product_fav {
        display: none
    }
}

.bbb_combo {
    width: 100%;
    margin-right: 7%;
    padding-top: 21px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 24px;
    border-radius: 5px;
    margin-top: 0px;
    text-align: -webkit-center
}

.bbb_combo_image {
    width: 170px;
    height: 170px;
    margin-bottom: 15px
}

.fs-10 {
    font-size: 10px
}

.step {
    background: #167af6;
    border-radius: 0.8em;
    -moz-border-radius: 0.8em;
    -webkit-border-radius: 6.8em;
    color: #ffffff;
    display: inline-block;
    font-weight: bold;
    line-height: 3.6em;
    margin-right: 5px;
    text-align: center;
    width: 3.6em;
    margin-top: 116px
}

.row-underline {
    content: "";
    display: block;
    border-bottom: 2px solid #3798db;
    margin: 0px 0px;
    margin-bottom: 20px;
    margin-top: 15px
}

.deal-text {
    margin-left: -10px;
    font-size: 25px;
    margin-bottom: 10px;
    color: #000;
    font-weight: 700
}

.padding-0 {
    padding-left: 0;
    padding-right: 0
}

.padding-2 {
    margin-right: 2px;
    margin-left: 2px
}

.vertical-line {
    display: inline-block;
    border-left: 3px solid #167af6;
    margin: 0 10px;
    height: 364px;
    margin-top: 4px
}

.p-rating {
    color: green
}

.combo-pricing-item {
    display: flex;
    flex-direction: column
}

.boxo-pricing-items {
    display: inline-flex
}

.combo-plus {
    margin-left: 10px;
    margin-right: 18px;
    margin-top: 10px
}

.add-both-cart-button {
    margin-left: 36px
}

.items_text {
    color: #b0b0b0
}

.combo_item_price {
    font-size: 18px
}

.p_specification {
    font-weight: 500;
    margin-left: 22px
}

.mt-10 {
    margin-top: 10px
}
</style>
	<!-- Modernizr JS -->
	<script src="/assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="/assets/js/respond.min.js"></script>
	<![endif]-->
	<script src="https://kit.fontawesome.com/16e4163d01.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/assets/css/all.m in.css">
	<link rel="stylesheet" href="style.css">
	</head>
	<body>

	<div class="gtco-loader"></div>

	<div id="page">


	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation" style="position:fixed;top:0;width:100%;overflow: hidden;
    background-color: #333333">
		<div class="gtco-container">

			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo">
                        <a href="/">
                        {{-- <img src="/images/Kaiser_white.png" height="70px"> --}}
                        <h2>Terah Wines</h2>
                    </a>
                    </div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						{{-- <li><a href="{!! route('about') !!}">About Us</a></li> --}}
						<li>
							<a href="{!! route('shop') !!}">Shop</a>
							{{-- <ul class="dropdown">
                                @php
                                $categories = App\Category::get();

                                @endphp

                                @foreach($categories as $category => $value
                                <li><a href="{{ route('single.category',[$value->uniqid]) }}">{!! $value->name !!}</a></li>
                                @endforeach

							</ul> --}}
						</li>
						{{-- <li><a href="blog.html">Blog</a></li> --}}
						<li><a href="{!! route('contact.us') !!}">Contact Us</a></li>
						<li>

								@php
								use Illuminate\Http\Request;
                                @endphp
                                {{--  --}}
								<a id="cart-btn"  href="{!! route('cart.page') !!}" class="btn-xs" style="z-index:1000; height:30px; width:60px; position: relative;" title="View Shopping Cart" cursor="pointer"><i class="fa fa-shopping-cart fa-2x" style="align-content: center; top:20"></i><span class="cart_length" style="font-weight:bolder;"></span></a>


						</li>
						<!-- <li class="btn-cta"><a href="#"><span>Reservation</span></a></li> -->
					</ul>
				</div>
			</div>

		</div>
	</nav>



    @yield('content')


    <div id="gtco-subscribe">
        <div class="gtco-container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2 class="cursive-font">Subscribe To Our Newsletter</h2>
                    <p></p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <form class="form-inline">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" class="form-control email_field" id="email" placeholder="Your Email" required>
                                <p class="success_message" style="display:none;color:lightgreen">Subscription Successful</p>
                                <p class="failed_message" style="display:none;color:red">Already Subscribed</p>

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <button type="submit"  class="btn btn-default btn-block subscribe-btn">Subscribe</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">




				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="tel:+254758068231"><i class="icon-phone"></i>+254 705 20 6185  </a></li>
							<li><a href="mailto:sales.kaiseralcohol@gmail.com"><i class="icon-mail2"></i> salesdrinkske@gmail.com </a></li>
							{{-- <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li> --}}
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Get Social</h3>
						<ul class="gtco-social-icons">
							{{-- <li><a href=""><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li> --}}
							<li><a href="https://www.instagram.com/kaiser_alcohol/"><i class="icon-instagram"></i></a></li>
							{{-- <li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li> --}}
						</ul>
					</div>
				</div>

				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy; {!! date('Y') !!} . All Rights Reserved.</small>
						<small class="block">Developed By <a href="http://millennialstech.co.ke/" target="_blank">Millennials Technologies</a> </small></p>
				</div>

			</div>



        </div>
        <div class="modal details_modal" tabindex="-1" style="overflow-y: auto" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"></h5>
                  <button type="button" class="close close_btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-4 col-md-4 col-sm-6">


                        <div class="card" style="width: 18rem;">
                            <img src="" class="card-img-top product_image" alt="...">

                            <div class="card-body">

                              <h5 class="card-title product_name"></h5>
                           <p class="card-text description-class"></p>
                              <hr/>
                              <p class="card-text product_price"></p>
                              <a class="btn btn-danger add-cart" id=""><i class="fa fa-shopping-basket"></i>Order Now</a>

                            </div>
                       </center>
                          </div>
                      </div>
                </div>
                <div class="modal-footer">
{{--
                  <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal">Close</button> --}}
                </div>
              </div>
            </div>
          </div>
        <div class="modal success_message" tabindex="-1" style="overflow-y: auto" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"></h5>
                  <button type="button" class="close close_btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <img src="/images/pngegg.png" height="100px" width="80px">

                </div>
                <div class="modal-footer">

                  <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal over_age" tabindex="-1" style="overflow-y: auto" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                {{-- <div class="modal-header"> --}}
                  <h5 class="modal-title"></h5>
                  <button type="button" class="close close_btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                {{-- </div> --}}
                <div class="modal-body">
                    <center>
                    Are You Above 18 Years?<br/>
                    <a class="btn btn-primary accept">Accept</a>
                    <a class="btn btn-danger decline">Decline</a>
                </center>
                </div>

              </div>
            </div>
          </div>

          <div class="modal failed_message" tabindex="-1" style="overflow-y: auto" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"></h5>
                  <button type="button" class="close close_btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <center><img src="/images/Red-Cross-Mark-Download-PNG.png" height="100px" width="80px"><br/>Already Subscribed</center>
                    {{-- Red-Cross-Mark-Download-PNG.png --}}
                </div>
                <div class="modal-footer">

                  <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
	</footer>
	<!-- </div> -->

	</div>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="/assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/assets/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="/assets/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="/assets/js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="/assets/js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="/assets/js/magnific-popup-options.js"></script>
    <script src="{{ asset('argon') }}/js/toastr/toastr.min.js"></script>
	<script src="/assets/js/moment.min.js"></script>
	<script src="/assets/js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
    <script src="/assets/js/main.js"></script>
    <script>
        $(document).ready(function(){
            // $('.failed_message').fadeIn();
            $('.subscribe-btn').click(function(e){
                e.preventDefault();
                var email_field = $('.email_field').val();
                // alert(email_field)
                $.ajax({
                    url: '/subscribe/newsletter',
                    type: 'GET',
                    data: { email:email_field},
                    success:function(response){
                        alert(response)
                        if(response == 'Subscription Successful')
                        {

                            $('success_message').show();
                            $('failed_message').hide();
                        }
                        else
                        {

                            $('failed_message').fadeIn();
                            $('success_message').hide();

                        }
                        // $('.cart_length').text(response);
                    }

    });

            });
            $('.add-cart').click(function(e){
                e.preventDefault();
                var uniqid = $(this).attr('id');
                // alert(uniqid);
                $.ajax({
                    url: '/order/drink/',
                    type: 'GET',
                    data: { uniqid:uniqid},
                    success:function(response){
                        // alert(response);
                        $('.cart_length').text(response);
                        $('.btn-xs').css('box-shadow','0 0 20px rgb(218,165,32)');
                        $('.close_btn').click();
                    }

    });

               });
               $('.view_details').click(function(){
                   var uniqid = $(this).attr('id');

                   $.ajax({
                    url: '/product/details',
                    type: 'GET',
                    data: { uniqid:uniqid},
                    success:function(response){
                     var split = response.split('#');
                        // alert(split[2]);
                        $('.product_name').text(split[0]+' '+split[5]);
                        $('.modal-title').text(split[0]);
                        $('.product_price').text('Ksh '+split[2]);
                        $('.description-class').html(split[1]);
                        $('.add-cart').attr('id',split[4]);
                        $('.product_image').attr('src',split[3]);
                        //
                    }

    });


                $('.details_modal').fadeIn();
               });

               $('.remove_product').click(function(){
                var uniqid = $(this).attr('id');
                $.ajax({
                    url: '/remove/product',
                    type: 'GET',
                    data: { uniqid:uniqid},
                    success:function(response){
                        // alert(response);
                        var split = response.split('#');
                        if(split[0] == '0')
                        {
                            location.reload();
                        }
                        else
                        {
                            $('#product_div_'+uniqid).fadeOut();
                            $('.total_price').text('Ksh.'+split[1]);
                        }

                    }

    });

               });
               $('.close_btn').click(function(){
                $('.modal').fadeOut();
               });
               $('.checkout-btn').click(function(){
                $('.cart_table').hide();
                $('.user_checkout').fadeIn();
                        });
               var cookie = localStorage.getItem('cookie');

            //    alert(cookie);
               if(cookie !== null)
               {
                // localStorage.setItem('cookie', 'not_Set');
                if(cookie !== 'This Person is Over 18' && cookie !== 'This Person is Under 18')
                {
                    $('.over_age').fadeIn();
                }

                if(cookie == 'This Person is Under 18')
                {
                    window.location.href = "https://www.google.com/search?q=non+alcoholic+drinks+under+18&oq=drinks+under+18+&aqs=chrome.4.69i57j0i22i30l6j0i390.14720j0j4&sourceid=chrome&ie=UTF-8";
                }
                $('.accept').click(function(){
                    localStorage.setItem('cookie', 'This Person is Over 18');
                    $('.close_btn').click();
                });
                $('.decline').click(function(){
                    localStorage.setItem('cookie', 'This Person is Under 18');
                    window.location.href = "https://www.google.com/search?q=non+alcoholic+drinks+under+18&oq=drinks+under+18+&aqs=chrome.4.69i57j0i22i30l6j0i390.14720j0j4&sourceid=chrome&ie=UTF-8";
                    $('.close_btn').click();
                });
               }


            setTimeout(function () {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 10000
                };
                @if(!is_null(Session::get('success')))
                toastr.success('{!! Session::get('success') !!}',
                    'Success');
                @endif
                @if(!is_null(Session::get('error')))
                toastr.error('{!! Session::get('error') !!}',
                    'Error !!');
                @endif
                @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                toastr.error('{!! $error !!}', 'Validation error !!');
                @endforeach
                @endif
                @if(!is_null(Session::get('info')))
                toastr.info('{!! Session::get('info') !!}',
                    'Info');
                @endif
            }, 1300);
        });
    </script>
<script src="/assets/js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    window.jssor_1_slider_init = function() {

        var jssor_1_SlideoTransitions = [
          [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
          [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
          [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
          [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
          [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
          [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
          [{b:0,d:2000,y:30,e:{y:3}}],
          [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
          [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
          [{b:500,d:1500,o:1}],
          [{b:0,d:1000,y:380,e:{y:6}}],
          [{b:300,d:1000,x:80,e:{x:6}}],
          [{b:300,d:1000,x:330,e:{x:6}}],
          [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
          [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
          [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
          [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
        ];

        var jssor_1_options = {
          $AutoPlay: 1,
          $LazyLoading: 1,
          $CaptionSliderOptions: {
            $Class: $JssorCaptionSlideo$,
            $Transitions: jssor_1_SlideoTransitions
          },
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          },
          $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$,
            $SpacingX: 20,
            $SpacingY: 20
          }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 1600;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>

	</body>
</html>

