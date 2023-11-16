
    <?php
   

 function getStatus($paymentStatus, $showMessage = true) {
    $message = match($paymentStatus){
        1 => 'Success',
        2 => 'denied',
        default => 'Unknown'
    };
    if ($showMessage){

    var_dump($message);
 }
 return $message;
}
 $statusMessage = getStatus(1);
 var_dump($statusMessage);


?> 



<h1>
    Learning php
</h1>