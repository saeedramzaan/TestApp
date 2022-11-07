@extends('layouts.app3')
  
 
@section('title', 'Products')
 
@section('content')

<div class="container">

        <div class="col-md-6">
                                                                                           
             
 
           
                 
                                                            </div>
 
 
</div>
 
<div class="container page">
    @yield('content')
</div>
 
@yield('scripts')



<div class="row">



 
    <div class="container products">

    
      <br>

         <h1><center> Order Filter <center></h1>
 <br>
 
        <div class="row">
            <br>
            <br>
            <div class ="col-md-3">

            <label for="">From</label>
            <input type="date" class="form-control" id="from" name="From">
               
            </div>

            <div class ="col-md-3">
            <label for="">To</label>
            <input type="date" class="form-control" id="to" name="To">
            </div>
         

            <div class ="col-md-3">
            <label for="">Member Type</label>
        <select id='type' class="form-control" name='type'>
          <option value='0'>-- Select Member Type --</option>
       

          <option value='in'>Internal</option>
          <option value='ex'>External</option>
       

    
          <!-- Read Departments -->
     
   
       </select>
      </div>
          

      

       
    

      


        <div id='sel_emp' name='sel_emp'>
        <option value='0'></option>
     </div>
    

        
        </div><!-- End row -->
 
    </div>
 
@endsection
 



<!DOCTYPE html>
<html>
<head>
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
</style>
</head>
<body>

<h2>Styling Tables</h2>

<table style=" border: 1px solid black;
border-collapse: collapse;">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
</table>
<br>

<table id="t01">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
</table>

</body>
</html>


     <!-- Department Dropdown -->
 
    
    
    
    <!-- Department Employees Dropdown -->
    

    <!-- Script -->
    <script type='text/javascript'>

    $(document).ready(function(){

      // Department Change
      $('#type').change(function(){

         // Department id
        

         var from = $('#from').val();
         
     //    var id = $(this).val();
         
         var to = $('#to').val();

         var ty = $('#type').val();
         
      //   var ty = $('#ty').val();

         // Empty the dropdown
         $('#sel_emp').find('option').not(':first').remove();

         // AJAX request 
         $.ajax({

           url: 'getOrderfilter/'+ty+"/"+from+"/"+to,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
             if(response['data'] != null){
               len = response['data'].length;
             }
            
             if(len > 0){
               // Read data and create <option >
                    $("#sel_emp").html('');

                    

                 

                      var i = 0;



    var newhtml = "<br><br><table class='table' border=1><tr><th>ID</th><th>Name</th><th>Customer ID</th><th>Customer Name</th><th>Item Price</th><th>Address</th><th>Date</th>"
 
  //  document.write(newhtml);
    $("#sel_emp").append(newhtml);

               for(var i=0; i<len; i++){

                 var id = response['data'][i].order_id;
                 var name = response['data'][i].item_name;
                 var cus_id = response['data'][i].user_id;
                 var cus_name = response['data'][i].user_name;
                 var item_price = response['data'][i].item_price;
                 var address = response['data'][i].address;

                 var date = response['data'][i].created_at;
                 


                // var option = "<div style='background-color:transparent; border-style: solid; border-width: 5px; width:320px ; height:350px; display:block;  padding: 10px;  margin-left:50px; margin-bottom:50px; text-align: justify;' class='col-md-12'><br>"+name+" <br> <img src='storage/"+image+"' width='150' height='150'><br><br> <p class='btn-holder'><a href='browse?field="+id+"' class='btn btn-warning btn-block text-center' role='button'>Update Image</a> </p> </div>"; 
 
          var option ="<tr ><td>"+id+"</td><td>"+name+"</td><td>"+cus_id+"</td><td>"+cus_name+"</td><td>"+item_price+"</td><td>"+address+"</td><td>"+date+"</td></tr></table>";
      
                 $("#sel_emp").append(option);
                
                 
               }
               
             }

           }
        });
      });

         
  $("#button").click(function () {
   //only the content inside of the element will be deleted
   $("#sel_emp").html('');
  });

    });




    </script>
  </body>

 
</html>


<style>

  table, th, td {

    table-layout: auto;
    border: 1px solid black;
    border-collapse: collapse;
    width: 180px;
    text-align: "center";
   
  }
  
  th, td {
    
    table-layout: auto;
    text-align: center;
    width:180px;

  }

      </style>