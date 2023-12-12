<form action=" {{route

@section('titulo')
    <h1 class="display-4"> AñadirUsuario</h1>
@endsection

@section('seccion')
    @if(session('mensaje'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('mensaje')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{route('Estudiantes.xRegistrar')}}" method="POST" class="d-grid gap-2">
        @csrf

        @error('codEst')
            <div class="alert alert-danger">
                El <strong>codigo</strong> es requerido
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
            </div>
        @enderror

        @error('nomEst')
            <div class="alert alert-danger">
                El <strong>nombre</strong> es requerido
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
            </div>
        @enderror

        @if($errors->has('apeEst'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                El <strong>apellido</strong> es requerido
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <input type="text" name="codEst" placeholder="Codigo" value="{{ old('codEst')}}" class="form-control mb-2">
        <input type="text" name="nomEst" placeholder="Nombre" value="{{ old('nomEst')}}" class="form-control mb-2">
        <input type="text" name="apeEst" placeholder="Apellido" value="{{ old('apeEst')}}" class="form-control mb-2">
        <input type="text" name="dirEst" placeholder="Direccion" value="{{ old('dirEst')}}" class="form-control mb-2">
        <input type="int" name="telEst" placeholder="Telefono" value="{{ old('telEst')}}" class="form-control mb-2">
        <input type="date" name="fnaEst" placeholder="Fecha de nacimiento" value="{{ old('fnaEst')}}" class="form-control mb-2">
        <select name="turMat" class="form-select mb-2">
            <option value="">Seleccione</option>
            <option value="1">turno dia</option>
            <option value="2">turno noche</option>
            <option value="3">turno tarde</option>
        </select>
        <select name="semMat" class="form-control mb-2">
            <option value="">Seleccione</option>
            @for($i=0;$i<=7;$i++)
                <option value="{{$i}}">Semestre {{$i}}</option>
            @endfor
        </select>
        <select name="estMat" class="form-control mb-2">
            <option value="">Seleccione</option>
            <option value="0">Inactivo</i></option>
            <option value="1">Activo</i></option>
        </select>
        <button class="btn btn-dark"type="submit">Agregar</button>
    </form>

    <table class="table">
        <thead class="table-primary">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Código</th>
                <th scope="col">Apellidos y Nombres</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($xAlumnos as $item)
            <tr>
                <th scope="row">{{ $item->id}}</th>
                <td>{{ $item->codEst }}</td>
                <td>
                    <a href="{{ route('Estudiantes.xDetalle', $item->id) }}">
                        {{ $item->apeEst }}, {{ $item->nomEst }}
                    </a>
              </td>
              <td>
              <a class="btn btn-warning btn-sm" href="{{ route('Estudiante.xActualizar', $item->id) }}">
                           Actualizar 
                        </a>
</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection
