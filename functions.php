<?php
$length = isset($_GET["length"]) ?  $_GET["length"] : '';

$checkedValue = '';
$onlyNumbers =  isset($_GET["onlyNumbers"]) ?  $checkedValue .= 'number ' : '';
$onlyChar = isset($_GET["onlyChar"]) ?  $checkedValue .= 'char ' : '';
$onlySymb = isset($_GET["onlySymb"]) ?  $checkedValue .= 'symb ' : '';

var_dump($onlyNumbers);
var_dump($onlyChar);
var_dump($onlySymb);
var_dump($checkedValue);


$error = false;

if ($length && !is_numeric($length) || is_numeric($length) && $length < 10 || $length > 20) {
    $error = true;
    echo 'ERRORE';
} else {

    function getRandomPassword($passLength, $filters)
    {


        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $numb = '0123456789';
        $symb = '~!@#\$%^&*_-+=|(){}:;"<>,.?/';
        $totalChars = '';
        $passGen = '';



        if ($filters === '') {
            $totalChars = $numb.$chars.$symb;
        };


        if (str_contains($filters, 'number')) {
            $totalChars = $numb;
        };


        if (str_contains($filters, 'char')) {
            $totalChars .= $chars;
        };


        if (str_contains($filters, 'symb')) {
            $totalChars .= $symb;
        };

        


        if ($passLength) {

            for ($i = 0; $i < $passLength; $i++) {

                $startNumber = rand(0, strlen($totalChars) - 1);

                $singleChars = substr($totalChars, $startNumber, 1);
                $passGen .= $singleChars;
            };
        };


        return $passGen;
    };
};
