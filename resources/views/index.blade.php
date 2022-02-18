@extends('layout.app')
@section('content')
{{-- @hasanyrole('Admin|Vendedor') --}}
<div class="parallax-container mt-0">
    <div class="parallax-index">
        <br><br><br>
        <div class="bg-light col-sm-6 col-md-4 m-auto p-4 rounded">
            <p class="text-center" style="font-family: MarkingPen; color:#f7941d; font-size: 8vh">Car Dealership</p>
            <p class="text-center" style="font-family: MarkingPen; color:#f7941d; font-size: 6vh">This is where you can find the best</p>

        </div>
    </div>
</div>
<div class="section container">
    <br><br>
    <div class="row">
        <div class="col-md-4">
            <h1>New Cars</h1>
            <br>
            <p>
                Find cars for sale, local dealers, and advice. Also, our price-badging and price-drop notifications keep you informed of potential deals.
            </p>
        </div>
        <div class="col-md-8">
            <img src="images/new-cars.jpg" alt="new-cars"  class="w-100">
        </div>
        <br><br><br><br>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <img src="images/used_cars.jfif" alt="used-cars" class="w-100">
        </div>
        <br><br>
        <div class="col-md-6 ">
            <h1>Used cars</h1>
            <br>
            <p>
                Search for used cars at carmax.com. Use our car search or research makes and models with customer reviews, expert reviews, and more.
            </p>

        </div>
    </div>
</div>
<br><br><br>
<div class="parallax-container mt-0">
    <div class="parallax-index">
        <br>
        <br>
        <br>
    </div>
</div>

{{-- @else --}}
@include('components.no_auth_alert')

{{-- @endhasanyrole --}}
@endsection
