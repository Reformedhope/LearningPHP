function isLeap(int $year): bool {
    return ($year % 4 === 0 && ($year % 100 !== 0 || $year % 400 === 0));
}

var_dump(isLeap(2000)); // Should return true
var_dump(isLeap(2022)); // Should return false

?>
//------------
<?php 

echo PHP_INT_MAX . "<br>";
echo PHP_INT_MIN . "<br>";
echo PHP_FLOAT_MIN;

?>
//------------

<?php 

echo PHP_INT_MAX . "<br>";
echo PHP_INT_MIN . "<br>";
echo PHP_FLOAT_MIN;

?>

//------------

<?php 
//alternative to using the cost keyword
if (!defined('FOO')){


//define constants within a class= reason for existing.
//used within a conditional statement
define('FOO', 'Hello World');
}
echo FOO;

?>

//------------

<?php 
$names = ['John', 'Lyle', 'paul'];

print_r($names);

unset ($names[1]);




$names = array_values($names);

print_r($names);
?>

//------------

<?php 
//rounding values
// echo floor(6.9);
// echo floor(-0.1);
// echo ceil(5.454);

echo round(5.455, 2, PHP_ROUND_HALF_DOWN);
?>

//------------
<?php 
// admin - 1, mod - 1, gus - any other number

$permision = 1;
if ($permission === 1){
    ?> "<h1> hello admin</h1>";<?php
} else if ($permission === 2) {
    ?> "<h1> hello mod</h1>"<?php
} else {
    ?> "<h1> hello guest</h1>"<?php
}



?>
//------------
<?php $permissions = 1 ;?>

<?php if ($permissions === 1): ?>
    <h1> Hello admin </h1>
<?php elseif ($permissions === 2): ?>
    <h1> Hello Mod </h1>
<?php else : ?>
<h1> Hello guest</h1>

    <?php endif; ?>
//------------
<?php if (getPermission() === 1): ?>
    <h1> Hello admin </h1>
<?php elseif (getPermission() === 2): ?>
    <h1> Hello Mod </h1>
<?php else : ?>
<h1> Hello guest</h1>

    <?php endif; ?>
//-----Conti
<?php

function getPermission (){
    sleep(2);
    return 1;
}

Function getUsers(){
    sleep(2);

    return['John', 'Jane'];
}

for ($i = 0; $i < count(getUsers()); $i++)
echo $i;
?>


//------------

function getPermission (){
    sleep(2);
    return 1;
}

Function getUsers(){
    sleep(2);

    return['John', 'Jane'];
}

for ($i = 0; $i < count(getUsers()); $i++)
echo $i;

//------------



//------------



//------------



//------------



//------------



//------------



//------------



//------------






