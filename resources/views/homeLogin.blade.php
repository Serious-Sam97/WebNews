
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

<header >
    <br>
    <div class ="container">
        <div class ="row">
            <div class = "col-md-12" align = "center">
                <br>
                <a href="home"><img src = "img/portal.png" class = "imglogo" ></a>
            </div>
        </div>
    </div>
</header>
</br>



<ul class = "fonte">
    <li class="esquerda"><a class="active" href="home" style="text-decoration:none">Home</a></li>
    <li class="esquerda "><a href="#Tecnologia">Tecnologia</a></li>
    <li class="esquerda "><a href="#Animes">Animes/Mangás</a></li>
    <li class="esquerda "><a href="#Comics">HQ's/Comics</a></li>
    <li class="esquerda "><a href="#Filmes">Filmes</a></li>
    <li class="esquerda "><a href="#Series">Séries</a></li>
    <li class="esquerda"><a href="#Jogos">Jogos</a></li>
    <li class="esquerda"><a href="#Livros">Livros</a></li>
    <li class="entrar"><a href="logout"> Logout</a></li>
    <li class="entrar alinhar ">{!! $nome !!}</li>
    <li class="entrar"><img src = "img/loginuser.png" class ="imgicon">
</ul>

<div class="container">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="telaGenerica.html">
                    <img src="img/lastguardian.png" alt="lastguardian">
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                        <h3 class=" fonteslide">Jogos!!</h3>
                        <p class="fonteslide">Sony anuncia The Last Guardian 2!!</p>
                    </div>
                </a>

            </div>
            <div class="carousel-item">
                <img src="img/nintendointernet.png" alt="nintendo" >
                <div class="overlay"></div>
                <div class="carousel-caption">
                    <h3 class = "fonteslide">Tecnologia!!</h3>
                    <p class = "fonteslide">Nintendo anuncia proximo console!!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/onepiece.png" alt="onepiece" >
                <div class="overlay"></div>
                <div class="carousel-caption">
                    <h3 class = "fonteslide">Animes!!</h3>
                    <p class = "fonteslide">Oda solta o verbo: One Piece deve chegar até o milésimo capítulo! Veja os spoilers quentinhos </p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<table>
    <div class="container">
        <div class="row">
            <div class="col-12-md" style="text-align: center;">
                <a href="noticia">
                    <tr>
                        <div class="inline">
                            <img class="img01" src="img/lastguardian.png">
                            </br>
                            <h5 class="txt">Sony anuncia The Last Guardian 2: Electric Boogaloo para 2025 (data não confirmada, e nem plataforma)</h5>
                            <br>
                        </div>
                    </tr>
                </a>

                <div class="inline">
                    <img class="img01" src="img/nintendointernet.png">
                    </br>
                    <h5 class="txt"> Nintendo anuncia que seu próximo console terá um revolucionário acesso à internet! Groundbreaking!
                    </h5>
                    <br>
                </div>

                <div class="inline">
                    <img class="img01" src="img/onepiece.png">
                    </br>
                    <h5 class="txt"> Oda solta o verbo: One Piece deve chegar até o milésimo capítulo! Veja os spoilers quentinhos
                    </h5>
                    <br>
                </div>

                <div class="inline">
                    <img class="img01" src="img/jarjar.png">
                    </br>
                    <h5 class="txt"> Disney quebra a internet e anuncia spin off exclusivo contando o passado obscuro de Jar Jar Binks
                    </h5>
                    <br>
                </div>

                <div class="inline">
                    <img class="img01" src="img/jkrolling.png">
                    </br>
                    <h5 class="txt"> Fim de Harry Potter...JK! Rolling anuncia novo livro focado na família de Bicuço antes de conhecer Hagrid
                    </h5>
                    <br>
                </div>

                <div class="inline">
                    <img class="img01" src="img/bvs.png">
                    </br>
                    <h5 class="txt"> No more grayscale: DC anuncia que seus filmes daqui pra frente serão mais coloridos que o arco-íris
                    </h5>
                    <br>
                </div>

            </div>
        </div>
    </div>
</table>
</br></br></br>
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