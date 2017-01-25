<?php
require_once  __DIR__ .'/../lib/sql.php';
function News_getAll(){
    $sql="SELECT * FROM news";
    return getFromDB($sql);
}