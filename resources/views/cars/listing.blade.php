@extends('layouts.app')

@section('content')
<div class="container">
    <h2>All Cars</h2>
    <div class="row">
        @foreach($cars as $car)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->brand }} {{ $car->model }}</h5>
                        <p class="card-text">License Plate: {{ $car->license_plate }}</p>
                        <p class="card-text">Price: ${{ $car->price }}</p>
                        <a href="{{ route('cars.show', $car->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection