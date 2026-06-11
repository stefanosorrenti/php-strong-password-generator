<?php
require_once("./functions.php")
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

            <label for="onlyNumbers">
                Solo numeri
                <input type="checkbox" name="onlyNumbers" id="onlyNumbers">
            </label>

            <label for="onlyChar">
                Solo lettere
                <input type="checkbox" name="onlyChar" id="onlyChar">
            </label>
            <label for="onlySymb">
                Solo simboli
                <input type="checkbox" name="onlySymb" id="onlySymb">
            </label>
            <button>Genera</button>
        </form>

    </div>

    <span><?php echo $error ? '' : 'Password generata: ' . getRandomPassword($length, $checkedValue) ?></span>

</body>

</html>