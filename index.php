<?php 

function isLeap(int $year): bool {
    return ($year % 4 === 0 && ($year % 100 !== 0 || $year % 400 === 0));
}

var_dump(isLeap(2000)); // Should return true
var_dump(isLeap(2022)); // Should return false

?>




<h1>
    Learning php
</h1>