<?php 
$matches = [
    [
    'team_1' =>'Inter',
    'team_2' => 'Juventus',
    'point_team_1' => '2',
    'point_team_2' => '0',
    ],
    [
    'team_1' =>'Palermo',
    'team_2' => 'Catania',
    'point_team_1' => '5',
    'point_team_2' => '1',
    ],
    [
    'team_1' =>'Germania',
    'team_2' => 'Italia',
    'point_team_1' => '0',
    'point_team_2' => '2',
    ],
]
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
    <ul>
        <?php
            for($i =0; $i<count($matches); $i++ ) {
                $partitaCorrente = $matches[$i];
                $testoFinale = '';
            

                //variabili nomi squadre
                $nomiSquadre = $partitaCorrente['team_1'] . ' - ' . $partitaCorrente['team_2'];

                $puntiSquadre =  $partitaCorrente['point_team_1'] . ' - ' . $partitaCorrente['point_team_2'];
                
                $testoFinale = $nomiSquadre . ' | ' . $puntiSquadre;
            ?>

        <li>
        <?php
            echo $testoFinale;
        ?>
        </li>
    

        <?php
            }
        ?>
    </ul>
</body>
</html>