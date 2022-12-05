<?php 
 include("conexao.php");

 $nome=$_POST[ 'nome'];
 $CPF=$_POST[ 'CPF'];
 $email=$_POST[ 'email'];
 $telefone=$_POST[ 'telefone'];

 $sql="INSERT INTO cadastros(Nome, CPF, email, telefone) 
 VALUES ('$Nome', '$CPF', '$email', '$telefone')";

if(mysqli_query($conexao, $sql)) {
    echo "Usuário cadastrado";
}
    else {
        echo "erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
    ?>

