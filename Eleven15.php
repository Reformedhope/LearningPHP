<?php
    $fullName = 'John Smith';
    $fullName = 100;
    const FULL_NAME = "John Smith";
    $message = "Hello, my name is ";
    $message .= FULL_NAME;

    var_dump($message. FULL_NAME);


?> 


//----------

<?php
   

   $score = 100;

   if ($score >  90) {
    var_dump("winner");
   }elseif ($score > 80){
    var_dump("loser");
    }elseif ($score > 0){
    var_dump("MEAT");
   }else{
    var_dump("paw");
   }


?> 

//---------

<?php
   

   $paymentStatus = 1;


switch( $paymentStatus){
    case 1:
        var_dump('success');
        break;
    case 2: 
        var_dump('Pending');
        break;
    case 3: 
        var_dump('Failed');
        break;
    default:
        var_dump('unknown');
}


?> 


  