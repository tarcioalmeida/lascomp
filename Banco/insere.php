<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
 
<body>

    <?php

        //verifica se existe conexão com bd; caso não tenta, cria uma nova
        $conexao = mysql_connect('localhost','root','trabalho','lascomp') //porta, usuário, senha
        or die("Erro na conexão com banco de dados"); //caso não consiga conectar mostra a mensagem de erro mostrada na conexão

        //Impede erros ao salvar no BD
        mysqli_set_charset($conexao, 'utf8');

        //Verifica conexão
        if($conexao->conect_error)
        {
            die("Falha na na conexao:". $conexao->conect_error);
        }

        $nome = $_POST['nome']; 
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO usuario VALUES";
        $sql.= "('null','$email','$nome','$senha')";

        if($conexao->query($sql) === TRUE)
        {
            echo "Usuário casdatarado com sucesso!";
        }else{
            echo "Erro:".$sql."<br>".$conexao->error;
        }

        $conexao->close();
        mysql_close($conexao); //fecha conexão com banco de dados 
    ?>
</body>
</html>

    