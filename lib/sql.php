<?php

function sqlConnect(){
   return mysqli_connect('localhost','root','','test');
}

function getFromDB($sql){
    $resource = sqlConnect();
    $resultat = mysqli_query($resource,$sql);

    $tmp=[];
    while(false != $row = mysqli_fetch_assoc($resultat)){
        $tmp[]=$row;
    }
    return $tmp;
}

