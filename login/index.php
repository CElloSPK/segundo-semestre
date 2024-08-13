<?php
//Iniciar sessão.
 session start();

// Verificar se já está logado caso sim redirecionar.
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] true){
   header("location: welcome.php");
   exit;
}

// Incluir arquivo de conexão.
require_once "Conexao.php";

//Iniciar variaveis com valores vazios.

$nomeusuario Ssenha = "";
$nomeUsuario_erno = $senha_erro= $login_erro= "";

// processar dados de formulario quando for enviado.

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //verifique se o usuario esta preenchido.

    if(empty(trim($_POST["nomeUsuario"]))){
         $nomeUsuario_erro "Insira algum nome de usuario!";
    }else{
        $nomeUsuario trim($_POST["nomeUsuario"]);
}

    // Verifique se a senha está vazia.

    if(empty(trim($_POST["senha"]))){ Ssenha_erro "Insira uma senha válidal";

    } else{
    $senha= trim($_POST["senha"]);
    }
    // Validar credenciais

    if(empty($nomeUsuario_erro) && empty($senha_erro)){

       // Prepare uma declaração selecionada
        $sql = "SELECT id, nomeUsuario, senha FROM usuarios WHERE nomeUsuario: nomeUsuario";
    
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(": nomeUsuario", $param_nomeUsuario, PDO:: PARAM_STR);
            
            // Definir parâmetros
            $param_nomeUsuario trim($_POST["nomeUsuario"]);
    
            // Tente executar a declaração preparada
            if($stmt->execute()){
               // Verifique se o nome de usuário existe, se sim, verifique a senha
               if($stmt->rowCount() == 1){
               if($row = $stmt->fetch()){
               $id = $row["id"];
               $nomeUsuario $row["nomeUsuario"];
               $hashed_senha $row["senha"];
               if (password_verify($senha, Shashed_senha)) {
                   // A senha está correta, então inicie uma nova sessão 
                   session_start();

                   // Armazene dados em variáveis de sessão
                   $_SESSION["loggedin"] = true;
                   $_SESSION["id"] = $id;
                   $_SESSION["nomeUsuario"] = $nomeUsuario;
    
                   // Redirecionar o usuário para a página de boas-vindas
                   header("location: welcome.php");
                } else{
                    // A senha não é válida, exibe uma mensagem de erro genérica
                    $login erro "Nome de usuário ou senha inválidos.";
                }
              }
            }else{
            // O nome de usuário não existe, exibe uma mensagem de erro genérica 
            $login_erro= "Nome de usuário ou senha inválidos."; 
         }
        }else{
            echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
        }
 
        // Fechar declaração 
        unset($stat); 
        } 
    }

    // Fechar conexão 
    unset($pdo);
}
?>

<!DOCTYPE html>
            
<html lang="pt-br">
            
<head>
            
    <meta charset="UTF-8">

    <title>Cadastro</title>
            
    <!-- inclusão da framework bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
         integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkF0JwJ8ERdknLPMO" crossorigin="anonymous">
       
    <style>
    body {
        font: 14px arial;
        display: flex;
        justify-content: center;

    }

    .wrapper {
        margin-top: 50px;
        width: 360px;
        padding: 20px;
        color: azure;
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(91, 2, 2, 1) 100%, rgba(255, 0, 0, 1) 100%)
        border-radius: 20px 12px;
    }
    </style>

</head>

<body>
    <div class="wrapper">
        <h2> Login</h2>

        <p>Preencha os dados para fazer o login</p>

        <?php
        if(!empty($login_erro)){
            echo '<div class= "alert alert-danger">'. $login_erro . '<div>';
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="POST">
            <div class="form=group">
                <label>Nome do usuário</label>
                <input type ="text" name="nomeUsuario"
                     class="form-control <?php echo (!empty($nomeUsuario)) ? 'is-invalid' ; ''; ?> "
                     value="<?php"