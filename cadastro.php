<?php 
    if(isset($_POST['submit'])){
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];

        $registro_sql = mysqli_query($conexao_db, "INSERT INTO usuarios_cadastro(nome, email, senha, telefone) VALUES ('$nome', '$email', '$senha', '$telefone')");

        echo "<p class='msg'>Cadastro feito com sucesso</p> ";



    }
   


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
   
    
    <style>
           body{
                background-color: whitesmoke;
            
           } 
        
        *{
            margin: 0px;
            padding: 0px;
        }
        header{
            background-color: black;
            
        }
        .logo{
            height: 110px;
            display: block;
            margin: auto;
            
        }
        .topo{
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        a{
            text-decoration:none;
            color: black;
            font-weight: bold;
        }

        .fundo{
            width: 650px;
            height: 700px;
        }
        main{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .btn{
            padding: 6px;
            color:white;
            border-radius:20px;
            text-decoration: underline;
            margin-left: 10px;
        }
        .seta{
            height: 40px;
            color: white;
        }
        input{
           border: 0px;
            display: block;
            margin: auto;
            height: 33px;
            background-color: white;
            color: black;
            width: 220px;
            border-radius: 4px;
        }
        form{
            padding: 12px;
            border-radius: 12px;
            height: 400px;
            width: 250px;
            margin-top: 80px;
            box-shadow: 1px 1px 1px 2px black;
            background-color: #231F20;
            color: white;
            
        }
        legend{
            font-weight: bold;
            font-size: 2em;
            margin-bottom: 12px;
        }
        label{
            margin-left: 18px;
        }
        .enviar{
            border-radius: 15px;
            width: 180px;
            margin-bottom: 15px;
        }
        .redirect{
            text-decoration: underline;
            display: flex;
            justify-content: end;
        }
        h1{
            margin-top: 20px;
        }
        h2{
            text-align: center;
            margin-bottom: 15px;
            color: white;
        }

        .msg{
            text-align: center;
            font-weight: bold;
            font-size: 2em;
            color:#006536;
        }
       
        
        
        
    </style>
</head>
<body>
   
    <header>
        <div class="topo">
            <a class="btn" href="index.php">
               <p>Home</p>
                    
            </a>
            <img class="logo" src="https://images.vexels.com/media/users/3/136312/isolated/preview/213fb725b5fbbd669093a338c9c16bdd-logo-pizza-fast-food.png" alt="">
        </div>

    </header>
        

    <main>
        <h1>Boa, vamos começar seu cadastro.</h1>

        
        
        <div class="formulario">
         
              <form action="cadastro.php" method="post">
                <fieldset>
                    <legend>Faça parte!</legend>
                    
                      <label for="">Informe seu nome completo</label>
                      <input placeholder="Nome completo:" type="text" name="nome" id="">
                      <br>
                      <label for="">Informe seu E-mail</label>
                      <input placeholder="E-mail:" type="text" name="email" id="">
                      <br>
                      <label for="">Agora crie uma senha segura</label>
                      <input placeholder="Crie uma senha:" type="password" name="senha" id="">
                      <br>
                      <label for="">E por fim seu número de celular</label>
                      <input type="number" placeholder="Número de celular:" name="telefone" id="">
                      <br>
                      <input class="enviar" name="submit" type="submit" value="Cadastrar">
                </fieldset>
              </form>
          

            <a class="redirect" href="login.php">Já possui uma conta?</a>

        </div>




    </main>
    
</body>
</html>