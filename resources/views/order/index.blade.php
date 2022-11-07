

@extends('layouts.app1')

@section('content')

<div class="row">
 <div class="col-md-12">
 


  <div class="container products">

    
   

    <h1><center> Order Filter <center></h1>


   <div class="row">
       
       
       <form method="post" action="{{url('orderSum')}}">
       <div class ="col-md-3">

      
            {{csrf_field()}}

       <label for="">From</label>
       <input type="date" name="first_name" class="form-control" value="" placeholder="Enter First Name" />
          
       </div>

       <div class ="col-md-3">
       <label for="">To</label>
       <input type="date" name="last_name" class="form-control" value="" placeholder="Enter Last Name" />
       </div>

    

       <div class ="col-md-3">
       <br>
        <input type="submit" class="btn btn-primary" value="Search" />
       </div>
    
    </form>

     
     

 

  


 





   
   </div><!-- End row -->

</div>



  <table class="table table-bordered table-striped">
   <tr>
       <th> Order ID</th>
       <th> Cus ID </th>
       <th> Cus Name </th>
    <th>Item Name</th>
    <th>Item Price</th>
  
   </tr>
   @foreach($orders as $row)
   <tr>
        <td>{{$row['order_id']}}</td>
        <td>{{$row['user_id']}}</td>
    <td>{{$row['user_name']}}</td>
    <td>{{$row['item_name']}}</td>
    <td>{{$row['tot']}}</td>

     </form>
    </td>
   </tr>
   @endforeach
  </table>



   
   

 </div>
</div>
<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
@endsection

<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>

