<?php
$servidor="localhost";
$usuario="root";
$senha="";
$dbname"cadastros";

 $conexao=mysql_connect($servidor,$usuario,$senha,$dbname);
 if(!$conexao) {
    die("houve um erro: " .mysql_connect_error());
 }


?>