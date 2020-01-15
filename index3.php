<?php 

//$arr = array('foo', 'bar', 'baz');
//$i = 0;
//while($i < count($arr)) {
 //   echo $arr[$i];
 //   $i++;
}




$arr = array('foo', 'bar', 'baz');//parametros recebidos
 echo implode($arr, '');		 //usando a ferramenta pude juntar os itens do array adicionando entre eles espaços vazios;
						        //OBS: embora o efeito final seja o msm "foobarbaz" o caminho percorrido pelos codigos sao diferentes
							   //A principal difrença é que no codigo original e possivel adicional mais tarefas entre cada volta do while e no segundo não;


?>
