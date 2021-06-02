<?php

$maxNumber = 15;
$numbersList = [];

// for( $i = 1; $i<=15; $i++) {
//     $randomNumber = rand(1, 15);
    
//     if(!in_array($randomNumber, $numbersList)) {
//         $numbersList[] = $randomNumber;
//     } else {
//         $i--;
//     }
// }

// oppure 

do{
    $randomNumber = rand(1, 16);

    if (!in_array($randomNumber, $numbersList)) {
        $numbersList[] = $randomNumber;

    }
} while (count($numbersList) < 16)


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        for($i = 1;$i < count($numbersList); $i++) {
            echo 'numero casuale: ' . $numbersList[$i] . '<br>';
        }


?>
</body>
</html>