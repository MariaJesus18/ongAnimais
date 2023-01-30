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
        <form action="/doacoes/show" method="post">
            @csrf
            @error('nomeD')
            {{$message}}
            @enderror
            <label for="">Nome do doador</label>
            <input type="text" name="nomeD" id="nomeD" class="inputs">

            @error('tipoD')
            {{$message}}
            @enderror
            <label for="">Digite qual o tipo de doação. <br> Ex: ração,dinheiro,remédio</label>
            <input type="text" name="tipoD" id="tipoD" class="inputs">

            @error('quantidade')
            {{$message}}
            @enderror
            <label for="">Digite quantidade</label>
            <input type="text" name="quantidade" id="quantidade" class="inputs">


            <button class="buttons">enviar</button>

        </form>
    </div>
</body>

</html>