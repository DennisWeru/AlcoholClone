@extends('site.layout')
@section('content')
<header>
    <div class="overlay"></div>

</header>
<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2 class="cursive-font primary-color">Confirm Details</h2>
                <p></p>
            </div>
        </div>

        <div class="row">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                    <td></td>
                    <td>{!! $cart->user_name !!}</td>
                    <td>{!! $cart->user_email !!}</td>
                    <td>{!! $cart->contact !!}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach($all_products as $product => $value)
                  <tr>
                    <th scope="row">{{ @++$i }}</th>
                    <td>{!! $value->name !!}</td>
                    <td>{!! $value->quantity !!}</td>
                    <td>Ksh.{!! $value->price !!}</td>
                  </tr>

                  @endforeach

                  <tr>
                    <td></td>
                    <td><h3>Location</h3></td>
                    <td>{!! $location->name !!}</td>
                    <td>Ksh. {!! $location->logistical_price !!}</a></td>

                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td><h3>Total</h3></td>
                    <td><h2>Ksh.{!! $final_price !!}</h2></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="{{ route('finish.order',[$cart->uniqid]) }}" class="btn btn-success">Finish Order</a></td>

                  </tr>
                </tbody>
              </table>

        </div>

    </div>
</div>
@endsection
