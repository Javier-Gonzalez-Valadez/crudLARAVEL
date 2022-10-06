
@if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
@endif

<button class="btn btn-primary">
    <a href="{{ url('empleado/create') }}" class="btn btn-primary" style="text-decoration:none;">Nuevo</a>
</button>
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
                        <input type="submit" value="Editar"> 
                    </form>  
                    
                    <form action="{{ url('/empleado/'.$empleado->id) }}" method="post" style="display:inline-block">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('¿Quieres Borrar?')" 
                        value="Borrar">
                    </form>
                </td>
                <td></td>
            </tr>
            @endforeach 
        </tbody>


 </table>