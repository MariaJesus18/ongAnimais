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
        <form action="/animais/show" method="post">
            @csrf
            @error('nome')
            {{$message}}
            @enderror
            <label for="">Digite o nome do animal</label>
            <input type="text" name="nome" id="nome" class="inputs">

            @error('tipo')
            {{$message}}
            @enderror
            <label for="">Digite qual o tipo de animal. <br> Ex: gato,cachorro</label>
            <input type="text" name="tipo" id="tipo" class="inputs">

            @error('raca')
            {{$message}}
            @enderror
            <label for="">Digite a raca do Animal</label>
            <input type="text" name="raca" id="raca" class="inputs">


            <button class="buttons">enviar</button>

        </form>
    </div>
</body>

</html>