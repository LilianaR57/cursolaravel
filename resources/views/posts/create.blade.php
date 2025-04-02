@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Crear Nuevo Post</h2>
        </div>
        <div class ="card-body">
            <form action="{{route('posts.store')}}" method = "post">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label for="title">Titulo del post</label>
                    <input type = "text" name="title" id="title" class="form-control" placeholder="Titulo del post">
                </div>
                <div class="form-group">
                    <label for="contenido">Contenido</label>
                    <textarea name="contenido" id="contenido" class="form-control" placeholder="Contenido del post"></textarea>
                </div>
                <button class="btn btn-primary mt-3">
                    <i class="bi bi-save2"></i> Guardar
                </button>
                <a href="{{ route('posts.index') }}" class="btn btn-primary mt-3"><i class="bi bi-arrow-return-left"></i>Inicio</a>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


        </div>
    </div>
@endsection