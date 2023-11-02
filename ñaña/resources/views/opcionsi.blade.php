<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GRACIAS POR ACEPTAR  </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <style>
            h1{
                font-size: 32px;
                color: #333;
            }
            img{
                margin-top: 30px;
                max-width: 100%;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, o, 0.1);
            }
            video{
                margin-top: 30px;
                height: 300px;
                width: 500px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, o, 0.1);
            }
        </style>
        <script>
            function accionParaCuandoEllaDigaQueSi(){
                alert{"¡Ahora ya somos socios!"};
            }

            function mueveElBoton(){
                const width = window.innerWidth;
                const heigth = window.innerHeigth;

                const newWidth = Math.random
            }
        </script>
    </head>
    <body>
        <div class="container text-center mt-4">
           <div class="row">
                <div class="col-sm-6 col-lg-6">
                    <h1>ERES LO MAS LINDO EN MI VIDA  </h1>
                    <p>En cada latido de mi corazón, en cada suspiro que escapa de mis labios, en cada pensamiento que cruza mi mente, ahí estás tú, preciosa , te amo </p>
                    <video class="img-fluid" src="{{asset("img/baby.mp4")}}" controls></video>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <h1>MORCITO SORPRESA </h1>
                    <video class="img-fluid" src="{{asset("img/mor.mp4")}}" controls autoplay></video>
                </div>
           </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>
