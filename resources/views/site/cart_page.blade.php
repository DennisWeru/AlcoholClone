@extends('site.layout')
@section('content')
<header>
    <div class="overlay"></div>

</header>
<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2 class="cursive-font primary-color">Cart Page</h2>
                <p></p>
            </div>
        </div>
        <div class="row cart_table">
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
                      <td></td>
                      <td><h2><b>SubTotal</b></h2></td>
                      <td><h2>Ksh.{!! $total_price !!}</h2></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a class="btn btn-success checkout-btn">Proceed to Checkout</a></td>

                  </tr>
                </tbody>
              </table>

        </div>
        <div class="row user_checkout" style="display:none">
            <div class="col-md-12 col-lg-12 mt-1">

                <div class="summary ml-2 mt-2 user_identity" style="width:100%;padding:10px; box-shadow:0 0 5px #033d7a; border:1px solid #033d7a; border-radius:5px 5px 5px 5px;">
                    <h2 style="text-shadow:0.5px 0.5px 1px gray; color:#033d7a; font-weight:bolder;">User Details</h2>
                    <form id="loginform" method="POST" action="{!! route('post.user.details') !!}">
                        @csrf
                        <input class="form-control my-1" type="text" id="username" name="user_name" placeholder="User Name" required>
                        <input class="form-control my-1" type="email" name="user_email" id="email" placeholder="User Email" required>
                        <input class="form-control my-1" type="text" name="contact" id="email" placeholder="Phone Number" min=10 required>
                        <input type="hidden" name="cart_uniqid" value="{!! $cart_uniqid !!}">
                        <select name="location" class="form-control">
                            @foreach($locations as $location => $value)
                            <option value="{!! $value->uniqid !!}">{!! $value->name !!}</option>
                            @endforeach
                        </select>
                        <input style="box-shadow:0 0 5px;" class="btn btn-primary btn-block btn-lg my-2" value="Submit" type="submit">
                    </form></div>
            </div>

        </div>
    </div>
</div>
@endsection
