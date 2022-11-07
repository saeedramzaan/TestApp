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
                                    
                                    <form action="{{ route('free.update', $id) }}" method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group row">

                                          
                                        </div>
                                        {{-- @foreach($pro as $product) --}}
                                        <div class="form-group row mb-0 mt-5">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Product Name</label>
                                            <div class="col-md-4 offset-md-4">
                                                <input type="text" class="form-control" name="txtName" value="{{ $free_issue->product_name }}" />
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0 mt-5">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Type</label>
                                            <div class="col-md-4 offset-md-4">
                                                <input type="text" class="form-control" name="txtType" value="{{ $free_issue->type }}" />
                                            </div>
                                        </div>
                                        {{-- @endforeach --}}

                                        <div class="form-group row mb-0 mt-5">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Free Product</label>
                                            <div class="col-md-4 offset-md-4">
                                                <select class="form-control" name="txtFreePro" id="txtFreePro">
                                                    <option value="FreePro1">Free Pro1</option>
                                                    <option value="FreePro2">Free Pro2</option>
                                                    <option value="FreePro3">Free Pro3</option>
                                                    <option value="FreePro4">Free Pro4</option>
                                                  </select>
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row mb-0 mt-5">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Purchase Quantity</label>
                                            <div class="col-md-4 offset-md-4">
                                                <input type="text" class="form-control" name="txtPQty" value="{{ $free_issue->qty }}" />
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0 mt-5">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Free Quantity</label>
                                            <div class="col-md-4 offset-md-4">
                                                <input type="text" class="form-control" name="txtFQty" value="{{ $free_issue->free_qty }}" />
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0 mt-5">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Lower Limit</label>
                                            <div class="col-md-4 offset-md-4">
                                                <input type="text" class="form-control" name="txtLlimit" value="{{ $free_issue->lower_limit }}" />
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0 mt-5">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Upper Limit</label>
                                            <div class="col-md-4 offset-md-4">
                                                <input type="text" class="form-control" name="txtUlimit" value="{{ $free_issue->upper_limit }}" />
                                            </div>
                                        </div>

                  

                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                <input type="hidden" name="id" value="{{ request()->get('field') }}" />
                                            </div>
                                        </div>
                                        {{-- @if(isset($pro))

            

            
                                        @foreach($pro as $product)
                                     
                                                <input type="hidden" name="imgLink" value="{{ $product->profile_image }}" />
                                        
                                                <input type="hidden" name="pid" value="12" />
                                                <input type="hidden" name="pname" value="{{ $product->pname }}" />
                                                <input type="hidden" name="oldprice" value="{{ $product->sellingprice }}" />
                                        @endforeach
                                        @endif --}}


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