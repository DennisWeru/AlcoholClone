@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Delivery Guy`s Details')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Delivery Guy`s Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <form method='POST' action='{{ route('post.delivery.guy.details') }}' enctype="multipart/form-data">
                                    @csrf
                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Name') }}<span style="color:red">*</span></label>
                                <input type="text" name="name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name"  required autofocus>
                                </div>
                                

                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Email') }}<span style="color:red">*</span></label>
                                <input type="email" name="email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email"  required autofocus>
                                </div>
                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Phone Number') }}<span style="color:red">*</span></label>
                                <input type="text" name="phone_number" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Mobile Number e.g 0712 345 678"  required autofocus>
                                </div>
                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Ride Regitsration Number') }}<span style="color:red">*</span></label>
                                <input type="text" name="ride_reg_no" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Ride Number Plate Number"  required autofocus>
                                </div>
                              


                                    <input type="submit" class="btn btn-success mt-4" value="Submit">

                                </form>
                             </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
$(document).ready(function(){
   $('#image').on("change", function(){
     $('.should_appear').fadeIn();
   });
});

</script>
        @include('layouts.footers.auth')
    </div>
@endsection






