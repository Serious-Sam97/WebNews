
<!DOCTYPE HTML>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="img/pokebola.ico" />
    <title >

        The Shire
    </title>
    <link rel="stylesheet"  href="css/corpo.css">
    <link rel="stylesheet " href="css/bootstrap.min.css">
    <meta charset="UTF-8"/>
    <script type = "text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#hide").click(function(){
                $(".login2").hide();
                $(".invisivel").show();
            });

            $('.logar').on('click', function () {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "login",
                    method: 'get',
                    data: {
                        email: $('.email').val(),
                        senha: $('.senha').val()
                    },
                    success: function (data) {
                        $data = $(data);
                        $('#abacaxi').fadeOut().html($data).fadeIn();
                    }
                })
            });

        });
    </script>
</head>

<body>

<header >
    <br>
    <div class ="container">
        <div class ="row">
            <div class = "col-md-12" align = "center">
                <br>
                <img src = "images/portal.png" class = "imglogo">
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
</ul>
<div class="container">
    <div class = "row">
        <div class = "col-md-12 fonte" align="center">
            <div class="invisivel">
                <form action ="cadastrar">
                <h1>Termine seu Cadastro</h1>
                </br>
                <p>O seu cadastro é muito importante para nós</p>
                <label>Nome</label>
                </br>
                <input type="text" name="nome" id="nome" placeholder="Digite aqui seu Nome"/>
                </br>
                </br>
                <label>Senha</label>
                </br>
                <input type="password" id="senha" name="senha" placeholder="Senha"/>
                </br>
                </br>
                <label>Email</label>
                </br>
                <input type ="text" name="email" id="email" placeholder="Exemplo:123@gmail.com"/>
                </br>
                </br>
                <label>Data de Nascimento</label>
                </br>
                <input type="date" id="nascimento" name="nascimento"/>
                </br>
                </br>
                <label>Sexo</label>
                </br>
                <input type="radio" name="sexo" value="M"  id="sexo"/>M -
                <input type="radio" name="sexo" value="F"  id="sexo2"/>F
                </br>
                </br>
                    <button class = "botao botaopreto cor" >Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class ="container">
    <div class ="row">
        <div class = "col-md-12 fonte login2" align="center">
            <h1>Faça seu login!</h1>
            </br>
            <p>Valeu man, nós apreciamos muito seu esforço em fortalecer a nossa união, obrigado!</p>
            </br>
        </div>
    </div>
</div>
<div class ="container">
    <div class ="row">
        <div class = "col-md-12 fonte login2" align = "center">
            <form action = "login">
            <label>E-mail</label>
            </br>
            <input type="text" class="email" name="email"  placeholder="Digite aqui seu E-mail"/>
            </br>
            </br>
            <label>Senha</label>
            </br>
            <input type="password" name="senha" placeholder="Senha"/>
            </br>
            </br>
            <button class="botao botaopreto cor" type="submit">Confirmar</button>
            </form>
            </br>
            </br>
            <h5 style = "color: dodgerblue">Não tem Cadastro?</h5>
            </br>

            <button class="botao botaopreto cor" id="hide" ><a>Cadastre-se</a></button>
        </div>
    </div>
</div>

</br></br></br>
<div id="container">
    <div class = "rodaper fonte" id="footer">
        Politica de privacidade | F.A.Q. | Termos | Anuncio | Contato | Negocios </br>
        E-Mail: theshiremail@gmail.com</br>
        geekshire LTDA. </br>
        The Shire - Para os geeks com sede de informação </br>
    </div>
</div>
</div>
</body>

</html>