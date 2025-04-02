<div {{ $attributes->merge(['class' => 'alert alert-'.$type]) }}>
    <h2>Este es mi componente de alert</h2>
    <h3>Tipo de alerta {{ $type }}</h3>
    <h2>Nombre {{ $name }}</h2>
    @foreach ($languages ('PHP') as $languages)
        <h2>Lenguaje {{ $languages }}</h2>
    @endforeach
    <h4>Lenguaje {{ $language }}</h4>

   
    
</div>