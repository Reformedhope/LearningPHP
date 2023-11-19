


<form action = "madlibs.php" method = "get">
   Verb(ing):<input type = "text" name = "verbingOne"></br>
   Place:<input type = "text" name = "nounPlace"></br>
   Holiday Song:<input type = "text" name = "holidaySong"></br>

   Adjective:<input type = "text" name = "adjectiveOne"></br>
   Adjective:<input type = "text" name = "adjectiveTwo"></br>
   Your friend:<input type = "text" name = "yourFriend"></br>
   Verb(ed):<input type = "text" name = "verbTwo"></br>
   Verb(ed):<input type = "text" name = "verbThree"></br>
   Amount of Time:<input type = "text" name = "amountOfTime"></br>
   

<input type="submit">

</form>

<?php
$verbingOne = isset($_GET["verbingOne"]) ? htmlspecialchars($_GET["verbingOne"]) : "doing something";
$nounPlace = isset($_GET["nounPlace"]) ? htmlspecialchars($_GET["nounPlace"]) : "a place";
$holidaySong = isset($_GET["holidaySong"]) ? htmlspecialchars($_GET["holidaySong"]) : "a holiday song";


$adjectiveOne = isset($_GET["adjectiveOne"]) ? htmlspecialchars($_GET["adjectiveOne"]) : "adjectiveOne";
$adjectiveTwo = isset($_GET["adjectiveTwo"]) ? htmlspecialchars($_GET["adjectiveTwo"]) : "adjectiveTwo";
$yourFriend = isset($_GET["yourFriend"]) ? htmlspecialchars($_GET["yourFriend"]) : "yourFriend";
$verbTwo = isset($_GET["verbTwo"]) ? htmlspecialchars($_GET["verbTwo"]) : "verbTwo";
$verbThree = isset($_GET["verbThree"]) ? htmlspecialchars($_GET["verbThree"]) : "verbThree";
$amountOfTime = isset($_GET["amountOfTime"]) ? htmlspecialchars($_GET["amountOfTime"]) : "verbTwo";



echo "I was $verbingOne  at the $nounPlace  the other day when I heard $holidaySong  come on the radio.</br>";
echo "I was feeling really $adjectiveOne  and I’m pretty sure I looked super $adjectiveTwo because $yourFriend  walked in and almost $verbTwo. Seriously, she $verbThree  for close to $amountOfTime!"




?>



<!-- <P>
    I was feeling really ________ (adjective) and I’m pretty sure I looked super ________ because ________ (your friend) walked in and almost ________ (verbed). Seriously, she ________ (verbed) for close to ________ (amount of time)!

This time every year I ________ (verb) all the time because I get really exciting thinking about holiday ________ (plural noun)! 
That’s why I was sitting at the ________ (the place from up top): I was really hoping ________ (a relative) would come by and give me at least ________ (a number) pieces of holiday ________ (food item)!

That didn’t happen, but suddenly ________ (a relative) ________ (verbed) by in a huge________ (noun) on wheels dressed up as ________ (a singer).
 I know ________ (adjective) things happen around the holidays, but this didn’t make any sense! 
 I picked up the phone to call ________ (a person), but the phone turned into a big pile of ________ (a messy food) and dripped all the way down to my ________ (a body part)!

Then my alarm clock went off for about ________ (amount of time). It was all a dream! I had a ton of ________ (a holiday food) before I went to sleep.
 Maybe that’s what gave me the crazy dream!</P>
 -->
