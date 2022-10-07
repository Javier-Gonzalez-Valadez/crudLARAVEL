<!--Llave de seguridad que solicita LARAVEL-->
    <h1>{{$modo}} empleado</h1>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>

            @endforeach
            </ul>
        </div>
        
    @endif
<div class="form-group">
    @csrf 
    <input type="text" name="Nombre" id="Nombre" placeholder="Nombre"  
    value="{{ isset($empleado->Nombre)? $empleado->Nombre : old('Nombre') }}" autofocus class="form-control"><br/>


    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" placeholder="Apellido Paterno"
    value="{{  isset($empleado->ApellidoPaterno)? $empleado->ApellidoPaterno : old('ApellidoPaterno')  }}" class="form-control"><br/>

 
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" placeholder="Apellido Materno"
    value="{{  isset($empleado->ApellidoMaterno)? $empleado->ApellidoMaterno : old('ApellidoMaterno')  }}
    "class="form-control"><br/>


    <input type="text" name="Correo" id="Correo"  placeholder="Correo" 
    value="{{  isset($empleado->Correo)? $empleado->Correo : old('Correo') }}"
    class="form-control"><br/>
   
    
    <input type="file" name="Foto" id="Foto" placeholder=""
    value="{{ isset($empleado->Foto)? $empleado->Foto :''   }}"
    class="form-control"><br/>


    @if(isset($empleado->Foto))
    <img width="200" src="{{ asset('storage'.'/'.$empleado->Foto) }}" alt=""><br/>
    @endif


    <input type="submit" class="btn btn-primary" value="{{ $modo }}">

    <a href="{{ url('empleado/') }}" class="btn btn-warning" style="text-decoration:none;">Regresar</a>
</div>
        