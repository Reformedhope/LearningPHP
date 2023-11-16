
    <?php 
    declare(strict_types = 1);
 function getStatus( int | float $paymentStatus, bool $showMessage = true) : ?string
  {
    $message = match($paymentStatus){
        1 => 'Success',
        2 => 'denied',
        default => 'Unknown'
    };
    if ($showMessage){

    var_dump($message);
    return null;
 }
 return $message;
}
 $statusMessage = getStatus(1);
 var_dump($statusMessage);


?> 



<h1>
    Learning php
</h1>