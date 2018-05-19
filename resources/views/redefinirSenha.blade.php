
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

</ul>

<div class ="container">
    <div class ="row">
        <div class = "col-md-12 fonte login2" align = "center">
            <form action="emailRedefinirSenha">
                <label>Digite o seu E-mail</label>
                </br>
                <input type="text" class="email" name="email"  placeholder="Digite aqui seu E-mail"/>
                </br>
                </br>
                <button type="submit">Enviar</button>
            </form>
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