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
                                    <form action="{{ route('save.update') }}" method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group row">

                                            <label for="name" class="col-md-4 col-form-label text-md-right">Category</label>
                                            <div class="col-md-6">
                                                                                           
                                            <select name ="name"  id= "name" class="form-control">
                                                
                                                @foreach($cat as $row)
                                                 <option value="{{$row['name']}}">{{$row['name']}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>
                                      
                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Browse Image</label>
                                            <div class="col-md-6">
                                                <input id="profile_image" type="file" class="form-control" name="profile_image">
                                                @if (auth()->user()->image)
                                                    
                                                @endif
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Product Code</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="txtDes1"/>
                                            </div>

                                        </div>

                                            
                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Product Name</label>
                                            <div class="col-md-6">
                                               
                                                <input type="text" class="form-control" name="txtName" required/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Selling Price</label>
                                            <div class="col-md-6">
                                               
                                                <input type="text" class="form-control" name="txtPrice" required/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Unit Quantity</label>
                                            <div class="col-md-6">
                                               
                                                <input type="text" class="form-control" name="txtQty" required/>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Expire Date</label>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control"  name="txtDes2"/>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit"  class="btn btn-primary">Save</button>
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