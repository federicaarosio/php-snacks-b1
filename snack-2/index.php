<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php 

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>

    <form action="./index.php" method="$_GET">
        <p>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="mail">Mail:</label>
            <input type="text" name="mail" id="mail">
        </p>
        <p>
            <label for="age">Age:</label>
            <input type="text" name="age" id="age">
        </p>
        <button>
            Submit
        </button>
    </form>

    <p>
        <?php
        if (empty($mail) && empty($name) && empty($age)) {
        } 
        elseif ((strlen($name) > 3) && (str_contains($mail, '@')) && (str_contains($mail, '.')) && (is_numeric($age)))  {
            echo 'accesso riuscito';
        } else {
            echo 'accesso negato';
        }

        ?>
    </p>



</body>

</html>