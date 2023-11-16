
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
}
 getStatus(1, true);


?> 



<h1>
    Learning php
</h1>