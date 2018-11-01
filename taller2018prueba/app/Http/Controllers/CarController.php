<?php

namespace joselujan\Http\Controllers;

use joselujan\Car;
use Illuminate\Http\Request;
use joselujan\Cars;
use Session;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $parkings =  Parking::orderBy('id','ASC')->paginate(2);
        //return view('parkings.index',compact('parkings'));
        $cars = Car::orderBy('id_car','ASC')->paginate(2);
        return view('cars.index',compact('cars'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //crear
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //almacenar
        $request->validate([
            'plate_number'=> 'required',
            'color' => 'required',
            'car_reg_date' => 'required',
            'car_type' => 'required',
            'model' => 'required',

        ]);
        Car::create($request->all());
        Session::flash('message','Se registro exitosamente');
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \joselujan\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id_car)
    {
        //mosrtrar
        $car = Car::find($id_car);
        return view('cars.show',compact('car'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \joselujan\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //editar
        return view('cars.edit',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \joselujan\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        // actualizar
        $request->validate([
            'plate_number'=> 'required',
            'color' => 'required',
            'car_reg_date' => 'required',
            'car_type' => 'required',
            'model' => 'required',

        ]);
        $car->update($request->all());
        Session::flash('message','Vehiculo actualizado correctamente');
        return redirect()->route('cars.index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \joselujan\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_car)
    {
        //borrar
        $car= Car::find($id_car);
        $car->delete();
        return back()->with('info','el producto fue eliminado');
        $car->delete();
        Session::flash('message','Vehiculo eliminado');
        return redirect()->route('cars.index');
    }
}


