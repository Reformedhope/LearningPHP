
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



<h1>
    Learning php
</h1>