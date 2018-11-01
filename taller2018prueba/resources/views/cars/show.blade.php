@extends('cars.layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            {{$car->id_car}}
            <a href="{{ route('cars.index') }}" class="btn btn-default">editar</a>
        </h2>
        <p>
            {{$car->plate_number}}
        </p>
        <p>
            {{$car->color}}
        </p>
        <p>
            {{$car->car_reg_date}}
        </p>
        <p>
            {{$car->car_type}}
        </p>
        <p>
            {{$car->model}}
        </p>

    </div>
    <div class="col-sm-4">
        mensaje
    </div>
@endsection
