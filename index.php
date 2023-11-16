
    <?php
   
if (true){
 function getStatus() {
    $paymentStatus = 2;
    $message = match($paymentStatus){
        1 => 'Success',
        2 => 'denied',
        default => 'Unknown'
    };

    var_dump($message);
 }
}
 getStatus();


?> 



<h1>
    Learning php
</h1>