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
                    <h2 class="center-align">Edit car {{$car->brand}} {{$car->model}}</h2>
                </div>
                <div class="card-body">
                    <form action="/cars/{{$car->id}}" method="POST" enctype="multipart/form-data" class="w-100" >  
                        @csrf
                        @method('put')
                        <div class="row ">
                            <div class="input-field col s6">
                                <input placeholder="Mazda" id="brand" name="brand" type="text" class="validate" value="{{$car->brand}}">
                                <label for="brand">Brand</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="5" id="model" name="model" type="text" class="validate" value="{{$car->model}}">
                                <label for="model">Model</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                            <input placeholder="Compact car" id="category" name="category" type="text" class="validate"  value="{{$car->category}}">
                            <label for="category">Category</label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="input-field col s6">
                                <input placeholder="Blue" id="color" name="color" type="text" class="validate"  value="{{$car->color}}">
                                <label for="color">Color</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="2010" id="year" name="year" type="number" class="validate"  value="{{$car->year}}">
                                <label for="year">Year</label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="input-field col s4">
                                <input placeholder="5000 US" id="price" name="price" type="number" class="validate"  value="{{$car->price}}">
                                <label for="price">Price</label>
                            </div>
                        
                            <div class="input-field col mt-0">
                                <label class="px-1 control-label" for="is_new">Is new?</label><br class="pt-0 pb-1 mt-0 mb-1">
                                <select name="is_new" class="form-control" id="is_new">
                                    <option disabled>Select</option>
                                    @if ($car->is_new)
                                    <option selected value="true">The car is NEW</option>
                                    <option value="false">The car is USED</option>
                                    @else
                                    <option value="true">The car is NEW</option>
                                    <option selected value="false">The car is USED</option>
                                    @endif
                                    
                                </select>  
                                                      
                            </div>
                        </div>
                        <label for="image" class="label input-field  pb-0 row mb-0 ml-2">Car image</label>
                        <div class="row mt-0 py-0">
                            <div class="input-field col s12">
                                <input class="form-control" type="file" id="image" name="image" value="{{$car->image}}">
                            </div>
                        </div>
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="waves-effect waves-light light-blue lighten-2 btn">
                                    {{ __('Edit') }}
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