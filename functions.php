<?php
$length = isset($_GET["length"]) ?  $_GET["length"] : '';

$checkedValue = '';
$onlyNumbers =  isset($_GET["onlyNumbers"]) ?  $checkedValue .= 'number ' : '';
$onlyChar = isset($_GET["onlyChar"]) ?  $checkedValue .= 'char ' : '';
$onlySymb = isset($_GET["onlySymb"]) ?  $checkedValue .= 'symb ' : '';
$error = null;

if ($length && !is_numeric($length) || is_numeric($length) && $length < 10 || $length > 20) {
    $error = true;
    header("Location: ./server.php");
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

    $error = false;
        return $passGen;
    };
};
