<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ñaña</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        #container {
            text-align: center;
        }
        h1 {
            font-size: 32px;
            color: #333;
        }
        .buttons {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btn {
            margin: 10px;
            padding: 10px 20px;
            font-size: 18px;
            color: #fff;
            cursor: pointer;
        }
        #btnSi {
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        #btnSi:hover {
            background-color: #05ad0b;
        }
        #btnNo {
            background-color: #fd0505;
            border: none;
            border-radius: 5px;
        }
        #btnNo:hover {
            background-color: #d50303;
        }
        #btnNo {
            position: absolute;
        }
        img {
            margin-top: 30px;
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
   <script>
    function accionParaCuandoEllaDigaQueSi() {
        const respuesta = confirm("¿no me dejes en el olvido si preciosa?");
        if (respuesta) {
            window.location.href = "{{ url('opcionsi') }}";
        } else {
            alert("Espero que puedas considerarlo");
        }
    }
    function mueveElBoton() {
            const btnNo = document.getElementById("btnNo");
            const container = document.querySelector('.container');
            const containerRect = container.getBoundingClientRect();
            const btnRect = btnNo.getBoundingClientRect();

            const newLeft = Math.random() * (containerRect.width - btnRect.width);
            const newTop = Math.random() * (containerRect.height - btnRect.height);

            btnNo.style.left = newLeft + "px";
            btnNo.style.top = newTop + "px";
        }

        // Llamar a la función para mover el botón cada cierto intervalo
        setInterval(mueveElBoton, 300); // Cambia el intervalo según lo que desees
    </script>

</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>¿MI VIDA MIA TE EXTRAÑO MUCHO QUIERO ESTAR JUNTO ATI?</h1>
        <div class="buttons">
            <button onclick="accionParaCuandoEllaDigaQueSi()" id="btnSi" class="btn btn-success">SI</button>
            <button id="btnNo" class="btn btn-danger">NO</button>
        </div>
        <img class="img-fluid" src="{{ asset('img/ba.webp') }}" alt="" width="700">
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
