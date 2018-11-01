@extends('cars.layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            listado de automoviles
            <!--a href="{{ route('cars.create') }}" class="btn btn-primary pull-right">Nuevo</a-->
            <a class="btn btn-success mb-3" href="{{ route('cars.create')  }}">NUEVO</a>
        </h2>

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">id_car</th>
                <th scope="col">Numero de la placa</th>
                <th scope="col">Color</th>
                <th scope="col">Fecha de registro</th>
                <th scope="col">Tipo de auto</th>
                <th scope="col">Modelo</th>
                <th scope="col">Acciones/th>

            </tr>
            </thead>
            <tbody>

            @foreach($cars as $car)

             <tr>
`                   <th scope="row">{{ $car->id_car}}</th>
                    <td>{{ $car->plate_number}}</td>
                    <td>{{ $car->color }}</td>
                    <td>{{ $car->car_reg_date }}</td>
                    <td>{{ $car->car_type}}</td>
                    <td>{{ $car->model}}</td>
                 <td><a class="btn btn-info mb-1" href="{{ route('cars.edit', $car->id_car) }}">Editar</a></td>

                 <td>

                     <form action="{{ route('cars.destroy', $car->id_car) }}" method="POST">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-danger" onclick="return confirm('segur desea eliminar?')">Borrar</button>
                     </form>
                 </td>


                <td>
                   <a href="{{ route('cars.show',$car->id_car) }}">ver</a>
                </td>

                <td>
                    <a href="{{ route('cars.edit',$car->id_car) }}">editar</a>
                </td>

                <td >
                    <a href="{{ route('cars.destroy',$car->id_car) }}">borrar</a>
                </td>
             </tr>

            @endforeach
            </tbody>
        </table>
        {!! $cars->render() !!}
    </div>
    <div class="col-sm-4">
        mensaje
    </div>
@endsection
