<?php require_once 'nav.php'; ?>

<?php

function sum(bool $dumpArr, int|float ...$nums) {
    if ($dumpArr){
    var_dump($nums);
    }
    return array_sum($nums);
}

echo sum(5,2,9,1);

?>

