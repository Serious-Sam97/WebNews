
<!DOCTYPE HTML>
<html>
<head>
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
                <a href="index.html"><img src = "img/portal.png" class = "imglogo" ></a>
            </div>

</header>
</br>



<ul>
    <li class="esquerda"><a class="active" href="" style="text-decoration:none">Home</a></li>
    <li class="esquerda"><a href="#Tecnologia">Tecnologia</a></li>
    <li class="esquerda"><a href="#Animes">Animes/Mangás</a></li>
    <li class="esquerda"><a href="#Comics">HQ's/Comics</a></li>
    <li class="esquerda"><a href="#Filmes">Filmes</a></li>
    <li class="esquerda"><a href="#Series">Séries</a></li>
    <li class="esquerda"><a href="#Jogos">Jogos</a></li>
    <li class="esquerda"><a href="#Livros">Livros</a></li>
</ul>
<div class="container">
    <div class = "row">
        <div class = "col-md-12 fonte" align="center">
            <div class="invisivel">
                <form>
                <h1>Termine seu Cadastro</h1>
                </br>
                <p>O seu cadastro é muito importante para nós</p>
                <label>Nome</label>
                </br>
                <input type="text" name="nome" placeholder="Digite aqui seu Nome"/>
                </br>
                </br>
                <label>Senha</label>
                </br>
                <input type="password" placeholder="Senha"/>
                </br>
                </br>
                <label>Email</label>
                </br>
                <input type ="text" name="email" placeholder="Exemplo:123@gmail.com"/>
                </br>
                </br>
                <label>Data de Nascimento</label>
                </br>
                <form action="/action_page.php">
                    <input type="datetime-local" name="bdaytime"/>
                </form>
                </br>
                <label>Sexo</label>
                </br>
                <input type="text" name="sexo" placeholder="Digite seu sexo"/>
                </br>
                </br>
                <button class="botao"><a class = "botaopreto" href="">Confirmar</a></button>
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
            <label>E-mail</label>
            </br>
            <input type="E-mail" class="email"  placeholder="Digite aqui seu E-mail"/>
            </br>
            </br>
            <label>Senha</label>
            </br>
            <input type="password" placeholder="Senha"/>
            </br>
            </br>
            <button class="botao"><a class="botaopreto" href="">Confirmar</a></button>
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
</body>

</html>