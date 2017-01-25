<?php
if (!empty($_POST)){
    $data=[];
   if (!empty($_POST['title'])){
    $data['title'] = $_POST['title'];
   }
   if (!empty($_POST['text'])){
      $data['text'] = $_POST['text'];
   }
   if (!empty($_POST['date'])){
    $data['date']=$_POST['date'];
   }
   if (!empty($_POST['time'])){
       $data['time'] = $_POST['time'];
   }

   if (isset($data['title']) && isset($data['text']) && isset($data['date']) && isset($data['time'])){

   }

return false;
}


require __DIR__ . '/view/add.php';