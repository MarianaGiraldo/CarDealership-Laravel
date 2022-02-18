@extends('layout.app')
@section('content')
{{-- @role('Admin') --}}
<p class="hidden">{{$bg = "bg1.jpg"}}</p>
<div class="parallax-index h-100">
    <br>
    @if($errors->any())
    <div class="w-75 mx-auto" >
        <div class="alert alert-danger  my-1" role="alert"> Error! car not saved! </div>
        <ul class="list-group-flush" >
            @foreach( $errors->all() as $error)
            <li class="list-group-item list-group-item-danger">{{$error}} </li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="center-align">Create a car</h2>
                </div>
                <div class="card-body">
                    <form action="/cars" method="POST" enctype="multipart/form-data" class="w-100" >  
                        @csrf          
                        <div class="row ">
                            <div class="input-field col s6">
                                <input placeholder="Mazda" id="brand" name="brand" type="text" class="validate">
                                <label for="brand">Brand</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="5" id="model" name="model" type="text" class="validate">
                                <label for="model">Model</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                            <input placeholder="500" id="category" name="category" type="number" class="validate">
                            <label for="category">Category</label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="input-field col s6">
                                <input placeholder="Blue" id="color" name="color" type="text" class="validate">
                                <label for="color">Color</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="2010" id="year" name="year" type="text" class="validate">
                                <label for="year">Year</label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="input-field col s3">
                                <input placeholder="Mazda" id="brand" name="brand" type="text" class="validate">
                                <label for="brand">Brand</label>
                            </div>
                            <div class="input-field col s3">
                                <input placeholder="5" id="model" name="model" type="text" class="validate">
                                <label for="model">Model</label>
                            </div>
                        
                            <div class="input-field col s6">
                                <select name="is_new" class="form-control" id="is_new">
                                    <option selected disabled>Select</option>
                                    <option value="true">The car is NEW</option>
                                    <option value="false">The car is USED</option>
                                </select>  
                                                      
                            </div>
                        </div>
                        <label for="image" class="label input-field  pb-0 row mb-0 ml-2">Car image</label>
                        <div class="row mt-0 py-0">
                            <div class="input-field col s12">
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                        </div>
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="waves-effect waves-light light-blue lighten-2 btn">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @else
@include('components.no_auth_alert')
@endrole --}}
@endsection