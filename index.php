<?php

include './function.php';

if (isset($_GET['lengthPsw'])) {
    $lengthPsw = $_GET['lengthPsw'];
    $repetition = $_GET['RepeatCharacter'];

    $acceptLetterControl = $_GET['acceptLetters'];
    $acceptNumberControl = $_GET['acceptNumber'];
    $acceptSimbolControl = $_GET['acceptSymbol'];



    $result = generatePassword($lengthPsw, $repetition, $acceptLetterControl, $acceptNumberControl, $acceptSimbolControl);

    session_start();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>Strong PassWord generator</h1>
                <h2>genera una psw sicura</h2>
            </div>
        </div>
    </div>
    <?php if ($result) { ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-primary" role="alert">
                        <?php
                        echo $result;
                        // echo var_dump($repetition); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="container bg-warning p-3 rounded-4 ">
        <form action="index.php" method="GET">

            <div class="row row-cols-lg-2">
                <div class="col d-flex justify-content-end align-items-center">
                    <label for="lengthPsw">
                        <h4>Inserisci la lunghezza della password :</h4>
                    </label>
                </div>
                <div class="col">
                    <input type="number" min="5" class="form-control w-25" placeholder="length password" id="lengthPsw" name="lengthPsw" aria-label="Last name">
                </div>
            </div>

            <div class="row row-cols-lg-2 my-5">
                <div class="col d-flex justify-content-end align-items-center">
                    <h4>Consenti ripetizione di uno o più caratteri:</h4>
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

            <div class="row my-5">
                <div class="col d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary mx-1">Invia</button>
                    <button type="reset" class="btn btn-secondary mx-1">Annulla</button>
                </div>
            </div>


        </form>
    </div>

</html>