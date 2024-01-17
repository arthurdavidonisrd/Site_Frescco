<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            padding: 0xp;
            margin:0px;

        }
        body{
            background-color: #F5F5F5;
        }
        h1{
            text-align: center;
    
        }
        h2{
            text-align: center;
            margin-top: 20px;
            margin-bottom: 50px;

        }
        .topo{
            display:flex;
            flex-direction: row;
            background-color: black;
            align-items: center;
            
        }
        a{
            color: white;
        }
        .logo{
            height: 110px;
            display: block;
            margin:auto;

        }
        .seta{
            height: 40px;
            padding-left:5px;
            

        }
        form{
            
           display:flex;
           flex-direction:column;
           align-items: center;
           margin: auto;
           border-radius:12px;
           height: 300px;
           width: 280px;
           color: white;
           background-color: #231F20;
           

        }
        


        input{
            border-radius: 10px;
            height: 33px;
            width: 220px;
            border:1px solid black;
            margin: auto;
            display: flex;
            align-items: center;
            
            
        }
        .botao{
            text-align: center;
            margin-top: 30px;
            width: 120px;
           
            
        }
        label{
            margin-right: 75px;
            color: white;
        }
        #eml{
            margin-right: 110px;
        }
        legend{
            color: white;
            font-weight: bold;
            font-size: 1.4em;
        }
       
        
        
    </style>
</head>
<body>
    <header>
           <div class="topo">
                <a href="index.php">Voltar</a>
                <img class="logo" src="https://images.vexels.com/media/users/3/136312/isolated/preview/213fb725b5fbbd669093a338c9c16bdd-logo-pizza-fast-food.png" alt="">
               
           </div>
           <h1>Já possui uma conta?</h1>
           <h2>Então é só fazer seu login para não perder nenhuma novidade!!</h2>
    </header>

    <main>
        
        <form action="loginvalidacao.php" method="POST">
            <fieldset>
                <legend>Entrar com a conta</legend>
    
                <label id="nome" for="nome">Digite seu nome:</label>
                <input placeholder="Nome::" type="text" name="nome" id="">
    
                
                <label id="eml" for="name">Digite seu E-mail:</label>
                <input placeholder="E-mail:" type="email" name="email" id="">
    
                
    
                <label for="senha">Nos informe sua senha</label>
                <input placeholder="Senha:" type="password" name="senha" id="">
    
                <input class="botao"  name="submit" type="submit" value="Logar">
            </fieldset>


        </form>

        
    </main>
    
</body>
</html>