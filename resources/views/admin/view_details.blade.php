@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-xl-12 order-xl-1">
                        <div class="card bg-secondary shadow">
                            <div class="card-header bg-white border-0">
                                <div class="row align-items-center">

            <div class="col-md-8">

                <div class="card" style="width: 70rem;">
                        <div class="card-header"><b>UserName: </b>{!! $cart->user_name !!}  </div>


                    <div class="card-body">
                            <b>Phone Number: </b><a href="tel:{!! $cart->contact !!}">{!! $cart->contact !!}</a><br/><br/>
                        <a href="mailto:{!! $cart->user_email !!}" class="btn btn-primary">Send Email to Customer</a><br/><br/>
                        <div class="grid-sizer"></div>
                        <h2>All Items</h2>
                        <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>

                                   <th scope="col">Total Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $cart_total = 0;
                                @endphp
                        @foreach($all_products as $item => $values)
                        <tr>
                        <td>{{ @++$i }}</td>
                        <td>{!! $values->name !!}</td>
                        <td>{!! $values->quantity !!}</td>
                        <td>{!! $values->price !!}</td>


                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td><h4>Location:</h4></td>
                            <td><h4>{!! $location->name !!} </h4></td>
                            <td>{!! $location->logistical_price !!}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>

                            <td>Total Price:</td>

                            <td>{!! $final_price !!}</td>

                        </tr>

                    </tbody>
                </table>
            </div>

                            {{-- @if($cart->status !== '2')
                            <a href="{{ route('confirm.payment',[$cart->uniqid]) }}" class="btn btn-primary">Confirm Payments</a><br/><br/>
                            @endif --}}
                    </div>

                </div>

            </div>


        </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    @endsection
