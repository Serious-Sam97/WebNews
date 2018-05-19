<!DOCTYPE html>
<html>
<head>
<title>teste</title>
</head>
<body>

<h1><?php echo $pessoa["nome"]?>, você solicitou uma mudança de senha para fazer isso <a href="{{ action('userController@redefinindoSenhaIndex', [ 'id' => $pessoa["id"] ]) }}">clique aqui</a> e siga os procedimentos</h1>
<p>caso nao tenha pedido desconsiderar o email</p>

</body>
</html>
