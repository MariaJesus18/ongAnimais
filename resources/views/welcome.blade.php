<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>welcome</title>
</head>

<body>
    <img src="ongAnimais.png" alt="" class="image">
    <div class="center">

        <h1>Seja bem vindo a org dos animais</h1>
        <a href="{{url('/cadastro/animais')}}" class=""><button class="buttons">Cadastrar Animal</button></a>
        <a href="{{url('/cadastro/doacoes')}}" class=""><button class="buttons">Cadastrar Doação</button></a>
    </div>
</body>

</html>