@extends('layout.app')
@section('content')
{{-- @role('Admin') --}}
<div class="parallax-container mt-0">
    <div class="parallax-index">
        <br>
        <div class="card col-6 col-md-4 m-auto pb-0 p-1 rounded">
            <img src="/images/cars/{{$car->image}}" class="card-img-top" alt="{{$car->brand}} {{$car->model}}">
            <div class="card-body my-0">
                <h5 class="card-title" style="font-weight: 700;">{{$car->brand}} {{$car->model}}</h5>
                <p class="card-text">
                    Year: {{$car->year}} <br>
                    Price: $ {{$car->price}} US <br>
                    New o used?:
                    @if ($car->is_new)
                    The car is New!
                    @else
                    The car is used.
                    @endif
                </p>
            </div>
            <div class="card-action py-0 my-0">
                <a href="/cars/{{$car->id}}/edit" class="waves-effect waves-light btn blue lighten-1">Editar</a>
                <a href="/cars/{{$car->id}}/drop" class="waves-effect waves-light btn amber lighten-1">Eliminar</a>
            </div>
        </div>
        <br>
    </div>
</div>

{{-- @else --}}
{{-- @include('components.no_auth_alert') --}}
{{-- @endrole --}}
@endsection
