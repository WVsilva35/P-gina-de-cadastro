<?php 
 include("conexao.php");

 $nome=$_POST[ 'nome'];
 $CPF=$_POST[ 'CPF'];
 $email=$_POST[ 'email'];
 $telefone=$_POST[ 'telefone'];

 $sql="INSERT INTO cadastros(nome, CPF, email, telefone) 
 VALUES ( '$nome', '$CPF', '$email', '$telefone')";

if(mysql_querry($conexao, $sql)) {
    echo "Usuário cadastrado";
}
    else {
        echo"erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
    ?>

