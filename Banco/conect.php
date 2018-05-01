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
        //***********************************************************
        
        //VALIDANDO CAMPO
       //Verifica se o campo nome não está em branco.
       if(strlen($nome) <= 11){ 
            echo "Erro no nome!";
            $erro = 'por favor coloque seu nome completo'; 
        }
        if($erro){ 
        echo "Erro no nome!";
        }
        
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
            //header('Location: login.php');
            echo "Erro no nome!";
            //echo "Usuário casdatarado com sucesso!";
        }else{
            echo "Erro:".$sql."<br>".$conexao->error;
        }

        $conexao->close();
        mysql_close($conexao); //fecha conexão com banco de dados 
    ?>
    </body>
</html>
