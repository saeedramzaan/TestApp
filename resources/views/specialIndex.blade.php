@extends('layouts.app1')
  
 
@section('title', 'Products')
 
@section('content')

<div class="container">

        <div class="col-md-6">
                                                                                           
             
 
           
                <form method="get" action="search"/>

                @if (@isset ($cat))
                 
                <select name ="name"  id= "name" class="form-control">
                
                 @foreach($cat as $row)
                
                 <option value="{{$row['name']}}">{{$row['name']}}</option>
                 
                 @endforeach
                
                </select>
                
                
                @endif
                
              
                  </form>   
                                                            </div>
 
 
</div>
 
<div class="container page">
    @yield('content')
</div>
 
@yield('scripts')



<div class="row">



 
    <div class="container products">

        <select id='sel_depart' name='sel_depart'>
            <option value='0'>-- Select Category --</option>
            
      
            <!-- Read Departments -->
            @foreach($departmentData['data'] as $department)
              <option value='{{ $department->name }}'>{{ $department->name }}</option>
            @endforeach
     
         </select>

         
 
        <div class="row">
            <br>
            <br>
            <div id ='test'> <div id='sel_emp' name='sel_emp'>
                <option value='0'></option>
             </div>
            </div>

        



        
        </div><!-- End row -->
 
    </div>
 
@endsection
 

<!DOCTYPE html>
<html>
   <head>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   </head>
   <body>


     <!-- Department Dropdown -->
 

    
    
    <!-- Department Employees Dropdown -->
   

    <!-- Script -->
    <script type='text/javascript'>

    $(document).ready(function(){

      // Department Change
      $('#sel_depart').change(function(){

         // Department id
         var id = $(this).val();

         // Empty the dropdown
         $('#sel_emp').find('option').not(':first').remove();

         // AJAX request 
         $.ajax({
           url: 'getEmployees1/'+id,
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
               for(var i=0; i<len; i++){

                 var id = response['data'][i].id;
                 var pname = response['data'][i].pname;
                 var des2 = response['data'][i].des2;
                 var des3 = response['data'][i].des3;
                 var imgLink = response['data'][i].profile_image;

                 var red = "white";

                 var option = "<div style='background-color:"+red+"; border-style: solid; border-width: 5px; width:320px ; height:350px; display:block;  padding: 10px;  margin-left:50px; margin-bottom:50px; text-align: justify;' class='col-md-12'><br>"+pname+" <br> <br><br><p id='b'></p> <p class='btn-holder'><a style='color:black' href='updateSpecial?field="+id+"' class='btn btn-warning btn-block text-center' role='button'>Add Special Offer</a><label style='color:black' ><br>"+pname+"</label><br><img width='128px' src='storage/"+imgLink+"'><br></p></p><div id='d1'></div> </div>"; 

               
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

    function myFunction() {
                                
                                var a = 100;
                            var b = 50;
               
                            var x = document.getElementById('btn').value;
                            document.getElementById('d1').innerHTML = "23";

                            }


    </script>
  </body>
</html>