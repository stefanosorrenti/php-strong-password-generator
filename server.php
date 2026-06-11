<?php
require_once("./functions.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore password</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<!-- Header -->
<header class="bg-dark">
    <h1 class="text-center p-4 text-light">GENERATORE DI PASSWORD.</h1>
</header>

<!-- Body -->

<body>

    <!-- Main -->
    <main>

        <div class="container">

            <p class="p-4">
                Usa l'input per generare una password sicura. <br>
                Scegli i caratteri e, se necessario, anche il tipo di filtro ed il gioco è fatto.

            </p>

            <!-- Form Section -->
            <section class="card">

                <form class="form d-flex flex-column align-items-center gap-3 p-3" action="./server.php" method="GET">

                    <!-- Lenghth input -->
                    <div class="input-group-sm">
                        <label class="text-secondary" for="length">Lunghezza della password: </label>
                        <input class="form-control" type="number" name="length" id="length" min="10" max="20" required>
                    </div>

                    <!-- Filters inputs  -->
                    <div class="d-flex justify-content-center gap-2 input-group">
                        <div class=" form-check">
                            <label class="form-check-label" for="onlyNumbers">
                                <input type="checkbox" class="form-check-input" name="onlyNumbers" id="onlyNumbers">
                                Solo numeri
                            </label>
                        </div>

                        <div class=" form-check input-group-sm">
                            <label class="form-check-" for="onlyChar">
                                <input type="checkbox" class="form-check-input" name="onlyChar" id="onlyChar">
                                Solo lettere
                            </label>
                        </div>

                        <div class=" form-check">
                            <label class="form-check-" for="onlySymb">
                                <input type="checkbox" class="form-check-input" name="onlySymb" id="onlySymb">
                                Solo simboli
                            </label>
                        </div>

                    </div>

                    <button class="btn btn-primary">Genera</button>
                </form>
            </section>
            <!-- Form -->

        </div>

        <!-- Password -->

        <?php echo $error ? '' : '<span class="fs-3 bg-success rounded-pill p-1 text-center d-flex align-items-center flex-grow-0">Password generata:  ' . getRandomPassword($length, $checkedValue)  . '</span>' ?>


    </main>
    </div>

</body>

</html>