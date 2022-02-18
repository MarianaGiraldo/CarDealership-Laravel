<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cars.index', ['cars'=>Car::all(), 'bg'=>'bg1.jpg']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create', ['cars'=>Car::all(), 'bg'=>'bg1.jpg']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        // Validates form fields
        $validation = $request->validate([
            'brand'=>['required', 'string', 'max:255'],
            'model'=>'required',
            'year'=>['required', 'integer'],
            'category'=>['required', 'string'],
            'price'=>['required', 'integer'],
            'image'=>'required',
        ]);

        // Creates a new car from the request parameters.
        $car = new Car();
        $car ->brand = $request->get('brand');
        $car ->model = $request->get('model');
        $car ->year = $request->get('year');
        $car ->category = $request->get('category');
        $car ->price = $request->get('price');

        // Process image to store in database
        $photo = $request->file('image');
        $filename = time() . '.' . $photo->getClientOriginalExtension();
        $destino=public_path('imagenes/cars/');
        $request->image->move($destino, $filename);
        $car ->imagen = $filename;
        
        $car -> save();
        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  Car $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cars.show', [
            'car'=>Car::findOrFail($id),
            'cars'=>Car::all(),
            'bg'=>'bg1.jpg']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Car $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit', ['car'=>$car, 'bg'=>'bg1.jpg']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $carUpdt =  Car::find($id);
        $carUpdt ->brand = $request->get('brand');
        $carUpdt ->model = $request->get('model');
        $carUpdt ->year = $request->get('year');
        $carUpdt ->category = $request->get('category');
        $carUpdt ->price = $request->get('price');

        // Process image to store in database
        $photo = $request->file('image');
        $filename = time() . '.' . $photo->getClientOriginalExtension();
        $destino=public_path('imagenes/cars/');
        $request->image->move($destino, $filename);
        $carUpdt ->imagen = $filename;
        
        $carUpdt -> save();
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Car $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::destroy($id);
        return redirect('/cars');
    }

    /**
     * Ask if is sure to delete the car
     *
     * @param  Car $id
     * @return \Illuminate\Http\Response
     */
    public function drop($id)
    {
        $dropCar = Car::find($id);
        return view('cars.drop', ['dropCar'=>$dropCar, 'bg'=>'bg1.jpg']);
    }
}
