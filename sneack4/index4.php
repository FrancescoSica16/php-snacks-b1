<!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 
$classe = [
    [
        "nome" => "lui",
        "cognome" => "ipotetico",
        "voti" => [6,4,5,3,7],
    ],
    [
        "nome" => "lei",
        "cognome" => "ipotetica",
        "voti" => [6,4,5,3,7],
    ],
    [
        "nome" => "giovanni",
        "cognome" => "giovannino",
        "voti" => [6,4,5,3,7],
    ],
    [
        "nome" => "peppe",
        "cognome" => "peppino",
        "voti" => [1,4,1,3,7],
    ],
];

$media = 0;
$sumVoti = 0;

?>



<ul>
    <?php foreach ($classe as $studente) {  ?>
        <li>

        <?php echo $studente["nome"] . $studente["cognome"] . " " 
        . array_sum($studente["voti"]) / count($studente["voti"]); ?>
        
        </li> 
    <?php } ?>
    
    
</ul>



