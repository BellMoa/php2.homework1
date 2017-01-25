<?php
require_once  __DIR__ .'/../lib/sql.php';
function News_getAll(){
    $sql="SELECT * FROM news ORDER BY date DESC";
    return getFromDB($sql);
}

function newsInsert($data){
    $sql="INSERT INTO news (title,text,date)
          VALUES ('".$data['title']."','".$data['text']."','".$data['date']."')
";
    insertIntoDB($sql);

}