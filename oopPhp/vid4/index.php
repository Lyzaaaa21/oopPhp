<?php
    include 'person.inc.php'

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // $pet01 = new Pet();

    $pet01 = new Person ();

    echo $pet01->owner();

    ?>

</body>
</html>