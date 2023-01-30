<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>

<body>
    <img src="{{asset('ongAnimais.png')}}" alt="" class="image">
    <div class="center">
        <ul>

            @foreach($animal as $animals)
            <li>
                Nome: {{$animals->nome}} |
                Tipo: {{$animals->tipo}} |
                Raça: {{$animals->raca}} |
            </li>
            @endforeach
        </ul>
        <a href="{{url('/')}}" class=""><button class="buttons">Voltar para pagina inicial</button></a>
    </div>
</body>

</html>