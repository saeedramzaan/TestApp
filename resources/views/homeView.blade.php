

<style>

#offer {

  background-color: pink;
}

</style> 

@extends('layouts.app3')
  
@section('title', 'Products')
    

@section('content')


 
 
<section>

  <div class="container">

      
    <br>
    <br>
    <br>
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-12 main-section">
        <div class="dropdown">
            <button type="button" class="btn btn-info" data-toggle="dropdown">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
            </button>
            <div class="dropdown-menu">
                <div class="row total-header-section">
                    <div class="col-lg-6 col-sm-6 col-6">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                    </div>

                    <?php $total = 0 ?>
                    @foreach((array) session('cart') as $id => $details)
                        <?php $total += ($details['price'] * $details['unitqty']) * $details['quantity'] ?>
                    @endforeach

                    <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                        <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                    </div>
                </div>

                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        <div class="row cart-detail">
                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                <img src="{{ 'storage/'.$details['photo'] }}" height="100px" width="100px" />
                            </div>
                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                <p>{{ $details['name'] }}</p>
                                <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                            </div>
                        </div>
                    @endforeach
                @endif

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                        <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <br>
    <br>
    <br>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  data-interval="2000">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/slide/1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/slide/2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/slide/4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/slide/5.jpg" class="d-block w-100" alt="...">
        </div>
     
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    </section>
    <div class="container page">
      @yield('content')
  </div>
   
  @yield('scripts')
  
  @if (session('status'))
  <div class="alert alert-success">
      {{ session('status') }}
  </div>
  @endif
  
  
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

    <div class="container" id="offer">

 
     
  
          <head>
  
           <style>

       

             </style>
      
      
          </head>
     
  
   
   
  </div>
   
  
  




    <div class="container page">
      @yield('content')
  </div>
   
  @include('layouts.footer')
  

   

   
 
@endsection

