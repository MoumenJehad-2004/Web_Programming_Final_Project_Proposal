<?php
include "../../assets/db/functions.php";
  $userdata = array();
  $sql = "SELECT * FROM product p join category c on p.category_id = c.id";
  $rs = dbQuery($sql);
  while($row = dbFetchArray($rs)){
    $userdata []= array(
        'id'=> $row[0],
        'name'=>$row[1],
        'category'=>$row[2],
        'categoryName'=>$row[9],
        'price'=>$row[3],
        'quantity'=>$row[4],
        'description'=>$row[5],
        'status'=>$row[6],
        'image'=>$row[7],
    );
  }
  echo json_encode($userdata);
?>