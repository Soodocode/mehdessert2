@extends('layouts.app')


@section('content')
<div class="uk-section uk-section-muted">
    <div class="uk-container uk-container-small">
    	<div class="uk-card uk-card-default uk-card-body uk-width-1-23@m">
    <h3 class="uk-card-title">Delivery Address</h3>
    <p>Jhojie Jhojie</p>
    <p>Lower Lubogan Toril Davao City 8000</p>
    <p>09103373780</p>

    <hr/>
<div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
    <div>
    	<h3>ORDERED ITEM</h3>
    	<div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr> 
                <th class="uk-table-shrink">Item</th>
                <th class="uk-table-shrink">Price</th>
                <th class="uk-table-shrink">Quantity</th>
                <th class="uk-table-shrink">Subtotal</th>
            </tr>
        </thead>
        <tbody>
        	 @foreach($cartitem as $count=> $itemtocart) 
            <tr> 
                <td>
                <label class="amount">{{$itemtocart['name']}}</label>
                <img class="uk-preserve-width uk-border-circle" src="{{asset('/storage/product/' . $itemtocart->file_path)}}" width="40" alt="">
            	</td> 
            	<td class="uk-text-nowrap"><label class="amount">&#8369; {{$itemtocart['price']}}</label></td>
                <td class="uk-text-nowrap">
                	<input type="number" id="form-h-mix5" min="0" max="100" value="1" class="uk-form-width-mini uk-form-small">
                </td>
                <td class="uk-text-nowrap"><label class="amount subtotal">&#8369; 10 {{Session::get('variableName')}}</label></td>                
            </tr> 
             @endforeach 
        </tbody>
    </table>
</div>
	</div>
    <div>
    	<h3>PAYMENT METHOD</h3>
          <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-checkbox" type="checkbox" checked> COD</label> 
        </div>
        <div class="uk-overflow-auto">
    <table class="uk-table uk-table-small uk-table-divider"> 
        <tbody>
            <tr>
                <td><label class="total">Order Amount:</label></td>
                <td><label class="amount">&#8369; 10</label></td> 
            </tr> 
             <tr> 
                <td><label class="total">Delivery Fee</label></td>
                <td><label class="amount">&#8369; 100</label></td> 
            </tr> 
             <tr> 
                <td><label class="total">Order Total</label></td>
                <td><label class="amount">&#8369; 110</label></td> 
            </tr> 

        </tbody>
    </table>
    <button type="submit" class="uk-button uk-button-primary uk-button-medium uk-width-1-1 btn-login" onclick="this.disabled=true; this.value='Submitting...'; this.form.submit()">Place Order</button>
</div>
    </div>
</div>
</div>
    </div>

</div>



@endsection
