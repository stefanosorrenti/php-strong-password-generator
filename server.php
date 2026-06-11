<?php
$length = isset($_GET["length"]) ?  $_GET["length"] : '' ;

if($length && !is_numeric($length) || $length  > 20 || $length < 0) {
    
     
} else {
     echo 'OK';
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
            <input type="number" name="length" id="length" min="0" max="20" required>
            <button>Genera</button>
        </form>

    </div>

    <span><?php echo 'Password generata:'  ?></span>

</body>

</html>