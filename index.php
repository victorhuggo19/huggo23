
<! tentativa de realizar em Json
<pre>
<?php 
//$c = array('Travis' => 29, 'John' => 30, 'Manny' => 24, 'Gabriel' => 20, 'Yogi' => 22);//parametros recebidos;
//foreach($c as $c => $v){//pensei em separar os nomes para jogar no json e usar o ".sort()" para ordenar alfabeticamente;
//	$d = $c;
//	$script = "<script> var nomes = $d ;</script>";//coloquei na variavel $script para usar o echo dela e tentar fazer o json receber os dados declarados nela;
//	echo $script;
?>
<script>  
//alert(<?php $nomes ?>);//infelizmente o json nao recebe os dados str do meu array so os dados numericos, o meu "alert" percebe que sao 5 valores mas n reconhece nenhum deles;
//	nomes.sort();
	
	
 </script>
<?php
//}
?>
</pre>


<! Não consegui realizar passando de PhP para Json, mas consegui realizar usando apenas php ->

<?php

$c = array('Travis' => 29, 'John' => 30, 'Manny' => 24, 'Gabriel' => 20, 'Yogi' => 22);//parametros recebidos;
ksort($c);									  //usei a ferramenta "ksort()" para ordenar o array, usei o ksort() pois ela ordena alfabeticamente os nome e leva junto a idade associada; 
foreach($c as $c => $v){					//usei o foreach para limpar o meu array (tirando cochetes, aspas, etc);
echo "Nome: $c <br/>Idade: $v<br/><br/>"; //usei este "echo" para formatar a saida no formato especificado;
}


?>
