<?php

$name = '';
$email = '';
$age = '';

if(key_exists('name', $_GET)) {
    $name = $_GET['name'];
    }

if(key_exists('email', $_GET)) {
    $email = $_GET['email'];
    }

if(key_exists('age', $_GET)) {
    $age = $_GET['age'];
    }

$result = true;

if(strlen($name) < 3){
    $result = false;
}

// if(strpos($email, '@')) {
//     $result = false;
// }

if(strpos($email, '.', strpos($email, '@'))) {
    $result = false;
}

if(!is_numeric((int)($age))) {
    $result = false;
}

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
    
    <p>
    <?php

    echo $result ? 'accesso riuscito' : 'accesso negato'
    

    ?>
    </p>


</body>
</html>