<?php
$length = isset($_GET["length"]) ?  $_GET["length"] : '';
$error = false;

if ($length && !is_numeric($length) || is_numeric($length) && $length < 10 || $length > 20) {
    $error = true;
    echo 'ERRORE';
} else {

    function getRandomPassword($passLength)
    {


        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

        $passGen = '';

        
        if ($passLength) {
            
            for ($i = 0; $i < $passLength; $i++) {

                $startNumber = rand(0, 61);
                
                $singleChars = substr($chars, $startNumber, 1);
                $passGen .= $singleChars;
            };
        };

        return $passGen;
    };
};




?>