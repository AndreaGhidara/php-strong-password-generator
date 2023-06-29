<?php

function generatePassword($lenght, $repetition,  $acceptLetterControl, $acceptNumberControl, $acceptSimbolControl)
{

    $result = "";

    $lowerCase = "abcdefghiJklmnopqrstuvwxyz";
    $uppercase = strtoupper($lowerCase);
    $numbers = "0123456789";
    $symbol = "~!@#$%^&*(){}[],./?";

    $allowedChar = "";

    if ($acceptLetterControl) {
        $allowedChar .= $lowerCase;
        $allowedChar .= $uppercase;
    }

    if ($acceptNumberControl) {
        $allowedChar .= $numbers;
    }

    if ($acceptSimbolControl) {
        $allowedChar .= $symbol;
    }

    if ($allowedChar == "") {
        $allowedChar .= $lowerCase .  $uppercase . $numbers . $symbol;
    }

    $charNumber = strlen($allowedChar);

    if ($charNumber < $lenght) {
        $lenght = $charNumber;
    }
    

    // for ($i=0; $i < $lenght ; $i++) { 
    //     $randoNum = rand(0,$charNumber-1);
    //     $currentChar = $allowedChar[$randoNum];
    //     $result .= $currentChar;
    // }

    while (strlen($result) < $lenght) {
        $randoNum = rand(0, $charNumber - 1);
        $currentChar = $allowedChar[$randoNum];

        if ($repetition || !str_contains($result, $currentChar)) {
            $result .= $currentChar;
        }
    }


    return htmlspecialchars($result);
}
