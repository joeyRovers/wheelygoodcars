@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Step 2: Enter Car Details</h2>
    <form action="{{ route('cars.create.step2.post') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="brand">Brand:</label>
            <input type="text" class="form-control" id="brand" name="brand" required>
        </div>
        <div class="form-group">
            <label for="model">Model:</label>
            <input type="text" class="form-control" id="model" name="model" required>
        </div>
        <div class="form-group">
            <label for="production_year">Production Year:</label>
            <input type="number" class="form-control" id="production_year" name="production_year" required>
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
</div>
@endsection