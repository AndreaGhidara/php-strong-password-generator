<?php 
    //Starto la sessione per poter vedere e stampare i dati in _SESSION
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Font-Awesome -->
    <script src='https://kit.fontawesome.com/904cc76917.js' crossorigin= 'anonymous'></script>
</head>

<body class="bg-black text-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center">
                    <h1 class="pe-3">
                        This is new Password
                    </h1>
                    <span class="fs-5">
                        <i class="fa-solid fa-lock-open"></i>
                    </span>
                </div>
                <div class="alert alert-primary" role="alert">
                    <span class="pe-3">
                        <i class="fa-solid fa-key"></i>
                    </span>
                    <?php
                        echo $_SESSION['password'];
                        // var_dump($_SESSION);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>