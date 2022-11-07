
@extends('layouts.app3')

@section('title')
 
@section('content')



     <div class ="container">

     
      
      <br>
      <br>
      <br>



       
    <table id="cart">
        <thead>
        <tr>

            <th>Products</th>
            <th >Price</th>
            <th >Unit</th>
            <th> Quantity </th>
            <th>Subtotal</th>
           
            <th >Action</th>
        </tr>
        </thead>
        <tbody>
          
 
        <?php $total = 0 ?>
 
     
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

      

        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
 
                <?php $total += $details['price'] * $details['unitqty'] * $details['quantity'] ?>
                <p>{{ \Session::get('key')}}</p>
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ 'storage/'.$details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <p class="nomargin">{{ $details['name'] }}</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="unit">
                      {{ $details['unitqty'] }}
                    </td>

                    <td data-th="Quantity">
                      <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                    </td>
                   
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['unitqty'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}" data-toggle="tooltip" data-placement="top" title="Update Price"><i class="fa fa-undo" aria-hidden="true"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}" data-placement="top" title="Delete Item"><i class="fa fa-times" aria-hidden="true"></i></button>
                       
                      </td>
                </tr>
            @endforeach
        @endif
 
        </tbody>
        <tfoot>
    
        <tr>

            <td></td>
           
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
           
           
        </tr>
        </tfoot>
    </table>
  <br>
          
          
         

           

   


    <div class="modal fade" id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="modal-body">
                <br><h4> Are you okay with this address </h4>
                
               @if(isset(Auth::user()->address))

                {{Auth::user()->address}}
              
               @endif
              </div>
            </div>
            <div class="modal-footer">
             

              @if(isset($id))

     <!--
              
           <p class="btn-holder"><a href=" {{-- url('/SaveOrder/'.$id) --}}" class="btn btn-primary btn-block text-center" role="button">Yes</a> </p>
     -->

     <form method="post" action="{{url('pay')}}">
      {{csrf_field()}}
      <div class="form-group">
        <label> Total </label>
      <label class="form-control" placeholder="Enter Item Name" /> {{ $total }}  </label>
      
      </div>

      <input type="hidden" name="txtTotal" value="{{ $total }}" class="form-control" placeholder="Enter Item Name" />
      
   
     
   
      <div class="form-group">
       <input type="submit" value="Pay" class="btn btn-primary" />
       <button type="button" class="btn btn-danger" onclick="adjust_body()" data-dismiss="modal" data-toggle="modal" data-target="#add" data-dismiss="modal">No</button>
      </div>
     </form>

      @endif

           

             

       
           
            </div>

            
          
            
          </div>
        </div>
      </div>

      
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Enter your new address</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

            </div>
            <form action="{{ route('pay') }}" method="POST" role="form" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                   <br />
                  
                   <br />
                   
                  
                 
                  
                    {{ csrf_field() }}

                    <div class="form-group row">

                     
                     
                      <div class="col-md-12">

                        

                          <input type="text" class="form-control" name="txtName" required/>
                          <input type="hidden" name="txtTotal" value="{{ $total }}" class="form-control" placeholder="Enter Item Name" />
      
                        </div>
                  </div>
                  
                   

                   
                    
              
                  </div>
                 </div>
                

              
               
              
               
              </div>
            </div>
          
            <div class="modal-footer">
              
        
              <button type="button" class="btn btn-danger" onclick="adjust_body()" data-dismiss="modal">Close</button>
              <button type="submit"  class="btn btn-primary">Purchase</button>
            </div>
          </form>
        
            
          </div>
        </div>
      </div>

    </div>

  

    
 
@endsection


@section('scripts')
 


    <script type="text/javascript">
 
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-cart') }}',
                type: 'POST',
               data: {_method:'patch',_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

      
 
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                     type: 'POST',
                    data: {_method: 'delete',_token: '{{ csrf_token() }}', id: ele.attr("data-id")},

                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
 
    </script>

@if(isset(Auth::user()->id))
      
<div class="container">
    <div class="row">

        <div class="col-sm-5">
            <a href="{{ url('/') }}" class="btn btn-danger" style="width:250px"><i class="fa fa-angle-left"></i> Continue Shopping</a>
        
        </div>


<div class="col-sm-5">



  <form role="form" action="{{ route('stripe.post') }}" method="post" id="payment-form">
 {{ csrf_field() }}

<div class="row">
<div class="col-xs-12">
<button class="btn btn-primary" type="submit">Order Now</button>
</div>
</div>

</form>

</div>


    </div>

@else


<div class="row">

  <div class="col-sm-5">
    
      <a href="{{ url('/') }}" class="btn btn-danger" style="width:250px"><i class="fa fa-angle-left"></i> Continue Shopping</a>
  
  </div>


<div class="col-sm-5">
  <p class="btn-holder"><a href="{{ url('/login') }}" class="btn btn-primary text-center"  width="30px" role="button">Purchase</a> </p>

  

</div>


</div>




@endif
</div>

@endsection