@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Product`s Details')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Product`s Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <form method='POST' action='{{ route('post.product') }}' enctype="multipart/form-data">
                                    @csrf
                            <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Name') }}<span style="color:red">*</span></label>
                                <input type="text" name="name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" value="" required autofocus>
                                </div>

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Main Photo') }}<span style="color:red">*</span></label>
                                <input type="file" name="main_photo" class="form-control form-control-alternative{{ $errors->has('main_photo') ? ' is-invalid' : '' }}" accept=".png,.jpg,.gif,.JPEG" value="" required autofocus>
                                </div>


                                <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Description') }}</label>

                                    <textarea name="description" class="editor_text_area form-control form-control-alternative{{ $errors->has('content') ? ' is-invalid' : '' }}" placeholder="{{ __('Product Specification and Description') }}" value="{{ old('content') }}" rows="4"></textarea>

                                    @if ($errors->has('content'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span>
                                    @endif
                                </div>




                               <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Category') }}<span style="color:red">*</span></label>
                                <select name="category" class="form-control" required>
                                    @foreach($categories as $category => $values)
                                    <option value={!! $values->id !!}>{!! $values->name !!}</option>
                                        @endforeach
                                </select>
                                </div>

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Quantity') }}<span style="color:red">*</span></label>
                                <select name="quantity" class="form-control" required>

                                    <option >250ml</option>
                                    <option >500ml</option>
                                    <option >750ml</option>

                                </select>
                                </div>

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Other Photos') }}</label>
                                <input type="file" name="other_photos[]" class="form-control form-control-alternative{{ $errors->has('other_photos') ? ' is-invalid' : '' }}" accept=".png,.jpg,.gif,.JPEG" value=""  autofocus multiple>
                                </div>

                                <div class="form-group{{ $errors->has('application_form') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Price(ksh)') }}</label>
                                <input type="number" name="price" class="form-control form-control-alternative{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="Product Price" value=""  autofocus required>
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






