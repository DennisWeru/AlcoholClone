@extends('site.layout')
@section('content')
<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_3.jpg)">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-center">

                <div class="row row-mt-15em">
                    <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">

                        <h1 class="cursive-font">Say hello!</h1>
                    </div>

                </div>

            </div>
        </div>
    </div>
</header>


<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6 animate-box">
                <h3>Get In Touch</h3>
                <form action="{{ route('post.contact.us') }}" method="POST">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="sr-only" for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your name">
                        </div>

                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="sr-only" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Your email address">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="sr-only" for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write us something"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>

                </form>
            </div>
            <div class="col-md-5 col-md-push-1 animate-box">

                <div class="gtco-contact-info">
                    <h3>Contact Information</h3>
                    <ul>
                        <li class="address">Biashara St,  <br> Kiambu</li>
                        <li class="phone"><a href="tel:+254 705 20 6185">+254 705 20 6185</a></li>
                        <li class="email"><a href="mailto:salesdrinkske@gmail.com ">salesdrinkske@gmail.com </a></li>

                    </ul>
                </div>


            </div>
            </div>
        </div>
    </div>
</div>
@endsection
