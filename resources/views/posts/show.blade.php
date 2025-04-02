
@extends('layout.app')

@section('content')
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-4 text-center text-primary my-4 ">Nuevos Posts</h1>
    </div>
    <div class="container">
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="jumbotron-fluid bg-secondary text-white">
                    <div class="container">
                        <h1 class="display-4">{{ $post['title'] }}</h1>
                        <p class="lead">{{ $post['contenido'] }}</p>
                    </div>
                </div>
            @endforeach
        @else
            <p>No hay posts aún.</p>
        @endif
    
        <a href="{{ route('posts.create') }}" class="btn btn-primary"><i class="bi bi-arrow-return-left"></i>Crear Otro Post</a>
    </div>
 @endsection
