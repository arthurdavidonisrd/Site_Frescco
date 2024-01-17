<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frescco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Permanent+Marker&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Yatra+One&display=swap');
        

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: ;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: black;

        }

        .logo {
            max-width: 110px;
            height: auto;
        }
        .destaque{
            background-color: white;
            color: black;
        }
        .destaque:hover{
            background-color: #F38434;
            color: white;
        }

        .menu {
            display: flex;
            gap: 20px;
        }
        a{
            color: white;
            text-decoration:none;
            font-weight: bold;
            padding: 10px;
            border-radius: 40px;

        }

        main {
            padding: 20px;
        }

        .apresentacao {
            /* Your existing styles for .apresentacao here */

            
        }

        .text_presentation {
            
        }

        .img_pizza {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background-color: #5B6455;
            text-align: center;
        }

        .depoimentos_clientes
         {
            width: 100%;
            max-width: 300px;
            margin: 20px;
            background-color: #434C3D;
            color: white;
            padding: 10px;
            border-radius:12px;
        }
        .title_depoimentos{
            text-align: center;
            font-family: Yatra One;
        }

        .depoimento {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
        }

     


        .subtitulo{
            font-family: 'Yatra One';
            color:#F38434;
            font-weight: bold;
            margin-top: 20px;
        }
        .welcome{
            font-family: 'Yatra One';
            font-weight: bold;
            color: #F38434;
        }


      

        .last_content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .intro{
            font-family: 'Yatra One';
            color:#F38434;
            font-weight: bold;
            font-size: 1.4em;
        }
        .more_about{
            color: white;
            background-color: black;
            
           
        }
        .more_about:hover{
            background-color: #F38434;

        }.ancora{
            color: black;
            text-decoration:underline;
        }
        h2{
            font-weight: bold;
        }
        .hold_footer {
            display: flex;
            flex-direction: row;
            color: black;
            align-items: center;
            justify-content: space-around;
            padding: 10px;
           
           
            
        }
        .hold_footer a {
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        .logo{
            height: 85px;
           
        }

        .last_content {
            display: flex;
            margin-bottom: 25px;
            
        }
        .last_content a{
            color:black;
        }

        .login_img{
           height: 44px;
            display: none;
            margin: auto;

        }
        .create_acount_img{
            display: none;
            height: 40px;
            margin: auto;
        }
        
      
       
        @media screen and (max-width: 600px) {
            body::-webkit-scrollbar{
                display: none;
            }

            header{
                display: flex;
                flex-direction:row;
                justify-content: space-between;
                
            }

            .logo{
                height: 60px;
            }


            .destaque{
                display: none;

            }
            .last_content{
                display: none;
            }
            .login{
                display: none;
            }
            .login_img{
                display: flex;
                align-items: center;
            }

            .depoimentos_clientes,
            .depoimentos_clientes2 {
                max-width: 100%;
            }
            .hold_footer  {
                display: flex;
                flex-direction: column;
                color: black;
                align-items: center;
                justify-content: space-around;
                background-color: whitesmoke;
                padding: 10px;

            }
            .create_acount_img{
                display: flex;
                align-items: center;
                justify-content: center;

                
            }

            .menu_responsive{
                display: flex;
                align-items:center;
                
            }
            .hold_footer a{
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    
        <header>
            <img class="logo" src="https://images.vexels.com/media/users/3/136312/isolated/preview/213fb725b5fbbd669093a338c9c16bdd-logo-pizza-fast-food.png" alt="">
            <div class="menu">
                <a class="destaque" href="cadastro.php">Criar conta</a>
                <a class="login" href="login.php">Entrar</a>
                <div class="menu_responsive">
                    <a href="login.php" ><img class="login_img" src="https://cdn-icons-png.flaticon.com/512/5087/5087607.png" alt=""></a>
                    <a href="cadastro.php"><img class="create_acount_img" src="https://cdn4.iconfinder.com/data/icons/basic-mobile-app-ui/50/04-31-add-user-512.png" alt=""></a>
                </div>
            </div>
        </header>
        <main>


            <div class="apresentacao">


                <div class="text_presentation">
                    <p class="intro"><strong>A melhor pizzaria da cidade</strong></p>
                    <h1 class="welcome">Bem vindo</h1>
                    <h2>Reconhecida pela boa comida desde 1988.</h2>
                    <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, magni quisquam autem nulla hic fugiat velit alias quasi, similique error voluptates aperiam totam ex dolore rerum dolor amet laboriosam. Officia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, ut aut recusandae maiores dolores debitis quidem quasi quae, ipsam nam reiciendis laboriosam fugit sed. Sint quas voluptate repellendus maiores quae!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, eveniet? Enim accusantium eligendi, sed voluptate praesentium recusandae est sit ipsam iusto aliquid commodi a esse, blanditiis beatae maiores maxime tempore. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos dolorem, assumenda possimus quam sed earum cupiditate pariatur nemo labore, dolore aperiam magni libero illum ab. Aliquid, incidunt? Dolorem, perferendis odit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quo temporibus, magni vero nulla soluta sed excepturi dolorem quam, sapiente asperiores voluptas in delectus odio? Eveniet, dolore ad? Vitae, fuga.</p>
                    <a class="more_about" href="#">Mais sobre nós
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                     </svg>
                    </a>
                    <h2 class="subtitulo">Não perca nada</h2>
                    <p>Cadastre-se agora e faça parte do nosso seleto grupo de amantes de pizzas! Ao criar sua conta para ficar por dentro de todas as novidades da Frescco, você garante acesso privilegiado a promoções irresistíveis, descontos exclusivos e benefícios especiais que só os membros têm. Além disso, os cadastrados desfrutam de prioridade de reserva, permitindo que você saboreie suas pizzas favoritas sem preocupações.
                    Ao fazer parte da nossa comunidade, você receberá informações em primeira mão sobre novos sabores, eventos especiais, e outras surpresas deliciosas que preparamos exclusivamente para você. Não perca tempo e una-se a nós! Cadastre-se agora e viva a experiência única de ser um membro Frescco, onde a paixão pela pizza é celebrada com vantagens que vão além do sabor. Estamos ansiosos para compartilhar momentos especiais e pizzas incríveis com você! 🍕✨</p>
                </div>


                <h2 class="title_depoimentos">Depoimento de clientes:</h2>

                
                <div class="img_pizza">
                    <div class="depoimentos_clientes">
                        <img class="depoimento" src="https://cdn-sites-images.46graus.com/files/photos/2f7297da/9b898e35-71e4-4e8a-b98d-f94484325164/2016-09-06-122156-cris-pereira-0087-editado-2-256x256.jpg" alt="">
                        <p id="dep1">"Não tenho palavras para expressar o quanto estou encantado com a experiência incrível que tive na pizzaria Frescco. Desde o momento em que entrei, fui recebido com um sorriso caloroso e um ambiente acolhedor que imediatamente me fez sentir em casa."</p>
        
                    </div>
                    <div class="depoimentos_clientes">
                         <img class="depoimento" src="https://cdn-sites-images.46graus.com/files/photos/a2837079/9961cd63-4ecc-4736-b639-d5349b68b011/210105_retrato_0004-editar-editar-copia-256x256.jpg" alt="">
                        <p class="depoiment">"Não tenho palavras para expressar o quanto estou encantado com a experiência incrível que tive na pizzaria Frescco. Desde o momento em que entrei, fui recebido com um sorriso caloroso e um ambiente acolhedor que imediatamente me fez sentir em casa."</p>
                    </div>
        
                </div>
        
            </div>
        </main>
        <footer>
            <div class="hold_footer">
                <div class="rodape">
                    <h2>Conecte-se conosco</h2>
                    <a href="">Instagram
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                    </a>
                    <a href="">Facebook
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        </svg>
                    </a>
                    <a href="">TikTok
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                        <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                        </svg>
                    </a>
                    <a href="">Twitter
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
                        </svg>
                    </a>
                    <a href="">YouTube
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408z"/>
                    </svg>
                    </a>
                </div>
                <div class="cliente">
                    <h2>Atendimento ao cliente</h2>
                    <a href="">Fale conosco</a>
                    <a href="">Pesquisa de satisfação</a>
                    <a href="">Quem somos</a>
                    <a href="">Privacidade</a>
                    <a href="">Portas Abertas</a>
                </div>
            </div>
            <hr class="line_footer">
            <div class="last_content">
                <div class="terms">
                    <a href="">Privacidade</a>
                    <a href="">Termos e condições</a>
                </div>
                <div class="comercial">
                   <a href="">© Frescco 2023</a>
                </div>
            </div>
        
        
        
        
        </footer>
   
</body>
</html>