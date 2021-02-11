@extends('site.layout')

@section('content')
<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2 class="cursive-font primary-color">{{  $category->name }}</h2>
                <p>{!! $category->description !!}</p>
            </div>
        </div>
        <div class="row">
@foreach($products as $product => $value)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <a href="#" class="fh5co-card-item image-popup">
                    <figure>
                        <div class="overlay"><i class="ti-plus"></i></div>
                        <img src="{!! $value->main_photo !!}" alt="Image" class="img-responsive">
                    </figure>
                    <div class="fh5co-text">
                        <h2>{!! $value->name !!}</h2>
                        {{ $value->description }}
                        <p><span class="price cursive-font">{!! $value->price !!}</span></p>
                    </div>
                </a>
            </div>
@endforeach
        </div>
    </div>
</div>


@endsection
