

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
   <a href="{{route('free_issue.create')}}" class="btn btn-primary">Add</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>User Name</th>
    <th>User Email</th>
    <th>User Contact</th>
    <th> Update </th>
   </tr>
   @foreach($users as $row)
   <tr>
    <td>{{$row['name']}}</td>
    <td>{{$row['email']}}</td>
    <td>{{$row['contact_no']}}</td>
    <td><a href = 'update/{{$row['id']}}'>Edit</a></td>
    
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

