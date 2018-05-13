
<!DOCTYPE HTML>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <script>
        function returnNoticia(id) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "noticia",
                method: 'post',
                data: {
                    id: id
                },
                success: function (data) {
                    $data = $(data);
                    $('#container').fadeOut().html($data).fadeIn();

                }
            })
        }

        function returnCategory(id) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "category",
                method: 'get',
                data: {
                    id: id
                },
                success: function (data) {
                    $data = $(data);
                    $('#container').fadeOut().html($data).fadeIn();

                }
            })
        }
    </script>


</head>

<body>

<div id="container">

    <header >
        <br>
        <div class ="container">
            <div class ="row">
                <div class = "col-md-12" align = "center">
                    <form action="/">
                        <br><img src = "images/portal.png" class = "imglogo" >
                    </form>
                </div>
            </div>
        </div>
    </header>
    </br>



    <ul class = "fonte">
        <form action="/">
            <li class="esquerda"><button class="active botaohome corAl" type="submit">Home</button></li>
        </form>
        <li class="esquerda"><button onclick="returnCategory(1)" class="active botaoAdicionais corAl" type="submit">Tecnologia</button></li>
        <li class="esquerda"><button onclick="returnCategory(2)" class="active botaoAdicionais corAl" type="submit">Animes/Mangás</button></li>
        <li class="esquerda"><button onclick="returnCategory(3)" class="active botaoAdicionais corAl" type="submit">HQ's/Comics</button></li>
        <li class="esquerda"><button onclick="returnCategory(4)" class="active botaoAdicionais corAl" type="submit">Filmes</button></li>
        <li class="esquerda"><button onclick="returnCategory(5)" class="active botaoAdicionais corAl" type="submit">Séries</button></li>
        <li class="esquerda"><button onclick="returnCategory(6)" class="active botaoAdicionais corAl" type="submit">Jogos</button></li>
        <li class="esquerda"><button onclick="returnCategory(7)" class="active botaoAdicionais corAl" type="submit">Livros</button></li>
        @if($nome == 'Entrar')
            <li class="entrar"><a href="pessoaCadastro"> {!! $nome !!}</a></li>
        @else
            <li class="entrar"><a href="logout">Logout</a></li>
            <li class="entrar alinhar">{!! $nome !!}</li>
        @endif

    </ul>

    <div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active lastGuardian">
                    <img src="images/lastguardian.png" alt="lastguardian">
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                        <h3 class=" fonteslide">Jogos!!</h3>
                        <p class="fonteslide lastGuardian">Sony anuncia The Last Guardian 2!!</p>
                    </div>
                </div>

                <div class="carousel-item nintendo">
                    <img src="images/nintendointernet.png" alt="nintendo" >
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                        <h3 class = "fonteslide">Tecnologia!!</h3>
                        <p class = "fonteslide nintendo">Nintendo anuncia proximo console!!</p>
                    </div>
                </div>

                <div class="carousel-item onePiece">
                    <img src="images/onepiece.png" alt="onepiece" >
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                        <h3 class = "fonteslide">Animes!!</h3>
                        <p class = "fonteslide onePiece">Oda solta o verbo: One Piece deve chegar até o milésimo capítulo! Veja os spoilers quentinhos </p>
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
                    @foreach($noticias as $noticia)
                        <tr>
                            <div class="inline">
                                <img class="img01" onclick="returnNoticia({!! $noticia['id'] !!})" src={!! $noticia['imagem'] !!}>
                                </br>
                                <h5 class="txt">{!! $noticia['title'] !!}</h5>
                                <br>
                            </div>
                        </tr>
                    @endforeach
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
</div>
</body>

</html>