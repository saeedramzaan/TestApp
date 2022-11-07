
       

  <!doctype html>

  <html lang="{{ app()->getLocale() }}">
    <head><meta charset="shift_jis">
      <!-- Required meta tags -->
      
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href={{ asset('image/logo.png') }}>
      
      <!-- Bootstrap CSS -->


              <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    
 
    <!-- Bootstrap core JavaScript -->
   
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>
    
            <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
    
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      
     
  
      <title>TestApp</title>

      

    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <body style="">
      <title>@yield('pageTitle') - App Name</title> 
      
      
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


       .mobNav{
 
        display: none;

       }
       
         .navLogo{
          
          
         position: relative;
         right:32%;
 
         
   
           }
           
                
        .navLog{
          
          
       position: absolute; 
       left:3%;
 
         
   
         }

      ul
      {
      
      list-style-type: none;
      padding-left: 64%;
      margin: 0;
      text-align: left;
      
      font-family: Ubuntu Regular;
      src:url("Ubuntu-Regular.ttf");
      size:65px;
      
      
      }
      
      li
      {
      
      
      background-repeat: no-repeat;
      background-position: 100% .4em;
      padding-right: 4em;
      margin: 1em 0;
      
     
      }
      
     

      .color:hover{

        background-color:#f8fff8;

      }
      
      
      h5{
      
      color: black;
      
      }
      
      /* mouse over link */
      h5:hover {
      color: blue;
      }

      .thumbnail{

        

      }

      .footCol1{
        padding-left:10%; color:white;
      }

      .footCol2{
        padding-left:20%; color:white;
      }
      
      .singUp{
  
        position: absolute;
        right:2%;
  bottom:24%;

      }

      .shop{

        position: absolute;
        right:-3%;
      


      }
      
      .blueS{
   color:blue;
   font-size: 20px;

 }

 .redS{
 color:red;
 font-weight: bold;
 font-size: 120%;
   
 }

 .btnPos{


  color:black;
 


 }

 .btnSet{
  position: absolute; 
  right:3%;
  bottom: 13%;

 }
    @media only screen and (max-width: 1280px) {
       
       .navLogo{
          
          
         position: relative;
         right:0%;
 
         
   
           }
       
    }
 
 
   @media only screen and (max-width: 1680px) {
       
       .navLogo{
          
          
         position: relative;
         right:90%;
 
         
   
           }
       
   }
   
   @media only screen and (max-width: 1440px) {
       
       .navLogo{
          
          
         position: relative;
         right:40%;
 
         
   
           }
       
   }
   
    @media only screen and (max-width: 1366px) {
       
       .navLogo{
          
          
         position: relative;
         right:32%;
 
         
   
           }
       
    }
   
    
    @media only screen and (max-width: 1000px) {

      .ProLeft{

position: relative; 
left:20%;

}

      .redTrans{

background:url('image/wi.png')  center no-repeat;
opacity:0.8;
}
       
      .navLog{
          
          
   
           
          float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 
         
   
           }
       
    }
 
 
 
  
      
      @media only screen and (max-width: 500px) {


    .ProLeft{

    position: relative; 
    left:20%;

    }
          
    .navLogo{
          
          
    position: absolute;
    right:40%;
    bottom:0%;
 
         
   }
   
       .navLog{
          
          
   
           
          float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 
         
   
           }

 .btnPos{


 font-size:12px;
 }

 .btnSet{
  position: absolute; 
  right:0;
  top: 20%;

 }
     

    

           .blueS{
   color:blue;
   font-size: 14px;

 }

 .redS{
 color:red;
 font-weight: bold;
 font-size: 16px;
   
 }

           .mobNav{
 
 display: inline;

}


.mobCart{
      
  display: flex;
  justify-content: center;
  align-items: center;

 /*  position: relative;
   left : 10%; */
     
     

        }

        .footCol1{
        padding-left:30%; color:white;
      }

      .footCol2{
        padding-left :5%; color:white;
        padding-bottom:15%;
        text-align: center;
      }


      .singUp{
        
      font-size:10px;

     
         

      }


      .redTrans{

          background:url('image/wi.png')  center no-repeat;
          opacity:0.8;
      }
        

      }
      
     

      @media only screen and (max-width: 600px) {

        .ProLeft{

position: relative; 
left:20%;

}

        .redTrans{

background:url('image/wi.png')  center no-repeat;
opacity:0.8;
}

        .navLog{
          
          
   
           
          float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 
         
   
           }


        .btnPos{

font-size:15px;
 


}

  

 .mobCart{
      
    position: relative;
    left :-7%;

     }

      }
      

      .initial a {
    text-transform: initial;
  }

