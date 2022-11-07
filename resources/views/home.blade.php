@extends('layouts.app3')

@section('content')

<div class="container">

    <div class="row">

        <div style="position:absolute; height:100px; font-family: 'Times New Roman', Times, serif; font-size:120px; top:40%; width:800px; left:24%;">   </div>
              

        <div class="col-md-8 col-md-offset-2">
            
            <div class="panel panel-default">
              
     
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                
                </div>
            </div>
        </div>
    </div>
  

    </div>
</div>
@endsection
