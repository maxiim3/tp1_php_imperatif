<?php
include_once 'function.php';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tables de multiplication</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>TP1 PHP imp&eacute;ratif</h1>
            <ol>
<!--                Si  je clique le lien revoie vers GET[number] (number=9 ici) jaurai onc un GET-->
                <li><a href="?number=9">Table de 9.</a></li>
                <li>
                    <form action="index.php" method="get">
                        <label>Entrez un nombre entre 1 et 20
<!--                            number est ma variable pour le nomnbre de tables-->
                            <input type="number" name="number" placeholder=" n = ... " min="1" max="20" required>
                        </label>
                        <button type="submit" >Générer mon tableau</button>
                    </form>
                </li>
                <li><a href="index.php">Reset</a></li>
            </ol>
        </header>
        <main>
            <?php
            if (isset($_GET['number'])){
                $val = $_GET['number']  ;
                tableDeMultiplication($val);
            }
            else{
                echo 'Bienvenue,'
                    .'<br>'
                    .'Cliquez sur le lien ci dessus ou entre un nombre...';
            }
            ?>
        </main>
    </div>
</body>
</html>