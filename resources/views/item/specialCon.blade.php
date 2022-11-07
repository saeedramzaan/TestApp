

@extends('layouts.app1')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Item Details</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  
  <div align="right">
   <a href="{{route('browse.spe')}}" class="btn btn-primary">Add</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>Item Name</th>
    <th>Item Price</th>
    <th> Delete </th>
   </tr>
   @foreach($items as $row)
   <tr>
    <td>{{$row['pname']}}</td>
    <td>{{$row['newprice']}}</td>
    <td><a href = 'deleteSpecial/{{$row['sid']}}'>Delete</a></td>
    
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

