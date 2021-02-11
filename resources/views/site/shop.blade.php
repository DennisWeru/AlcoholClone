@extends('site.layout')

@section('content')
<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2 class="cursive-font primary-color">All Products</h2>
                <p>Kaiser Alcohol prides itself</p>
            </div>
        </div>
        <div class="row">
       @foreach($products as $product => $value)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <a href="#" class="fh5co-card-item">
                    <figure>
                        <div class="overlay add-cart" id="{!! $value->uniqid !!}"><i class="fa fa-plus "></i></div>
                        <img src="{!! $value->main_photo !!}" alt="Image" class="img-responsive">
                    </figure>
                    <div class="fh5co-text">
                        <h2>{!! $value->name !!}</h2>
                        <p>{!! $value->quantity !!}</p>
                        <p><span class="price cursive-font">Ksh {!! $value->price !!}</span></p>
                    </div>
                </a>
            </div>
       @endforeach



        </div>
    </div>
</div>


@endsection
