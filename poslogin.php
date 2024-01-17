<?php 

session_start();
if((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location:index.php");
    
}
$nome = $_SESSION['nome'];



?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap');
         
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        h1{
            font-family: 'Abril Fatface', serif;
            letter-spacing: 6px;
            color: #2A2A2A;
            text-align: center;
            font-size: 2.8em;
            color: white;
            background-color: #434C3D;
        }
        h2{
            text-align: center;
            margin: 40px;
            
            
        }
        header{
           background-color: black;
        }
        a{
            display: flex;
            justify-content: end; 
        }
       
       
     
        .logo{
            height: 90px;
            display: block;
            margin: auto;
        }
        .cardapio_img{
            color: white;
            text-decoration:underline;

        }
        section{
            width: 100%;
            height: 300px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            
        }
        section:nth-of-type(1){
            background-image: url('imagens/hemant-latawa-IfQlwNqJqV8-unsplash.jpg');
            height: 850px;
          
        }

        section:nth-of-type(3){
            background-image: url('imagens/nik-owens-40OJLYVWeeM-unsplash.jpg');
            height: 850px;
        }
        P{
            width: 300px;
        }


        @media screen and (max-width: 600px) {
            h1{
                font-size: 1em;
                font-family: Arial, Helvetica, sans-serif;
            }
        }


       

        
    </style>
</head>
<body>
    <header>
        <img class="logo" src="https://images.vexels.com/media/users/3/136312/isolated/preview/213fb725b5fbbd669093a338c9c16bdd-logo-pizza-fast-food.png" alt="">
        <a class="cardapio_img" href="logout.php">Sair</a>
        <?php echo "<h1>Bem vindo $nome</h1>";?>

        
    </header>
   

    <section>
    </section>


    
    <section>
        



    </section>




    <section>
    </section>


    <section>
    
  
   
    </section>

   
  
    
</body>
</html>