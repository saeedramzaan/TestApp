

@extends('layouts.app1')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Free Issue Product Details</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Free Qty</th>
    <th>Free Product</th>
    <th>Update </th>
   </tr>
   @foreach($free_issue as $row)
   <tr>
    <td>{{$row['id']}}</td>
    <td>{{$row['product_name']}}</td>
    <td>{{$row['qty']}}</td>
    <td>{{$row['free_qty']}}</td>
    <td>{{$row['free_product']}}</td>
    <td><a href = 'free_update/{{$row['id']}}'>Edit</a></td>
    
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

