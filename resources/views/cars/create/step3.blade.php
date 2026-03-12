@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Step 3: Enter Price and Other Details</h2>
    <form action="{{ route('cars.create.step3.post') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="mileage">Mileage:</label>
            <input type="number" class="form-control" id="mileage" name="mileage" required>
        </div>
        <div class="form-group">
            <label for="color">Color:</label>
            <input type="text" class="form-control" id="color" name="color">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection