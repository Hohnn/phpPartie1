<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1 php variables</title>
</head>
<body>
    <p>Exo 1</p>
    <?php
        $name = "toto";
        echo $name;
    ?>

    <p>Exo 2</p>
    <?php
        $lastname = "samson";
        $firstname = "JB";
        $age = 29;
        echo $lastname, $firstname, $age
    ?>

    <p>Exo 3</p>
    <?php
        $km = 1;
        echo $km;
        $km = 3;
        echo $km;
        $km = 125;
        echo $km;
    ?>

    <p>Exo 4</p>
    <?php
        $string = 'string';
        $int = 10;
        $float = 10.5;
        $bool = true;
        echo "$string, $int, $float, $bool"
    ?>

    <p>Exo 5</p>
    <?php
        $typeint;
        echo $typeint;
        $typeint = 10;
        echo $typeint
    ?>

    <p>Exo 6</p>
    <?php
        $name = 'JB';
        echo "Bonjour $name, comment vas tu ?"
    ?>

    <p>Exo 7</p>
    <?php
        echo "Bonjour $lastname $firstname, tu as $age ans"
    ?>

    <p>Exo 8</p>
    <?php
        $calc1 = 3 + 4;
        $calc2 = 5 * 20;
        $calc3 = 45 / 5;
        echo "$calc1 , $calc2 , $calc3 , ", $calc1 * $calc2
    ?>
</body>
</html>