<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" 
crossorigin="anonymous"> 


@extends('layouts.app')

@section('content')
<div class="container">
    

        @if(Session::has('mensaje'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('mensaje') }}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        
        @endif





<a href="{{ url('empleado/create') }}" class="btn btn-success"  style="text-decoration:none;">
    <i class='fa fa-user-plus'></i>
</a>

<table class="table table-responsive" >
    
       
        <thead class = "thead-success">  
            <tr>
                <th>#</th>
                <th>Fotografía</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>
                    <img width="100" src="{{ asset('storage'.'/'.$empleado->Foto) }}" alt="">
                </td>
                <td>{{ $empleado->Nombre }}</td>
                <td>{{ $empleado->ApellidoPaterno }}</td>
                <td>{{ $empleado->ApellidoMaterno }}</td>
                <td>{{ $empleado->Correo }}</td>
                <td>
                    <form action="{{ url('/empleado/'.$empleado->id.'/edit') }}" method="GET" style="display:inline-block">
                        <button type="submit" class="btn btn-primary"><i class='fas fa-user-edit'></i></button>
                    </form>  
                    
                    <form action="{{ url('/empleado/'.$empleado->id) }}" method="post" style="display:inline-block">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('¿Quieres Borrar?')" 
                        value="Borrar" class="btn btn-danger"><i class='fas fa-trash-alt'></i></button>
                    </form>
                </td>
                <td></td>
            </tr>
            @endforeach 
        </tbody>


 </table>
 {!! $empleados->links() !!}
</div>
@endsection  