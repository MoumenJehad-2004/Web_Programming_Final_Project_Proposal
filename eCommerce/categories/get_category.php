<?php
include "../../assets/db/functions.php";
  $userdata = array();
  $sql = "SELECT * FROM `category`";
  $rs = dbQuery($sql);
  while($row = dbFetchArray($rs)){
    $userdata []= array(
        'id'=> $row[0],
        'name'=>$row[1],
        'status'=>$row[2],
    );
  }
  echo json_encode($userdata);
?>