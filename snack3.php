<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
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

        $keysMap = array_keys($posts);

        for($i = 0; $i< count($posts); $i++ ) {
            $key = $keysMap[$i];

            $value = $posts[$key];

            echo '<li>' . $key ;

            echo '<ul>';

            for($y = 0; $y < count($value); $y++) {
                $singlePost = $value[$y];

                echo '<li>';

                echo '<strong>' . $singlePost['title'] . '</strong><br>';
                echo '<em>' . $singlePost['author'] . '</em><br>';
                echo '<p>' . $singlePost['text'] . '</p>';

                echo '</li>';
            }

            echo '</ul>';

            echo '</li>';

        }


?>
</body>
</html>