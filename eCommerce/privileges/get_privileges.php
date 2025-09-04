<?php
include "../../assets/db/functions.php";
  $userdata = array();
  $sql = "SELECT * FROM `user` u JOIN `privilege` p
  ON (u.id = p.user_id)
  WHERE u.type != 1";
  $rs = dbQuery($sql);
  while($row = dbFetchArray($rs)){
    $userdata []= array(
        'id'=> $row[5],
        'username'=>$row[1],
        'type'=>$row[4],
        'privilege'=>$row[7],
        'category'=>$row[8],
        'product'=>$row[9],
    );
  }

  echo json_encode($userdata);
?>