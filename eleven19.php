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





//------------





//------------





//------------





//------------

