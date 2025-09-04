<?php
include "../../assets/db/functions.php";
$arr = array();
$id = $_GET['id'];
$img = $_GET['oldImage'];
$sql1 = "DELETE FROM product WHERE id = $id";
$res = dbQuery($sql1);
if($res){
    unlink('../../assets/images/my-folder/'.$img);
    echo json_encode(array('msg'=>'Delete One Record', 'status'=>'success'));
}else{
    echo json_encode(array('msg'=>'Error', 'status'=>'fail'));
}
