<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href="{{ route('xIndex') }}">Inicio</a>
    <a href="{{ route('xGaleria') }}">Galeria</a>
    <a href="{{ route('xLista') }}">Lista</a>

    <h1>Página galeria </h1>
    <h3>Foto de codigo {{ $valor }} </h3>

</body>
</html>