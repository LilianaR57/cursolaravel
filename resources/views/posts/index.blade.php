@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-4 text-center text-primary my-4 ">Mi blog práctica 2</h1>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/Blog.jpg') }}" class="d-block w-100" alt="Imagen 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/Blog2.jpg') }}" class="d-block w-100" alt="Imagen 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/Blog3.jpg') }}" class="d-block w-100" alt="Imagen 3">
                        </div>
                    </div>
                    
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
            <div class="col-md-6">
                <h2>¿Qué es un blog?</h2>
                <p class="text-muted" style="text-align: justify; font-family: 'Arial', sans-serif;"> Un blog es un tipo de sitio web o sección de un sitio web que se actualiza regularmente con contenido nuevo, generalmente de manera cronológica (lo más reciente aparece primero). Los blogs pueden tratar sobre una amplia variedad de temas, desde noticias, entretenimiento, tecnología, moda, hasta temas muy específicos como deportes, cocina o desarrollo personal.</p>
                <a href="{{ route('posts.create') }}" class="btn btn-primary"><i class="bi bi-file-earmark-plus"></i>Crear Nuevo Post</a>
            </div>
        </div>
    </div>

    @foreach($posts as $post)
        <li>
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        </li>
    @endforeach
@endsection


        
