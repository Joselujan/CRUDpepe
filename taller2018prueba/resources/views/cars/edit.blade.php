@extends('cars.layout')

@section('content')
    <h1 class="text-center">Editar Parqueos</h1>
    <hr>
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="container mb-5" >
        <form action="{{ route('cars.update',$car->id_car) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Numero de placa:</strong>
                        <input type="text" name="plate_number" value="{{ $car->plate_number }}" class="form-control" placeholder="placa del vehiculo">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Color:</strong>
                        <input type="text" name="color" value="{{ $car->color }}" class="form-control" placeholder="colo del vehiculo">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Fecha de registro:</strong>
                        <input type="text" name="car_reg_date" value="{{ $car->car_reg_date }}" class="form-control" placeholder="fecha de registro">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Tipo de automovil:</strong>
                        <input type="text" name="car_type" value="{{ $car->car_type }}" class="form-control" placeholder="Tipo de vehiculo">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Modelo:</strong>
                        <input type="text" name="model" value="{{ $car->model }}" class="form-control" placeholder="Anio de modelo">
                    </div>
                </div>



                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary mb-5">Enviar</button>
                </div>
            </div>

        </form>
    </div>

@endsection