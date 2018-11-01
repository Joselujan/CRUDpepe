@extends('cars.layout')

@section('content')


        <h1 class="text-center">Agregar automovil</h1>
        <hr>


    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif



    <div class="container mb-5">
        <form action="{{ route('cars.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Numero de placa:</strong>
                        <input type="text" name="plate_number" class="form-control" placeholder="Introduzca la placa del vehiculo"></input>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Color:</strong>
                        <input type="text" name="color" class="form-control" placeholder="Introduzca el color del vehiculo"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Fecha de registro:</strong>
                        <input type="text" name="car_reg_date" class="form-control" placeholder="Introduzca la fecha del registro"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Tipo de automovil:</strong>
                        <input type="text" name="car_type" class="form-control" placeholder="Introduzca el tipo de vehiculo"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Modelo:</strong>
                        <input type="text" name="model" class="form-control" placeholder="Introduzca el anio del modelo del vehiculo"></input>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">REGISTRAR</button>
                </div>
            </div>

        </form>
    </div>






@endsection


