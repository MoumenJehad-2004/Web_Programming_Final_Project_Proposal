<?php 
include "../../assets/db/functions.php";
        $id = @$_GET['id'];
        $status =  @$_POST['status']; 
        $sql ="UPDATE `user` SET `status`='$status' WHERE id ='$id' ";           
          $rs = dbQuery($sql);
          if($rs)
          {
           echo json_encode(array('status'=>true, 'msg'=>'success:: Privileges Edit Successfully'));
          }else{
            echo json_encode(array('status'=>false, 'msg'=>'Fail'));
          }
          ?>