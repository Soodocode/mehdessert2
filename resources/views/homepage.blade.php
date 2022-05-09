@extends('layouts.app')


@section('content')
            <!-- .site-branding -->
    <div class="uk-cover-container uk-height-large">
        <img src="images/banner2.jpg" alt="" uk-cover>
        <div class="uk-position-center uk-text-center">
            <article class="uk-article uk-padding" id="article-style">
                <h1 class="uk-article-title head-title">DELICIOUS & DELIVERED TO YOU!</p>
            </article>
          <a href="#brands" uk-scroll> <button class="uk-button uk-button-default uk-button-large uk-margin uk-visible@s uk-animation-scale-up uk-transform-origin-bottom-right" id="btn-shop-l">Shop</button></a>
          <a href="#brands" uk-scroll> <button class="uk-button uk-button-default uk-button-meduim uk-margin uk-hidden@s uk-animation-scale-up uk-transform-origin-bottom-right" id="btn-shop-lg">Shop</button></a> 
        </div>
    </div>


  <div class="uk-section uk-section-default" id="uk-text-sec" uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 300; repeat: true">
        <div class="uk-container">
                    <div class="uk-text-center">
                            <h2><strong>OUR BOXES</strong></h2> 
                        <div class="uk-panel uk-panel-box uk-text-break">
                            <p>Lorem ipsum dolor sit amet, consetetur sapscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam, erat, sed diam voluptua. At vero eos et accusam
                                et justo duo dolores et rea rebum. Stet clita kasd gubergren, no sea.</p>
                        </div> 
                    </div>

    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center" uk-grid> 
    @foreach($productlist as $count=> $product) 
        <div>
            <div class="uk-card uk-card-default uk-card-body"> 
                <h3 class="uk-card-title">{{$product['name']}}</h3>
                <i class="uk-icon-star"></i>
                <img class="box-product" data-src="{{asset('/storage/product/' . $product->file_path)}}" alt="images" uk-img>
                    <p>{{$product['description']}}</p> 
                    <span class="price "><strong> &#8369; {{$product['price']}} </strong></span>
                    @guest
                    <a href="/login" class="uk-button uk-button-primary cart-btn">Add to cart</a>
                    @else
                    <a href="/shop/{{$product['id']}}" class="uk-button uk-button-primary cart-btn">Add to cart</a> 
                    @endguest
            </div>
        </div>
    @endforeach 
    </div>

 
        </div>
    </div>
      
    @endsection