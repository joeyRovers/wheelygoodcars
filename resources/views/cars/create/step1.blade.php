@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Step 1: Enter License Plate</h2>
    <form action="{{ route('cars.create.step1.post') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="license_plate">License Plate:</label>
            <input type="text" class="form-control" id="license_plate" name="license_plate" required>
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
</div>
@endsection