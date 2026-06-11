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



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore password</title>
</head>

<!-- Header -->
<header>
    <h1>Generatore password</h1>
</header>

<!-- Body -->

<body>
    <!-- FORM -->
    <div>

        <form>
            <label for="length">Lunghezza della password</label>
            <input type="number" name="length" id="length" min="10" max="20" required>
            <button>Genera</button>
        </form>

    </div>

    <span><?php echo $error ? '' : 'Password generata: ' . getRandomPassword($length) ?></span>

</body>

</html>