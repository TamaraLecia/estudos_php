<?php

    $str = "Testando o resto da string, para ver se dar certo";

	$resto = strstr($str, "resto");

	echo "$resto <br>";

	$s = "string";

	$resto2 = strstr($str, $s);

	echo "$resto2 <br>";

	if(strstr($str, ".Net") === false){
		echo "Não encontramos a string! <br>";
    }



?>