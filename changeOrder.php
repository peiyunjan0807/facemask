<?php
    //action 0: del, action 1: verify
    $action = $_GET['action'];
    $id = $_GET['id'];
	$db_link = mysqli_connect('127.0.0.1', 'root', '12345789', 'facemask') ;
    
    if($action == 0){
		$sql ="SELECT * FROM order_table WHERE OrderID ='$id'";
        $result = mysqli_query($db_link,$sql);
        $rows = mysqli_num_rows($result);
        if($rows<1){
            echo "<script>alert('no order');window.location.replace('./adminPage.php');</script>";
            return;
        }
        $sql = "DELETE FROM order_product WHERE OrderID='$id'";
		$db_link->query($sql);
		
        $sql = "DELETE FROM order_table WHERE OrderID = '$id'";
        $db_link->query($sql);
		
        echo "<script>alert('Delete Successfully');";
        echo "window.location.replace('./adminPage.php');</script>";
    }else if($action == 1){
        $sql ="SELECT * FROM order_table WHERE OrderID ='$id'";
        $result = mysqli_query($db_link,$sql);
        $rows = mysqli_num_rows($result);
        if($rows<1){
            echo "<script>alert('no order');window.location.replace('./adminPage.php');</script>";
            return;
        }
        
        $sql = "UPDATE order_table SET OrderState = '1' WHERE OrderID = '$id'";
        $db_link->query($sql);
        echo "<script>alert('Update Success');window.location.replace('./adminPage.php');</script>";}

?>