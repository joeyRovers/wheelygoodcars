<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    public function createStep1()
    {
        return view('cars.create.step1');
    }

    public function postCreateStep1(Request $request)
    {
        $request->validate([
            'license_plate' => 'required|string|max:255',
        ]);

        $car = new Car();
        $car->license_plate = $request->license_plate;
        Session::put('car', $car);

        return redirect()->route('cars.create.step2');
    }

    public function createStep2()
    {
        $car = Session::get('car');

        return view('cars.create.step2', compact('car'));
    }

    public function postCreateStep2(Request $request)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'production_year' => 'required|integer',
        ]);

        $car = Session::get('car');
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->production_year = $request->production_year;
        Session::put('car', $car);

        return redirect()->route('cars.create.step3');
    }

    public function createStep3()
    {
        $car = Session::get('car');

        return view('cars.create.step3', compact('car'));
    }

    public function postCreateStep3(Request $request)
    {
        $request->validate([
            'price' => 'required|numeric',
            'mileage' => 'required|integer',
            'color' => 'nullable|string|max:255',
        ]);

        $car = Session::get('car');
        $car->price = $request->price;
        $car->mileage = $request->mileage;
        $car->color = $request->color;
        $car->user_id = auth()->id();
        $car->save();

        Session::forget('car');

        return redirect()->route('cars.index')->with('success', 'Car has been added successfully.');
    }
}