html {
  scroll-behavior: smooth;
}



      
          </style>
          
          <style>
              
     
              
          </style>

      <div id="app">

        
       
        
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background:url('image/nb31.png')  center no-repeat; height:60px; background-size: cover;">
            
                  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          
          <span class="navbar-toggler-icon" style="font-size:12px; padding-top:100%;">Menu</span>
        </button>
          
          <div class="container">
        
         
          <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
          @guest

 
           
          <div style="  font-family: Ubuntu Regular;
          src:url('http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin');
          size:45px;" >  

        <div class="btnSet">
        <a class="navbar-brand" href="{{route('login')}}"><h5 class="btnPos">Sign In</h5></a>
        <a class="navbar-brand" href=""><h5 style="color:white;">| </h5></a>

    
        <a class="navbar-brand" href="{{route('register')}}"><h5 class="btnPos">Sign Up</h5></a>
      </div>
      
           
        
        
     
      
          
      </div>
       
   <div class="navLog">
       
            <a class="navbar-brand" style="background:url('image/') center no-repeat; position:relative; width:120px; height:70px; background-size:cover;"></a>
            <link rel="icon" href="image/logo.png">
              </div>
   
        <div  class="collapse navbar-collapse"  id="navbarSupportedContent">
         
          <div style="position: absolute; left:14%;" class="redTrans">
          <ul class="navbar-nav mr-auto">
         
             

            <li class="nav-item">
             <center><a style="text-transform: initial;" class="navbar-brand active" style="color:white" href="/">Home</a></center>
            </li>
            
            <li class="nav-item dropdown">
              <center>
              <a style="text-transform: initial;" class="navbar-brand dropdown-toggle active ProLeft" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="/">
              Products
  
              </a>
             
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!--     <a class="dropdown-item" href="poulet?field=Poulet&front=yes">Poulet</a> -->
                        
                <a class="dropdown-item" href="search?field=item1">Item 1</a>
                <a class="dropdown-item" href="search?field=item2">Item 2</a>
                     <a class="dropdown-item" href="search?field=item3">Item 3</a>
                    
                     
                   
         
         
                       </div>
                      </center>
            </li>
           

              

            
        

            <li class="nav-item">
             <center><a style="text-transform: initial;" class="navbar-brand active" href="/#offer">Offers</a> </center>
              </li>

              <li class="nav-item dropdown">
              
            
               
               
                 </li>
            
            </ul>
         
           </div>
        </div>
            
 

              
            

              @else

              

                    
                          @if(Auth::user()->type =="ex")

                            <div class="navLog">
       
            <a class="navbar-brand" style="background:url('image/logo.png') center no-repeat; position:relative; width:120px; height:70px; background-size:cover;"></a>
             
              </div>
   
        <div style="position: absolute; left:14%;"  class="collapse navbar-collapse redTrans"  id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
             
             

            <li class="nav-item">
              <a style="text-transform: initial;" class="navbar-brand active" href="/">Home</a>
            </li>
            
          
           

              

            
            <li class="nav-item dropdown">
              
            
           <!--     <a class="dropdown-item" href="poulet?field=Poulet&front=yes">Poulet</a> -->
           <a style="text-transform: initial;" class="navbar-brand dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Products
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       <!--     <a class="dropdown-item" href="poulet?field=Poulet&front=yes">Poulet</a> -->
               
       <a class="dropdown-item" href="search?field=item1">Item1</a>
       <a class="dropdown-item" href="search?field=item2">Item2</a>
            <a class="dropdown-item" href="search?field=item3">Item3</a>
        
          


              </div>
            </li>

            <li class="nav-item">
              <a style="text-transform: initial;" class="navbar-brand active" href="#offer">Offers</a>
              </li>
            
           </ul>
           </div>

                          <div class="shop">
                          <li class="nav-item dropdown active">
                
                            <a class="nav-link dropdown-toggle"    href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <h6 style="font-size:13px; color:black;"> {{ Auth::user()->name }} </h6>
                            </a>
                            <div class="dropdown-menu" style="background-color:white;" aria-labelledby="navbarDropdown">
                                  
                              
                              
                              <a href="{{ route('logout') }}" class="dropdown-item"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>
  
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                            
  
                            </li>
                          </div>
                          @endif
  
                          
                        
   
                          @if(Auth::user()->type =="in")

                               
   <div class="navLog">
       
            <a class="navbar-brand" style="background:url('image/logo.png') center no-repeat; position:relative; width:120px; height:70px; background-size:cover;"></a>
             
              </div>
   
        <div style="position: absolute; left:14%;"  class="collapse navbar-collapse redTrans"  id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
             
             

            <li class="nav-item">
              <a style="text-transform: initial;" class="navbar-brand active" href="/">Home</a>
            </li>
            
          
           

              

            
            <li class="nav-item dropdown">
              
            
           <!--     <a class="dropdown-item" href="poulet?field=Poulet&front=yes">Poulet</a> -->
           <a style="text-transform: initial;" class="navbar-brand dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Products
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       <!--     <a class="dropdown-item" href="poulet?field=Poulet&front=yes">Poulet</a> -->
               
       <a class="dropdown-item" href="search?field=item1">Item1</a>
       <a class="dropdown-item" href="search?field=item2">Item2</a>
            <a class="dropdown-item" href="search?field=item3">Item3</a>
            
          


              </div>
            </li>

            <li class="nav-item">
              <a style="text-transform: initial;" class="navbar-brand active" href="#offer">Offers</a>
              </li>
            
           </ul>
           </div>

                          
                          <div class="shop">
                            <li class="nav-item dropdown active">
                  
                              <a class="nav-link dropdown-toggle"    href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h6 style="font-size:13px; color:black;"> {{ Auth::user()->name }} </h6>
                              </a>
                              <div class="dropdown-menu" style="background-color:white;" aria-labelledby="navbarDropdown">
                                    
                                
                                
                                <a href="{{ route('logout') }}" class="dropdown-item"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                              
    
                              </li>
                            </div>


                                        
                                   @endif
  
                          @if(Auth::user()->type =="admin")
                          
                          <li class="nav-item dropdown active" style="positon:absolute; left:86%;">
                
                            <a class="nav-link dropdown-toggle"   href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            
                              <h6 style="color:white;">  Admin </h6>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  
                              
                              
                              <a href="{{ route('logout') }}" class="dropdown-item"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>
  
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                            
                        
                              <a href="{{ url('/item/create') }}" class="dropdown-item">
                             
                              Item Creation
                          </a>
  
                       
  
                         
                        
                            <a href="{{ url('/free_issue') }}" class="dropdown-item">

                                view free issue
                            </a>

                  
                       
                     
                              <a href="{{ url('/catsearch') }}" class="dropdown-item">
                             
                              Order Info
                          </a>
  
                         
                         
                  

                      <a href="{{ url('/update') }}" class="dropdown-item">
  
                        Update Image
                    </a>

                    <a href="{{ url('/info') }}" class="dropdown-item">
  
                     User Update Info
                  </a>


                

                <a href="{{ url('/browseSpecial') }}" class="dropdown-item">
  
                  Add Free Issue
              </a>
  
                            </div>
                     
                    </li>
                       
  
                          @endif
  
                          
                 
        
              @endguest
  
  
            </ul>
            <ul class="navbar-nav mr-left">
  
            
  
        
  
  
            </ul>
        
        </div>
        </nav>

      

      
     @yield('content')
    </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="{{ asset('js/app.js') }}"></script>
      
      
   <!--   <link rel="stylesheet" type="text/css" href=" // asset('assets/css/style.css') }}"> -->
      <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}">
     
    </body>
  </html>


 
  @yield('scripts')
 
