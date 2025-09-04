<?php 
include "../../assets/db/functions.php";
        $id = @$_GET['id'];
        $priv =  @$_POST['priv']; 
        $pro =  @$_POST['pro']; 
        $cat =  @$_POST['cat']; 
        $sql ="UPDATE `user` SET `privilege`='$priv',`category`='$cat',`product`='$pro' WHERE id ='$id' ";           
          $rs = dbQuery($sql);
          if($rs)
          {
           echo json_encode(array('status'=>true, 'msg'=>'success:: Privileges Edit Successfully'));
          }else{
            echo json_encode(array('status'=>false, 'msg'=>'Fail'));
          }
          ?>