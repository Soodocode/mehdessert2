@extends('layouts.apps')

@section('content')
<div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                Product List
                                </div>
                                <div class="uk-card-body"> 
                                <a class="nav-link uk-button uk-button-primary" href="{{ route('products.create') }}">{{ __('Add Product') }}</a>
                               
                                    <table class="uk-table uk-table-striped">
                                        <thead>
                                            <tr> 
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th> 
                                                <th scope="col">Product Price</th> 
                                                <th scope="col">Description</th>
                                                <th scope="col">Photo</th>
                                                <th scope="col">Action</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
@foreach($product as $count=> $products) 
    <tr>
      <th scope="row">{{++$count}}</th> 
      <td>{{$products['name']}}</td>
      <td>{{$products['price']}}</td>
      <td>{{$products['description']}}</td>
      <td><img src="{{asset('/storage/product/' . $products->file_path)}}" class="uk-thumbnail uk-border-rounded" alt="Responsive image" width="30%" height="30%"></td>
      <td> 
      <a href={{"/products/edit_product/".$products['id']}}>Edit</a>
      <a href={{"/products/updates/".$products['id']}}>Delete</a>
      </td>
    </tr> 
@endforeach 
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>

@endsection