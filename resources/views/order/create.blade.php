@extends('layouts.app')
@section('content')



      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Products</h3>
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


        @foreach($orders as $row)


      
     
        <div class = "row-md-10">
          
        <div class ="col-md-2" style="background-color:bisque; border-style: solid; height:400px">
          

           <img src="{{URL::asset('/image/cart.png')}}" alt="profile Pic" height="200" width="200">   
       
        <h4>   {{$row['item_name']}} </h4>
        <h4> Price :  {{$row['item_price']}} </h4>
      
        <form method="post" action="{{url('order')}}">
                {{csrf_field()}}
                <div class="form-group">
                 <input type="hidden" name="first_name" value = "{{$row['item_name']}}" class="form-control" placeholder="Item Name" />
                </div>
                <div class="form-group">
                 <input type="hidden" name="last_name" value = "{{$row['item_price']}}" class="form-control" placeholder="Item Price" />
                </div>
                
                <div class="form-group">
                        <input type="hidden" name="user_id" value = "{{Auth::user()->id}}" class="form-control" placeholder="Item Price" />
                       </div>

                    <div class="form-group">
                        <input type="hidden" name="user_name" value = "{{Auth::user()->name}}" class="form-control" placeholder="Item Price" />
                       </div>


                <div class="form-group">
                 <input type="submit" value="order" class="btn btn-primary" />
                </div>

               </form>
            
       </a>
     </div>
     
     
       
        </div>
     
        


        @endforeach
       </table>


 </div>
</div>
@endsection
