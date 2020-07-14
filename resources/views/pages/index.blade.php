@extends('layouts.master')

@section('content')

<div class='container margin-top-20'>
	
<div class="row">
	<div class="col-md-4">
		<ul class="list-group">
  <li class="list-group-item">First item</li>
  <li class="list-group-item">Second item</li>
  <li class="list-group-item">Third item</li>
</ul>
	</div>

	<div class="col-md-8">
    <div class="widget">
    	<h3>featured product</h3>
        <div class="row">

        	<div class="col-md-3">
        		<div class="card" >
  <img class="card-img-top featured-img" src="{{asset('public/images/products/'. 's.png')}}" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">samsung</h4>
    <p class="card-text">taka-4000</p>
    <a href="#" class="btn btn-primary">add to cart</a>
  </div>
 </div>
      </div>

            	<div class="col-md-3">
        		<div class="card" >
  <img class="card-img-top featured-img" src="{{asset('public/images/products/'. 's.png')}}" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">samsung</h4>
    <p class="card-text">taka-4000</p>
    <a href="#" class="btn btn-primary">add to cart</a>
  </div>
 </div>
      </div>

      	<div class="col-md-3">
        		<div class="card" >
  <img class="card-img-top featured-img" src="{{asset('public/images/products/'. 's.png')}}" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">samsung</h4>
    <p class="card-text">taka-4000</p>
    <a href="#" class="btn btn-primary">add to cart</a>
  </div>
 </div>
      </div>


      	<div class="col-md-3">
        		<div class="card" >
  <img class="card-img-top featured-img" src="{{asset('public/images/products/'. 's.png')}}" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">samsung</h4>
    <p class="card-text">taka-4000</p>
    <a href="#" class="btn btn-primary">add to cart</a>
  </div>
 </div>
      </div>


      	<div class="col-md-3">
        		<div class="card" >
  <img class="card-img-top featured-img" src="{{asset('public/images/products/'. 's.png')}}" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">samsung</h4>
    <p class="card-text">taka-4000</p>
    <a href="#" class="btn btn-primary">add to cart</a>
  </div>
 </div>
      </div>


    
    
  


        	
        </div>

    </div>
     <div class="widget">
    	
    </div>
	</div>
</div>
</div>
@endsection