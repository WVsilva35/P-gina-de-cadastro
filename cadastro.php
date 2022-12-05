<?php 
 include("conexao.php");

 $nome=$_POST['nome'];
 $cpf=$_POST['cpf'];
 $email=$_POST['email'];
 $telefone=$_POST['telefone'];

 $sql="INSERT INTO cadastro( nome, cpf , email , telefone ) 
  VALUES ('$nome', '$cpf', '$email', '$telefone')";

if(mysqli_query($conexao, $sql)) {
    echo "Usuário cadastrado";
}
    else {
        echo "erro".mysqli_connect_error($conexao); 
    }

    mysqli_close($conexao);
 
    ?>

