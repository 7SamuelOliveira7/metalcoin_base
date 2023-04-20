<?php
    require('conn.php');

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if(empty($login) || empty($senha)){
        echo "Os valores náo podem ser vazios";
    }else{
        $criar_conta = $pdo->prepare("INSERT INTO usuarios(login, senha)VALUES(:login, :senha)");
        $criar_conta->execute(array(
            ':login'=> $login,
            ':senha'=> $senha
        ));

        echo "<script>
        alert ('Conta criada com sucesso!');
        </script>";
    }
?>

 
