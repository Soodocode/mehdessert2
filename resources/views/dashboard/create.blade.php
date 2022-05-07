@extends('layouts.apps')

@section('content')
@if ($errors->any())
   <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
     </ul>
   </div>
@endif
<div class="uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <div class=""></div>
    </div>
    <div>
        <div class="">
<div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    Add Product
                                </div>
                                <div class="uk-card-body"> 
                                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                                        <!-- Add CSRF Token -->
                                        @csrf
                                        <fieldset class="uk-fieldset">

                                        <div class="uk-margin"> 
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="text" name="name" placeholder="Product Name" required>
                                            </div>
                                        </div> 

                                        <div class="uk-margin"> 
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="number" name="price" placeholder="Product Price" required>
                                            </div>
                                        </div>

                                        <div class="uk-margin">
                                            <textarea class="uk-textarea" rows="5" name="description" placeholder="Description" required></textarea>
                                        </div>
 

                                        <div class="uk-margin">
                                            <div uk-form-custom>
                                            <input type="file" name="file" required>
                                            <button class="uk-button uk-button-default" type="button" tabindex="-1">Select Photo</button>
                                            </div>
                                            </div>

                                            <div class="uk-margin">
                                            <button type="submit" class="uk-button uk-button-primary">
                                            Submit
                                            </button>
                                             <a href="/products" class="uk-button uk-button-danger">
                                            Cancel
                                            </a>
                                            </div>

                                            </fieldset>
                                            </form>
                                            </div>
                                            </div>
                                            </div>
    </div>
    <div>
        <div class=""></div>
    </div>
</div> 
@endsection









