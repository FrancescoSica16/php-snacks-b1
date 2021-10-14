<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->



<?php 
$arraynum = []; 
?>

<?php while (count($arraynum) < 15) { ?>
    <?php  $numrandom = rand(1, 15)  ; ?>
   
        <?php if(!in_array( $numrandom , $arraynum) ) { ; ?>
           <?php $arraynum[] = $numrandom; ?>
           
        <?php }; ?>
    
    
    <?php }; ?>

<?php 
var_dump($arraynum) ; 
?>

    

