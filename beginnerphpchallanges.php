$color = ['black', 'brown','red','orange','yellow','green','blue','violet','gray','white'];

function colorCode($color){
}if ($color == "black"){
var_dump("0");
}else if ($color == "brown"){
var_dump("1");
}else if ($color == "red"){
var_dump("2");
}else if ($color == "orange"){
var_dump("3");
}else if ($color == "yellow"){
var_dump("4");
}else if ($color == "green"){
var_dump("5");
}else if ($color == "blue"){
var_dump("6");
}else if ($color == "violet"){
var_dump("7");
}else if ($color == "gray"){
var_dump("8");
}else if ($color == "white"){
var_dump("9");
}else{
var_dump("not a correct color");
}

?>

//--------



declare(strict_types=1);

function colorCode(string $color): int
{
    $colors = [
        "black" => 0,
        "brown" => 1,
        "red" => 2,
        "orange" => 3,
        "yellow" => 4,
        "green" => 5,
        "blue" => 6,
        "violet" => 7,
        "gray" => 8, // Corrected from "grey"
        "white" => 9
    ];

    return $colors[$color];
}

//-----


<?php 
declare(strict_types=1); // when you declare strict make sure <?php is at the very top
function colorCode(string $color): int
{
    $colors = [
        "black" => 0,
        "brown" => 1,
        "red" => 2,
        "orange" => 3,
        "yellow" => 4,
        "green" => 5,
        "blue" => 6,
        "violet" => 7,
        "gray" => 8,
        "white" => 9
    ];

    return $colors[$color];
}
?>

//----------------
declare(strict_types=1);
 
function colorCode(string $color): int
{
    $colors = [
      "black" => 0,
      "brown" => 1,
      "red" => 2,
      "orange" => 3,
      "yellow" => 4,
      "green" => 5,
      "blue" => 6,
      "violet" => 7,
      "grey" => 8,
      "white" => 9
    ];
 
    return $colors[$color];
}


//----------------------------

declare(strict_types=1);
 
function twoFer(string $name = "you"): string
{
    return "One for {$name}, one for me.";
}

//-----------------

<?php 

function isLeap(int $year): bool {
    return ($year % 4 === 0 && ($year % 100 !== 0 || $year % 400 === 0));
}

var_dump(isLeap(2000)); 
var_dump(isLeap(2022)); 

?>



