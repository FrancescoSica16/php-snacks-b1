<?php 

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!-- Utilizzare questo array: https://pastebin.com/CkX3680A
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class= "wrapper gray">
        <ul>
            <?php  foreach( $db["teachers"] as $insegnante) { ?>

                <li>
                    <?php  echo $insegnante["name"] . " " . $insegnante["lastname"] ; ?>       
                </li>

            <?php } ?>
        </ul>
            
        

    </div>  

    <div class= "wrapper green">
       
    </div>  


    
</body>
</html>