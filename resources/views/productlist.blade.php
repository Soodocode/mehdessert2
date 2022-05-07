@extends('layouts.app')

@section('content')
<div class="container">
<li class="nav-item">
<a class="nav-link" href="{{ route('products.create') }}">{{ __('Create Product') }}</a>
</li>
    <div class="row justify-content-center">
    <table class="table">
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
      <td><img src="{{asset('/storage/product/' . $products->file_path)}}" class="img-thumbnail" alt="Responsive image"></td>
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
