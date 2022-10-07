<!--AGREGANDO ICONO-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" 
crossorigin="anonymous">

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
    
    </br>

    <button type="submit" class="btn btn-primary" value="{{ $modo }}">
        <i class='fa fa-user-check'></i>
    </button>

    <a href="{{ url('empleado/') }}" class="btn btn-warning" style="text-decoration:none;">
        <i class='fa fa-arrow-left'></i>
    </a>
</div>
        