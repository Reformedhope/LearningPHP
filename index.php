<?php

function getPermission (){
    sleep(2);
    return 1;
}

Function getUsers(){
    sleep(2);

    return['John', 'Jane'];
}

for ($i = 0; $i < count(getUsers()); $i++)
echo $i;
?>
