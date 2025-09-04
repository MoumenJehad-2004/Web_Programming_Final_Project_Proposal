<?php
include "../../assets/db/functions.php";
$arr = [];
$id = $_GET['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];
$status = $_POST['status'];
$category = $_POST['category'];
$imgName = $_FILES['imgFle']['name'];
$imgSize = $_FILES['imgFle']['size'];
$imgType = $_FILES['imgFle']['type'];
$oldImage = $_POST['oldImage'];
if($id==""){

  if($imgName == ""){
      $newName = "";
  }else{
      $newName = rand(10000, 100000)."-".$imgName;
    }
    move_uploaded_file($_FILES['imgFle']['tmp_name'], "../../assets/images/my-folder/".$newName);
  $sql = "insert into product (name,category_id,price,quantity,description,status,image)
          values('$name','$category','$price','$quantity','$description','$status','$newName') ";
$rs = dbQuery($sql);
$arr = ['msg' => 'ADD One Record', 'status' => 'success'];
if ($rs) {
  echo json_encode($arr);
}
  }
else{
   if($imgName == ""){
          $sql = "UPDATE `product` SET `name`='$name',`category_id`='$category',`price`='$price',`quantity`='$quantity',`description`='$description',`status`='$status' WHERE `id`='$id'";           
          $rs = dbQuery($sql);
          if($rs)
          {
           echo json_encode(array('status'=>true, 'msg'=>'success:: edit record'));
          }else{
            echo json_encode(array('status'=>false, 'msg'=>'Fail'));
          }
      }else{
          $newName = rand(10000, 100000)."-".$imgName;
          move_uploaded_file($_FILES['imgFle']['tmp_name'], "../../assets/images/my-folder/".$newName);
           $sql = "UPDATE `product` SET `name`='$name',`category_id`='$category',`price`='$price',`quantity`='$quantity',`description`='$description',`status`='$status',`image`='$newName' WHERE `id`='$id'";
                 
          $rs = dbQuery($sql);
          
              
              if($rs)
              {
               echo json_encode(array('status'=>true, 'msg'=>'success:: edit record'));
               @unlink('../../assets/images/my-folder/'.$oldImage);
              }else{
                echo json_encode(array('status'=>false, 'msg'=>'Fail'));
              }
      }
}