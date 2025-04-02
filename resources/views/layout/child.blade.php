<!-- @extends('namespace::layout.app') -->
@extends('layout.app')

@section('title', 'Pagina hijo')

@section('content')
    <h1>Contenido de la pagina hijo</h1>
    <p>Este es el contenido de la pagina hijo</p>
    <p>Este es el contenido de la pagina hijo</p>
    <p>Este es el contenido de la pagina hijo</p>
    <p>Este es el contenido de la pagina hijo</p>
    <h3>hola {{$name}}{{$lastname}}
        su edad es {{$age}} años
    </h3>

    @component('components.alert')
    
        <p>Este es el contenido del alert</p
    @endcomponent
    
@endsection

