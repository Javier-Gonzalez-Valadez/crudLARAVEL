<!--Llave de seguridad que solicita LARAVEL-->
    <h1>{{$modo}} empleado</h1>
    @csrf 
    <input type="text" name="Nombre" id="Nombre" placeholder="Nombre" 
    value="{{ isset($empleado->Nombre)? $empleado->Nombre :'' }}" autofocus><br/>

    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" placeholder="Apellido Paterno"
    value="{{  isset($empleado->ApellidoPaterno)? $empleado->ApellidoPaterno :''  }}"><br/>

    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" placeholder="Apellido Materno"
    value="{{  isset($empleado->ApellidoMaterno)? $empleado->ApellidoMaterno :''  }}"><br/>

    <input type="text" name="Correo" id="Correo"  placeholder="Correo"
    value="{{  isset($empleado->Correo)? $empleado->Correo :''  }}"><br/>
   
    
    <input type="file" name="Foto" id="Foto" placeholder=""
    value="{{ isset($empleado->Foto)? $empleado->Foto :''   }}"><br/>
    @if(isset($empleado->Foto))
    <img width="200" src="{{ asset('storage'.'/'.$empleado->Foto) }}" alt=""><br/>
    @endif
    <input type="submit" value="{{ $modo }}">

    <button class="btn btn-primary">
        <a href="{{ url('empleado/') }}" class="btn btn-primary" style="text-decoration:none;">Regresar</a>
    </button>