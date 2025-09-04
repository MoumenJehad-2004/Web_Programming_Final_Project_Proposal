<?php
include "../../assets/db/functions.php";
  $userdata = array();
  $sql = "SELECT * FROM `user` where type !='1' and status !='1'";
  $rs = dbQuery($sql);
  while($row = dbFetchArray($rs)){
    $userdata []= array(
        'id'=> $row[0],
        'name'=>$row[1],
        'email'=>$row[2],
        'type'=>$row[4],
        'status'=>$row[5],
        'privilege'=>$row[6],
        'category'=>$row[7],
        'product'=>$row[8]
    );
  }
  echo json_encode($userdata);
?>