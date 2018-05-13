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
                <img src = "{{ asset($imgLogo) }}" class = "imglogo">
            </div>
        </div>
    </div>

</header>
</br>

<ul class = "fonte">
    <form action="/">
        <li class="esquerda"><button class="active botaohome corAl" type="submit">Home</button></li>
    </form>
    <li class="esquerda"><button onclick="returnCategory(1)" class="botaoAdicionais corAl" type="submit">Tecnologia</button></li>
    <li class="esquerda"><button onclick="returnCategory(2)" class="botaoAdicionais corAl" type="submit">Animes/Mangás</button></li>
    <li class="esquerda"><button onclick="returnCategory(3)" class="botaoAdicionais corAl" type="submit">HQ's/Comics</button></li>
    <li class="esquerda"><button onclick="returnCategory(4)" class="botaoAdicionais corAl" type="submit">Filmes</button></li>
    <li class="esquerda"><button onclick="returnCategory(5)" class="botaoAdicionais corAl" type="submit">Séries</button></li>
    <li class="esquerda"><button onclick="returnCategory(6)" class="botaoAdicionais corAl" type="submit">Jogos</button></li>
    <li class="esquerda"><button onclick="returnCategory(7)" class="botaoAdicionais corAl" type="submit">Livros</button></li>
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