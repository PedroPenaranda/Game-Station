<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>
</head>
<body class="body">
    <style>
        .body{
            background-image: linear-gradient(to left, rgb(10, 19, 71), rgb(138, 80, 13) 90%);
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
        }
    </style>

 <div class="contenedor-error">
    <img src="imagen/404/manoi.png" alt="mano" class="mano">
    <style>
       .mano{
           position: absolute;
           top: 30%;
       }
    </style>
    <img src="imagen/404/pc.png" alt="pantalla" class="pantalla">
    <style>
        .pantalla{
            width: 400px;
            height: 400px;
            position: absolute;
            left: 54%;
            top: 60px;
            transform: perspective(800px) rotateY(-45deg);
        }
    </style>
    <img src="imagen/404/mando.png" alt="mando" class="mando">
    <style>
        .mando{
            width: 120px;
            height: 85px;
            position: absolute;
            animation: volador 15s infinite 0s;
            transform: rotate(45deg);
            top: 39%;
            left: 55px;
        }
        @keyframes volador{
            0%{top: 39%; left: 55px; transform: rotate(45deg);}
            25%{top: 80%; left: 278px; transform: rotate(100deg);}
            50%{top: 36%; left: 570px;transform: rotate(150deg);}
            75%{top: 10%; left: 276px; transform: rotate(260deg);}
            100%{top: 39%; left: 55px; transform: rotate(395deg);}    
        }
    </style>
    <div class="contenedor-txtError">
        <span>ERROR 404</span>
        <p>Le pedimos disculpas,</p>
        <p> esta pagina no se encuentra disponible</p>
    </div>
 </div>
 <style>
    .contenedor-error{
        width: 65%;
        height: 500px;
        background-color: white;
        position: relative;
        top: 60px;
    }
    .contenedor-txtError{
        width: 340px;
        height: auto;
        position: absolute;
        text-align: center;
        top: 18%;
        left: 510px;
        transform: perspective(800px) rotateY(-50deg) rotate(-3.8deg);
        animation: txterror 4s infinite 2s;
    }
    @keyframes txterror{
        0%{top: 19%; left: 520px;}
        25%{top: 20%; left: 500px;}
        50%{top: 22%; left: 490;}
        75%{top: 17%; left: 530px;}
        100%{top: 20%; left: 510px;}
    }
    .contenedor-txtError span{
        font-family: sans-serif;
        font-size: 42px;
        font-weight: bold;
    }
    .contenedor-txtError p{
        font-family: sans-serif;
        font-size: 22px;
        font-weight: bold;
    }
</style>
<a href="index.html" class="aIndex">VOLVER AL INICIO</a>
<style>
    .aIndex{
        font-weight: bold;
        font-family: monospace;
        padding: 15px;
        position: absolute;
        text-decoration: none;
        font-size: 25px;
        color: #ff9100;
        top: 80%;
        background-color: rgb(8, 8, 68);
        border-radius: 5px;
    }
</style>

<!-- responsive media -->
<style>
    @media (max-width: 1023px) and (min-width: 767px){
        /* pantalla */
        .pantalla{
            width: 330px;
            height: 340px;
            left: 54%;
        }

        /* mano */
        .mano{
           top: 30%;
           width: 120px;
           height: 120px;
       }

       /* joystick*/
       .mando{
            width: 100px;
            height: 65px;
        }

       /* texto */
        .contenedor-error{
        width: 90%;
        height: 430px;
        }
        .contenedor-txtError{
            width: 280px;
            height: auto;
            top: 18%;
            left: 400px;
            animation: txterror 4s infinite 2s;
        }
        @keyframes txterror{
            0%{top: 19%; left: 400px;}
            25%{top: 20%; left: 395px;}
            50%{top: 19%; left: 420;}
            75%{top: 21%; left: 430px;}
            100%{top: 20%; left: 425px;}
        }
    }
</style>

<!-- responsive movil -->
<style>
    @media (max-width: 472px) and (min-width: 300px){
        /* boton de volver al inicio */
        .aIndex{
        top: 81%;
        }
        /* pantalla */
        .pantalla{
            width: 240px;
            height: 250px;
            left: 1%;
            top: 30px;
            transform: perspective(0px);
        }

        /* mano */
        .mano{
           position: absolute;
           height: 0;
           width: 0;
        } 

        /* mando */
        .mando{
            width: 109px;
            height: 74px;
            animation: volador 2s infinite 1s;
            transform: rotate(0deg);
            top: 60%;
            left: 65px;
        }
        @keyframes volador{
            0%{top: 65%; left: 65px;}
            25%{top: 67%; left: 65px;}
            50%{top: 65%; left: 65px;}
            75%{top: 67%; left: 65px;}
            100%{top: 65%; left: 65px;}   
        }
        .contenedor-error{
        width: 65%;
        height: 460px;
        top: 60px;
        }
        .contenedor-txtError{
            width: 224.5px;
            height: 131px;
            top: 9%;
            left: 9.5px;
            transform: perspective(0px) rotateY(0deg) rotate(0deg);
            animation: txterror 2s infinite 0s;
        }
        @keyframes txterror{
        0%{background-color: rgb(190, 26, 21);}
        50%{background-color: rgb(44, 206, 4);}
        100%{background-color: rgb(19, 22, 189);}
        }
        .contenedor-txtError span{
        color: red;
        -webkit-text-stroke: 1px black;
        font-size: 28px;
        }
        .contenedor-txtError p{
            font-family: sans-serif;
            font-size: 16px;
            font-weight: bold;
        }
    }
</style>
</body>
</html>