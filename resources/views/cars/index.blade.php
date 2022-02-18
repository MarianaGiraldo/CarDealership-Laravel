@extends('layout.app')
@section('content')
{{-- @role('Admin') --}}
<div class="parallax-container mt-0">
    <div class="parallax-index">
        <br><br><br>
        <div class="bg-light col-6 col-md-4 m-auto p-4 rounded">
            <p class="text-center" style="font-family: MarkingPen; color:#f7941d; font-size: 8vh">Car Dealership</p>
            <p class="text-center" style="font-family: MarkingPen; color:#f7941d; font-size: 6vh">These are the
                available cars...</p>
            <div class="container row">
                <p class="p-2 ml-5 text-center col" style="font-family: MarkingPen; color:#f7941d; font-size: 4vh">Add a new car</p>
                <a class="btn-floating btn-large waves-effect waves-light light-blue lighten-2 "
                    style="width: 4rem; height:4rem;" href="cars/create"><i class="material-icons large"
                        style="font-size: 3rem">add</i></a>
            </div>
        </div>

    </div>
</div>
<div class="section containe bg-lightr">
    <div class="col-sm-12 m-auto p-1 rounded">
        <h2 class="mt-1 mx-4 center center-align sticky-top p-3 bg-light"> Available Cars</h2>
        <div class="row w-80 p-3 mx-auto">
            @foreach($cars as $car)
            <div class="card col-lg-4 col-sm-11">
                <img src="images/cars/{{$car->image}}" class="card-img-top" alt="{{$car->brand}} {{$car->model}}">
                <div class="card-body">
                    <h5 class="card-title">{{$car->brand}} {{$car->model}}</h5>
                    <p class="card-text">Year: {{$car->year}} <br>
                        Price: $ {{$car->price}} US <br>
                        New o used?:
                        @if ($car->is_new)
                        The car is New!
                        @else
                        The car is used.
                        @endif
                    </p>
                    <a href="/cars/{{$car->id}}"
                        class="secondary-content waves-effect waves-light btn-small btn-success">View</a>
                </div>
            </div>
            @endforeach

        </div>

    </div>
    <div class="container float-right">
        <a class="btn-floating btn-large waves-effect waves-light light-blue lighten-2 right py-2"
            style="width: 4rem; height:4rem;" href="cars/create"><i class="material-icons large"
                style="font-size: 3rem">add</i></a>
    </div>
</div>

{{-- @else --}}
{{-- @include('components.no_auth_alert') --}}
{{-- @endrole --}}
@endsection
