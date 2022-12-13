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
            text-align: center;
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
        /* Media query */
        @media only screen and (max-width: 425px) {
            .container{
                width: 100%;
            }
            .container_card{
                width: 100%;
                padding: 30px 0;
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
                <h1>Estimado/a NOMBRE</h1>
            </div>
            <div class="correct_image">
                <img src="{{ asset('images/mail/save/image.png') }}" alt="imagen de actualizado correctamente">
            </div>
            <div class="card_title">
                <h1>PERFIL ACTUALIZADO</h1>
            </div>
            <div class="card_text">
                <p>La Información de su perfil fue registrada exitosamente.</p>
                <p>Saludos,<br>
                    SAVE THE CHILDREN</p>
            </div>
            <div class="card_footer">
                
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
