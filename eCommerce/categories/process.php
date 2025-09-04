<?php
include "../../assets/db/functions.php";
$arr = [];
$id = @$_GET['id'];
$name = @$_POST['name'];
$status =@$_POST['status'];
if($id==""){
  $sql = "INSERT INTO `category`( `name`, `status`) VALUES ('$name','$status') ";
  $rs = dbQuery($sql);
  $arr = ['msg' => 'ADD One Record', 'status' => 'success'];
  if ($rs) {
  echo json_encode($arr);
  }
  }
else{
    $sql = "UPDATE `category` SET `name`='$name',`status`='$status' WHERE `id`=$id";               
    $rs = dbQuery($sql);           
        if($rs)
        {
        echo json_encode(array('status'=>true, 'msg'=>'success:: edit record'));
        }else{
        echo json_encode(array('status'=>false, 'msg'=>'Fail'));
        }
    }
