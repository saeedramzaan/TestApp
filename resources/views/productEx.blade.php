


@extends('layouts.app3')
  
@section('title', 'Products')
 
@section('content')

<div class="container">

 
    <script>
        $( document ).ready(function() {
          new WOW().init();
        });

        function adjust_body()
  {
   /// document.body.style.overflow = 'hidden';
   document.body.style.width = '102%';


   var mq = window.matchMedia( "(max-width: 500px)" );
if (mq.matches) {
  document.body.style.width = '105%';
}

  
  }

  
        
                            </script>
        


                            <style>
        
                        .fa-pencil:hover {animation: pulse 1s linear .5s infinite;
                          position: relative;
          z-index: 2;
                        }

                        .btn-meroon{
background-color:#bb0a1e;

}

.btn-view{

  background:url('image/s.png')  center no-repeat;
  background-size: 25px 25px;
  background-color: #white;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;

}

.mobCart{
 


}


                              </style>

        

        <head>

        
    
    
        </head>
   
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
                  <br>
                  <br>
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

   



            

            
@foreach($cat as $cats)

            @if(isset($products))

            

            
            @foreach($products as $product)
            

            <span class="mobCart">
            <div  class="fa fa-pencil pluse" style='position: relative;left:2%; width:250px ; height:400px;  margin-left:50px; margin-bottom:50px;'>
             
              <div class="thumbnail" style="border-color:{{$cats->color}}; border-style: solid; border-width: 0.1mm;">
               
                    <img src="{{ 'storage/'.$product->profile_image }}" style="position:relative;  left:10%" width="200px" height="200px">
                    <div class="caption">
                       
                        

                        <div style="padding-left:40%;"> 
                        <button type="button"  class="btn-view"  data-toggle="modal" data-target="#ex{{$product->id}}">
                        
                        </button>


                      </div>
                         
                    
                        <h6 style=" height:40px; text-align:center;">{{ $product->pname }}</h6>
                     
                      
                      
                       
            
                    
                  
                        <p class="btn-holder" style= "width:230px; padding-left:8%;"><a style="color:white; background-color:{{$cats->color}};" href="{{ url('add-to-cart/'.$product->id) }}"  class="btn btn-meroon btn-block"   role="button">Add to cart</a> </p>
                       
                  
                        
                 
                 
                          
                          <!-- Modal -->
                         
                     
                        <script>



                            </script>
                
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
                        
                        <br><h5><b> Lagerung </b></h5>
                        {{ str_limit(strtolower($product->des1), 50) }}
                        <br><h5><b> Inhaltsstoffe <b></h5>
                        {{ str_limit(strtolower($product->des2), 50) }}
                        <br><h5><b> Gewicht <b></h5>
                        {{ str_limit(strtolower($product->des3), 50) }}
                        <br><h5><b> Herkunftsland <b></h5>
                        {{ str_limit(strtolower($product->des4), 50) }}
                        <br>
        
                        
        
                       
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

            @endforeach

         
    
 
        
        <!-- Button trigger modal -->


      
      </div>
     
      @include('layouts.footer')
    
       
 
@endsection
 



