<?php
include "../assets/db/functions.php";
$arr = array();
$id = $_GET['id'];
$sql1 = "DELETE FROM wish WHERE id = $id";
$res = dbQuery($sql1);
if($res){
    echo json_encode(array('msg'=>'Delete One Record', 'status'=>'success'));
}else{
    echo json_encode(array('msg'=>'Error', 'status'=>'fail'));
}
