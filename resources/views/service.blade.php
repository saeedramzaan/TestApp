

@extends('layouts.app3')
  
@section('title', 'Products')
 
@section('content')

<div class="container" align="center">
    <!--Row with two equal columns-->

    
    <!--Row with two columns divided in 1:3 ratio-->
    <div class="row" align="center" style ="position:relative;top:40%";>
        <br>
        <br>
        <br>
        <div class="col-md-6"><h1>Our Services</h2>
            <br>
            <br>
            <h6>To safeguard the success of your ecommerce site, Clickworker offers specialty services and solutions. We optimize your online presence to help your business rank in the best possible position, ensuring your customers can easily find your business online.</h6></div>
        <div class="col-md-6"><img src ="image/ecom.jpg" width="500px" height="334px"></div>
    </div>
</div>
 
<div class="container page">
    @yield('content')
</div>
 
@yield('scripts')

@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<div class="row">
<div class="col-md-12">
<br />
<h3 aling="center"></h3>
<br />
@if(count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
@if(\Session::has('success'))
<div class="alert alert-success">
<p>{{ \Session::get('success')}}</p>
</div>
@endif
 
    <div class="container products">
 
     
             
            @if(isset($products))
            
            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3" style="width:300px; height:400px"width ="500px" height="500px">
                    <div class="thumbnail">
                        <img src="{{ 'storage/'.$product->profile_image }}" width="150px" height="150px">
                        <div class="caption">
                            <h4>{{ $product->pname }}</h4>
                            <p>{{ str_limit(strtolower($product->description), 50) }}</p>
                            <p><strong>Price: </strong> {{ $product->sellingprice }}$</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                           
                        </div>
                    </div>
                </div>
            @endforeach
 
            @endif
        </div><!-- End row -->
 
   
 
@endsection