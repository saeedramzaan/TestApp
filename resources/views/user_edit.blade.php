@extends('layouts.app1')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                        <div align="left">
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
                                    
                                    <form action="{{ route('user.update' , $id) }}" method="POST" role="form" enctype="multipart/form-data">
                                      
                                        {{ csrf_field() }}

                                        <div class="form-group row">

                                            
                                            <div class="col-md-6">
          
                                            </div>
                                        </div>
                                        {{-- @foreach($users as $row) --}}

                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">User ID</label>
                                            <div class="col-md-6">
                                                <label for="profile_image" class="col-md-4 col-form-label text-md-right">{{ $users->id }}</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">User Name</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="txtName" value="{{ $users->name }}" required/>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Email</label>
                                            <div class="col-md-6">
                                               
                                                <input type="text" class="form-control" name="txtEmail" value="{{ $users->email }}" required/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Contact No</label>
                                            <div class="col-md-6">
                                               
                                                <input type="text" class="form-control" name="ContactNo" value="{{ $users->contact_no }}" required/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Address</label>
                                            <div class="col-md-6">
                                               
                                                <input type="text" class="form-control" name="txtAddress" value="{{ $users->address }}" required/>
                                            </div>
                                        </div>
                                       

                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                <input type="hidden" name="id" value="{{ request()->get('field') }}" />
                                            </div>
                                        </div>
                                        {{-- @endforeach --}}

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