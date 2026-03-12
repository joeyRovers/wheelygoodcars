@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $car->brand }} {{ $car->model }}</h2>
    <p>License Plate: {{ $car->license_plate }}</p>
    <p>Price: ${{ $car->price }}</p>
    <p>Mileage: {{ $car->mileage }} km</p>
    <p>Color: {{ $car->color }}</p>
    <p>Production Year: {{ $car->production_year }}</p>
    <p>Seats: {{ $car->seats }}</p>
    <p>Doors: {{ $car->doors }}</p>
    <p>Weight: {{ $car->weight }} kg</p>
    <p>Views: {{ $car->views }}</p>
</div>
@endsection