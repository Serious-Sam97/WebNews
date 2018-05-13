<!DOCTYPE HTML>
<html>
<head>
    <link rel="shortcut icon" href="img/pokebola.ico" />
    <title >
        The Shire
    </title>
    <link rel="stylesheet"  href="css/corpo.css">
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <meta charset="UTF-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>
<header>
    <br>
    <div class ="container">
        <div class ="row">
            <div class = "col-md-12" align = "center">
                <br>
                <a href="home"><img src = "{{ asset($imgLogo) }}" class = "imglogo" ></a>
            </div>

</header>
</br>

<ul>
    <li class="esquerda"><a class="active" href="home" style="text-decoration:none">Home</a></li>
    <li class="esquerda"><a href="#Tecnologia">Tecnologia</a></li>
    <li class="esquerda"><a href="#Animes">Animes/Mangás</a></li>
    <li class="esquerda"><a href="#Comics">HQ's/Comics</a></li>
    <li class="esquerda"><a href="#Filmes">Filmes</a></li>
    <li class="esquerda"><a href="#Series">Séries</a></li>
    <li class="esquerda"><a href="#Jogos">Jogos</a></li>
    <li class="esquerda"><a href="#Livros">Livros</a></li>
    <li class="entrar"><img src = "img/loginuser.png" class ="imgicon">
    @if($nome == 'Entrar')
        <li class="entrar"><a href="pessoaCadastro"> {!! $nome !!}</a></li>
    @else
        <li class="entrar"><a href="logout">Logout</a></li>
        <li class="entrar alinhar">{!! $nome !!}</li>
    @endif

</ul>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <article class = "fonte">
                <img class="img01" src="{{ asset($imgText) }}" align="right">
                {!! $text !!}
            </article>
        </div>
    </div>
</div>
</br></br></br></br></br>
<div id="container">
    <div class = "rodaper" id="footer">
        Politica de privacidade | F.A.Q. | Termos | Anuncio | Contato | Negocios </br>
        E-Mail: theshiremail@gmail.com</br>
        geekshire LTDA. </br>
        The Shire - Para os geeks com sede de informação </br>
    </div>
</div>
<script src = "js/bootstrap.min.js"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
</body>
</html>