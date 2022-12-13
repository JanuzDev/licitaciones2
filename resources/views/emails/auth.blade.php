<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        :root {
            --background: #EDF2F7;
            --color-text: #71809D;
            --color-title: #3d4852;
            --border: #b0adc5;
            --link: #72B5F0;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: var(--background);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI';
        }

        .container_card {
            background-color: white;
            width: 500px;
            padding: 40px;
            border-radius: 25px
        }

        .card_title h1 {
            text-align: left;
            color: var(--color-title);
            font-size: 18px;
            font-weight: bold;
        }

        .correct_image {
            display: flex;
            justify-content: center;
        }

        .card_text {
            text-align: left;
            color: var(--color-text);
            font-size: 16px;
            margin: 40px 0;
        }

        .card_footer {
            color: var(--color-text);
            border-top: 1px solid var(--border) ;
            font-size: 14px;
        }

        .container_footer {
            color: var(--border);
            font-size: 12px;
        }
        .link{
            color: var(--link);
            text-decoration: none;
        }
        .card_button{
            display: flex;
            justify-content: center;
            
        }
        .link_button{
            text-decoration: none;
            color: #FFFFFF;
            background: #2d3748;
            padding: 10px 30px;
            border-radius: 5px;
            
        }
        /* Media query */
        @media only screen and (max-width: 425px) {
            .container{
                width: 100%;
            }
            .container_card{
                width: 100%;
                padding: 30px 0;
            }
            .card_title{
                padding: 0 30px;
            }
            .card_text{
                padding: 0 30px;
                margin: 20px 0; 
            }
            .card_footer{
                
                margin: 0 30px;
            }
            .container_footer{
                padding: 0 30px;
            }
           
            
        }

      
    </style>
</head>

<body>
    <div class="container">
        <div class="container_header">
            <img src="{{ asset('images/mail/save/LOGO SAVE NEGRO-01.svg') }}" height="80" alt="logo save the children">
        </div>
        <div class="container_card">
            <div class="card_title">
                <h1>¡Hola!</h1>
            </div>
            <div class="card_text">
                <p>Por favor, haga clic en el botón de abajo para verificar su dirección de correo electrónico.</p>
            </div>
            <div class="card_button">
                <a class="link_button" href="#">Confirma tu correo electrónico</a>
            </div>
            <div class="card_text">
                <p>Si no ha creado una cuenta, no se requiere ninguna acción adicional.</p>
                <p>Saludos,<br>
                    SAVE THE CHILDREN</p>
            </div>
            <div class="card_footer">
                <p>
                    Si tiene problemas para hacer clic en "Confirma tu correo electrónico" botón, copie y pegue la siguiente URL en su navegador web:<a href="#" class="link"> savethechildren.com</a>
                </p>
            </div>
        </div>
        <div class="container_footer">
            <p>
                © 2022 LICITACIONES. Todos los derechos reservados.
            </p>
        </div>
    </div>
</body>

</html>
