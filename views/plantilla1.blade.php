<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> {{$titulo}} </h1>
    <h2>{{$nombre}}</h2>
    <h3>{{$edad}}</h3>
    @for($i=0; $i<$maximo;$i++)
    <li>Elemento {{$i}} </li>
    @endfor
    <h3>Lista Aficiones</h3>
    @foreach ($aficiones as $aficion)
        <li> {{$aficion}} </li>
    @endforeach
    <h3>Lista aficiones 2</h3>
    @forelse ($aficiones2 as $aficion)
        <li>{{$aficion}}</li>
    @empty
        <p>{{'No hay aficiones perro'}}</p>
    @endforelse
</body>
</html>