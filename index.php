<?php

//includiamo il file con le funzioni
include './function.php';

//controlliamo che esista
if (isset($_GET['lengthPsw'])) {
    //prendiamo i dati che ci servono
    $lengthPsw = $_GET['lengthPsw'];
    $repetition = $_GET['RepeatCharacter'];

    $acceptLetterControl = $_GET['acceptLetters'];
    $acceptNumberControl = $_GET['acceptNumber'];
    $acceptSimbolControl = $_GET['acceptSymbol'];


    //Genero la nuova pasword
    $result = generatePassword($lengthPsw, $repetition, $acceptLetterControl, $acceptNumberControl, $acceptSimbolControl);

    //Starto la sessione per condividere i dati
    session_start();
    //passo in session il risultato
    $_SESSION['password'] = $result;

    header("Location: ./success.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PassWord generator</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Font-Awesome -->
    <script src='https://kit.fontawesome.com/904cc76917.js' crossorigin= 'anonymous'></script>
</head>

<body class="bg-black text-white">

    <div class="container text-start">
        <div class="row">
            <div class="col d-flex align-items-center">
                <h1 class="pe-3">
                    Strong Password generator
                </h1>
                <span class="fs-5"> 
                    <i class="fa-solid fa-lock"></i>
                </span>
            </div>
        </div>
    </div>

    <!-- Si vedre solo se esiste un risultato -->
    <?//php if (isset($result)) { ?>
        <!-- <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-primary" role="alert">
                        <?//php echo $result;
                        // echo var_dump($repetition); 
                        ?>
                    </div>
                </div>
            </div>
        </div> -->
    <?//php } ?>

    <div class="container text-black bg-primary-subtle p-3 rounded-4 ">
        <form action="index.php" method="GET">
            <!-- Prima row -->
            <div class="row row-cols-lg-2">
                <div class="col d-flex justify-content-end align-items-center">
                    <label for="lengthPsw">
                        <h4 class="fw-bold">Inserisci la lunghezza della password :</h4>
                    </label>
                </div>
                <div class="col">
                    <input type="number" min="5" class="form-control w-25" placeholder="length password" id="lengthPsw" name="lengthPsw" aria-label="Last name">
                </div>
            </div>
            <!-- Seconda row -->
            <div class="row row-cols-lg-2 my-5">
                <div class="col d-flex justify-content-end align-items-center">
                    <h4 class="fw-bold">Consenti ripetizione di uno o più caratteri :</h4>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="RepeatCharacter" value="1" id="yesRepeatCharacter" checked>
                        <label class="form-check-label" for="yesRepeatCharacter">
                            Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="RepeatCharacter" value="0" id="noRepeatCharacter">
                        <label class="form-check-label" for="noRepeatCharacter">
                            No
                        </label>
                    </div>
                </div>
            </div>
            <!-- Terza row -->
            <div class="row row-cols-lg-2 my-5">
                <div class="col d-flex justify-content-end align-items-center">
                    <h4></h4>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input disbled" type="checkbox" value="1" name="acceptLetters" id="acceptLetters" checked>
                        <label class="form-check-label" for="acceptLetters">
                            Letters
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="acceptNumber" id="acceptNumber">
                        <label class="form-check-label" for="acceptNumber">
                            Numeri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="acceptSymbol" id="acceptSymbol">
                        <label class="form-check-label" for="acceptSymbol">
                            Simboli
                        </label>
                    </div>
                </div>
            </div>
            <!-- Bottoni row -->
            <div class="row my-5">
                <div class="col d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-success mx-1">Invia</button>
                    <button type="reset" class="btn btn-danger mx-1">Cancella</button>
                </div>
            </div>


        </form>
    </div>

</html>