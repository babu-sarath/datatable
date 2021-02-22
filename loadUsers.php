<?php

if($_SERVER['REQUEST_METHOD'] === 'POST' 
&& !empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
&&  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
&& $_SERVER['HTTP_REFERER']=="http://localhost/PHP/datatable/"){
  
  include('conn.php');
    
  $sql='SELECT * FROM users';
  $stmt=$con->prepare($sql);
  $stmt->execute();
  $posts=$stmt->fetchAll();
  $row="";
  $rows=array();
  
  if(!empty($posts)){
    foreach($posts as $result)
      $rows[]=$result;
      
    echo json_encode($rows);
  }
}