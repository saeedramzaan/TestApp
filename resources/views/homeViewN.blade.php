

@extends('layouts.app3')
  
@section('title', 'Products')
    

@section('content')




 
<section>


  
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
          <img src="image/slide/3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/slide/4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/slide/5.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/slide/6.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/slide/7.jpg" class="d-block w-100" alt="...">
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

    <div class="container">

 
     
  
          <head>
  
           <style>

       

             </style>
      
      
          </head>
     
  
   
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
                              <?php $total += ($details['np'] * $details['unitqty']) * $details['quantity'] ?>
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
                                      <?php $totPrice = $details['np'] ?>
                                      <span class="price text-info"> ${{ $totPrice }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
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
   
  
  


    <section>

      <br>
      <br>
    <h1><center> Special Offers </center></h1>
      <br>
      <br>
  
  
    <!--Row with two columns divided in 1:3 ratio-->
   
    

    @if(isset($offerPro))

            

            
    @foreach($offerPro as $product)

    <style>
      #outer-div {
        width: 100%;
        text-align: center;
        background-color: #0666a3
      }
      #inner-div {
        display: inline-block;
        margin: 0 auto;
        padding: 3px;
        background-color: #8ebf42
      }

      .container{
  
}

/* just aesthetics */
.container{

 
}

.element{
 
}

body{
  
}
    </style>
  </head>
  <body>

    
    <span class="mobCart">
    
    <div  class="fa fa-pencil pluse"  style='position:relative; left:2%; width:250px ; height:430px;    margin-left:50px; margin-bottom:50px;'>
     
     
    
      <div class="thumbnail" style="border-color:red; border-style: solid; border-width: 0.1mm;">
        <img src="{{ 'image/sale.png' }}" style="position:relative;  left:23%; width:50%; height:auto">    
            <div >

            <img src="{{ 'storage/'.$product->profile_image }}" style="position:relative;  left:23%" width="130px" height="130px">
            <div class="caption">
               
                

                <div style="padding-left:40%;"> 
                <button type="button"   class="btn-view"  data-toggle="modal" data-target="#ex{{$product->id}}">
                
                </button>


              </div>
                 
            
                <h6 style=" height:20px; text-align:center;">{{ $product->pname }}</h6>
                <br>
              
                <h6 style=" height:20px; text-align:center; font-weight: 900;">{{ $product->newprice }} CH</h6>
               
                <h6 style=" height:20px; text-align:center; text-decoration:line-through;">{{ $product->oldprice }} CH</h6>
            
                 <br>
                <p class="btn-holder" style= "width:230px; padding-left:8%;"><a style="color:white; background-color:red;" href="{{ url('add-to-cart/'.$product->id) }}"  class="btn btn-meroon btn-block"   role="button">Add to cart</a> </p>
               
          
             
         
         
                  
                  <!-- Modal -->
                 
             
                <script>



                    </script>
        
            </div>
            
        </div>
    </div>
    </div>
  </span>   


  
  
   
      
      <!-- Modal -->
  <div class="modal fade" id="ex{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 style="text-align:center;" class="modal-title" id="exampleModalLabel">Description</h5>
              <button type="button" class="close" onclick="adjust_body()" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="modal-body">

                <h6 style=" height:20px; text-align:center;">{{ $product->pname }}</h6>

                <img src="{{ 'storage/'.$product->profile_image }}" style="position:relative;  left:30%" width="200px" height="200px">
                
                @if(isset($Pro))
                <br><h5><b> Lagerung </b></h5>
                {{ str_limit(strtolower($product->des1), 50) }}
                <br><h5><b> Inhaltsstoffe <b></h5>
                {{ str_limit(strtolower($product->des2), 50) }}
                <br><h5><b> Gewicht <b></h5>
                {{ str_limit(strtolower($product->des3), 50) }}
                <br><h5><b> Herkunftsland <b></h5>
                {{ str_limit(strtolower($product->des4), 50) }}
                <br>

                @endif
                 
                

               
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="adjust_body()" data-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>



    
      
      <!-- Modal -->
    

    @endforeach

    @endif
   
   
   
</div>

    </section>


    <div class="container page">
      @yield('content')
  </div>
   
  @include('layouts.footer')
  

   

   
 
@endsection

