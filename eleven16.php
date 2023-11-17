<?php 
function example () {
    echo "exampled called!";


    return true;
}



  var_dump( true && example());


?> 


//-----

<?php 
$a = 1;
do  {
    echo $a , "<br>";

$a++;

}while ($a <= 0 );


?>

//-----

<?php 
for ($i = 1; $i <= 15;  $i++) {
    echo $i . ",br>";
    

}


?>

//------


<?php 
for ($i = 1; $i <= 15;  $i++) {
    echo $i . ",br>";
    if ($i === 6 ){
        // continue; 
        // Or break 
        // can be used

    }
    

}


?>


