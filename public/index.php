<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Work+Sans:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />

    <title>Guess the number Game</title>
</head>

<body class="app">
    <div class="d-flex vh-100 w-100 align-items-center justify-content-center">
        <div class="game px-4">
            <p class="text-center txt-fredoka_one text-primary display-1 mb-1">dmpb</p>
            <p class="text-center txt-work_sans mb-4 txt-dark">(Juego de adivinanzas de números)</p>
            <p class="txt-work_sans txt-dark">Hemos seleccionado un número aleatorio entre 1 y 100. Vea si puede
                adivinarlo en 10
                turnos o menos. Le
                diremos si su estimación fue demasiado alta o demasiado baja.</p>
            <input type="number" id="numberInput" class="my-3 form-control" />
            <button id="submitButton" class="btn btn-primary d-block w-100 mb-2 txt-work_sans">Adivinar</button>
            <p id="guesses" class="txt-work_sans"></p>
            <p id="lastResult" style="color: white; padding: 5px;" class="txt-work_sans"></p>
            <p id="lowOrHi" class="txt-work_sans"></p>
            <button id="startNewGameButton" style="display: none;" class="btn btn-light txt-work_sans bg-white">Start new Game</button>
        </div>
    </div>

    <footer class="footer">
        <p class="mb-1">Creado por Daniel Ponce 😎</p>
        <a href="https://github.com/dmpb">My GitHub</a>
    </footer>

    <script src="script.js"></script>
</body>

</html>