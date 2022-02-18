@extends('layout.app')
@section('content')
{{-- @role('Admin') --}}
<div class="parallax-container mt-0">
    <div class="parallax-index">
        <br><br><br>
        <div class="card-panel bg-light w-50 m-auto  rounded h-auto">
            <h2 class="header center-align">Delete car {{$dropCar->brand}} {{$dropCar->model}} </h2>
            <div class="row center container mx-auto">
                <div class="card #ff8f00 amber darken-3 mx-auto">
                    <form action="{{ route('cars.destroy', $dropCar->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="card-content white-text">
                            <span for="delete" class="card-title">Are you sure you want to delete this car?</span>
                        </div>
                        <div class="card-action">
                            <button typ="submit" class="waves-effect waves-light btn orange lighten-3 black-text ">Delete</button>
                            <a href="/cars/{{$dropCar->id}} "
                                class="waves-effect waves-light btn blue lighten-3 black-text ">Go back</a>
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