
<!-- resources/views/curso.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Matemáticas</title>
    <style>
        /* Resetear márgenes y padding de todos los elementos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilos para el cuerpo */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }

        /* Estilo para el contenedor principal */
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Título principal */
        h1 {
            text-align: center;
            color:rgb(177, 40, 16);
            margin-bottom: 20px;
        }

        /* Estilo para los subtítulos */
        h2 {
            color: #333;
            margin-bottom: 10px;
            font-size: 1.5em;
        }

        /* Estilo para los párrafos */
        p {
            font-size: 1.1em;
            line-height: 1.6;
            margin: 8px 0;
        }

        /* Estilo para los resultados de las operaciones */
        .result {
            background-color: #f9f9f9;
            border-left: 5px solid #884786;
            padding: 10px;
            margin: 10px 0;
            font-size: 1.2em;
            font-weight: bold;
        }

        /* Estilo para las operaciones */
        .operation {
            font-weight: normal;
            color: #555;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Práctica 1 {{ $nombre }}</h1>

        <h2>Resultados de las operaciones:</h2>

        <div class="result">
            <p><span class="operation">Suma:</span> {{ $suma }}</p>
            <p><span class="operation">Resta:</span> {{ $resta }}</p>
            <p><span class="operation">Multiplicación:</span> {{ $multiplicacion }}</p>
            <p><span class="operation">División:</span> {{ $division }}</p>
        </div>
    </div>

</body>
</html>
