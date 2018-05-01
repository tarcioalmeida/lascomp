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
   
 
    mysql_close($conexao); //fecha conexão com banco de dados 
?>

/* //$select_db = mysql_select_db("lascomp"); //seleciona o banco de dados
    
    //atribui o valor vindo do fórmulario
    $nome = $_POST['nome']; 
    $email = $_POST['email'];
    
    $string_sql = "INSERT INTO usuario (idUsuario,email,nome,senha) VALUES ('1','$email','$nome','123')"; //String com consulta SQL da inserção
 
    /*$string_sql = "INSERT INTO testemunho (id,nome,email,testemunho) 
    VALUES (null,'{$email}','{$nome}',null)"; //String com consulta SQL da inserção*/
    
    mysql_query($string_sql,$conexao); //Realiza a consulta

    if(mysql_affected_rows() == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<p>Usuario Registrado</p>";
        echo '<a href="register.html">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro
    } else {
        echo "Erro, não foi possível inserir no banco de dados";
    }
*/