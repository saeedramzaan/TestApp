@extends('layouts.app1')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                        <div align="left">
                                <a href="{{route('home')}}" class="btn btn-primary">Back</a>
                                <br />
                                <br />
                               </div>

                   
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    
                        <div class="container">
                            <div class="row">
                                <div class="col-12">

                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    
                                    <form action="{{ route('update.info') }}" method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                      
                                      
                                        @foreach($pro as $row)
                                    
                                  
                                        <div class="form-group row">

                                            <label for="name" class="col-md-4 col-form-label text-md-right">Category</label>
                                            <div class="col-md-4">
                                                                                           
<select name ="catName"  class="form-control">

    <option value="{{$row->category}}">{{$row->category}}</option>

        @foreach($cat as $catrow)
       
        <option value="{{$catrow['name']}}">{{$catrow['name']}}</option>
        
        @endforeach
       
        
      </select>
                                            </div>
                                        </div>  


                                        <div class="form-group row mb-0 mt-5">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Product Name</label>
                                            <div class="col-md-4 offset-md-4" >
                                                <input type="text" class="form-control" name="txtPname" value=" {{ $row->pname }}" />
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0 mt-5">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Selling Price</label>
                                            <div class="col-md-4 offset-md-4" >
                                                <input type="text" class="form-control" name="txtPrice" value=" {{ $row->sellingprice }}" />
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0 mt-5">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Expire Date</label>
                                            <div class="col-md-4 offset-md-4">
                                                <input type="text" class="form-control" name="txtExpire" value="{{ $row->expire_date }}"/>
                                            </div>
                                        </div>


                                

                                        <div class="form-group row mb-0 mt-5">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Price</label>
                                            <div class="col-md-4 offset-md-4">
                                                <input type="text" class="form-control" name="txtPrice" value="{{ $row->sellingprice }}" />
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-4 offset-md-4">
                                                <input type="hidden" class="form-control" name="id" value="{{ request()->get('field') }}" />
                                            </div>
                                        </div>
                                    @endforeach
                                        @if(isset($pro))

            

            
                                        @foreach($pro as $product)
                                     
                                                <input type="hidden" name="imgLink" value="{{ $product->profile_image }}" />
                                                <input type="hidden" name="pid" value="{{ $product->id }}" />
                                                <input type="hidden" name="pname" value="{{ $product->id }}" />
                                                <input type="hidden" name="oldprice" value="{{ $product->sellingprice }}" />
                                        @endforeach
                                        @endif


                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                
                                                <button type="submit" class="btn btn-primary">Update</button>
                                              
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection