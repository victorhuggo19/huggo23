<html>
<head>

</head>
<body>
<form method='POST' >
<table>
<tr>
<td><p>Nome sobrenome: <td><input type ="text" name ="nome">
</tr>
<tr>
<td><p>Email: <td><input type="email" name="email"> <!Com o type = "email" o formulario so sera enviado caso o campo seja preenchido corretamente >
</tr>
<tr>
<td><p>Twitter (Opicional):<td><input type="text" name="tw">
</tr>
<tr>
<td><input type="submit" name="email">
</tr>
</form>
</body>

</html>


<?php
	$nome = $_POST['nome'];// Sendo "nome e sobrenome" dois paramentros...
	$nome_anl = str_word_count($nome,0);// o "str_word_count" vai contar quantas palavras existem em $nome caso tenha apenas 1...
	if($nome_anl <2 & $nome_anl != 0){
	  echo '<script>alert("O campo nome deve ser preenchido com nome e sobrenome!");</script>';// Surgirá uma mensagem no topo da pagina informando.
	}elseif($nome_anl == 0){
		echo '<script>alert("O campo nome deve ser preenchido!");</script>';
	}
	else {
		//INSERT INT...  Caso o nome e sobrenome estejam sertinhos será cadastrado no banco de dados.
	}

?>