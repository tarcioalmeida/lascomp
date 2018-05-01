<?php

ini_set(“display_errors”, 1 );
error_reporting(1);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>YUKE</title>
    </head>
    <body>
       <?php
       //PEGA DADOS DIGITADOS PELO USUARIO
        $nome = $_POST['nome']; 
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $Confirmarsenha = $_POST['Confirmarsenha'];
        $erro = 2;
        //***********************************************************
        
        //VALIDANDO CAMPO
       //Verifica se o campo nome não está em branco.
       if((strlen($nome) <= 1) || (strlen($email)<=1) || (strlen($senha)<=1) || (strlen($Confirmarsenha)<=1)){ 
            $erro = 1; 
        }else if($senha!=$Confirmarsenha)
        {
            $erro = 0;
        }
        
        if($erro && $erro!=2){
            mail($email,$email,$senha);
            echo  "<script>alert('Preencha todos os campos!');</script>";
            include 'cadastro.php';
        }else if(!$erro)
        {
            echo  "<script>alert('Senhas diferentes!');</script>";
            include 'cadastro.php';
        }else
        {
            //********************************************************************************
       
            //INSERE NO BD
            //verifica se existe conexão com bd; caso não tenta, cria uma nova
            $conexao = mysqli_connect('localhost','root','trabalho','lascomp') //porta, usuário, senha
            or die("Erro na conexão com banco de dados"); //caso não consiga conectar mostra a mensagem de erro mostrada na conexão

            //Impede erros ao salvar no BD
            //mysqli_set_charset($conexao, 'utf8');

            //Verifica conexão
            if($conexao->conect_error)
            {
                die('Connect Error: '. $conexao->conect_error);
            }

            $sql = "INSERT INTO usuario (email,nome,senha) VALUES";
            $sql.= "('$email','$nome','$senha')";

            if($conexao->query($sql) === TRUE)
            {
                include 'login.php';
                echo  "<script>alert('Usuário cadastrado com sucesso!');</script>";
            }else{
                echo "Erro:".$sql."<br>".$conexao->error;
            }

            $conexao->close();
            mysql_close($conexao); //fecha conexão com banco de dados 

        }
        

    ?>
    </body>
</html>
