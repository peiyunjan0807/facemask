<?php
		header("Content-type:text/html;charset=utf-8");

		include("conn_db.php");
        session_start();

		$x = $_SESSION['Email'];
        $query_user = ("select * from `User` where `Email` = '$x';");
        $stmt = $db -> prepare($query_user);
        $stmt -> execute();
        $result_user = $stmt -> fetchAll();

        $userid = $result_user[0]['UserID'];
        $address = $result_user[0]['Address'];

		$black_num = $_POST['3'];
        $blue_num = $_POST['1'];
        $pink_num = $_POST['2'];
        $num = $black_num + $blue_num + $pink_num;
        $num_count = 0;

        if ($black_num != 0) $num_count++; 
        if ($blue_num != 0) $num_count++;
        if ($pink_num != 0) $num_count++;

        $money_black = $_POST['3'] * 15;
        $money_blue = $_POST['1'] * 20;
        $money_pink = $_POST['2'] * 25;
        $money = $money_black + $money_blue + $money_pink;
        $x = $_SESSION['Email'];
        
        $zero = 0;
        $query = ("insert into `order_table` values(?, ?, ?, ?, ?);");
        $stmt = $db -> prepare($query);
        $stmt -> execute(array('', $userid, $money, $zero, $address));

        //取得order id
        $query_orderid = ("SELECT max(`OrderID`) as Maxid FROM `order_table` where `UserID`=$userid;");
        $stmt = $db -> prepare($query_orderid);
        $stmt -> execute();
        $result_orderid = $stmt -> fetchAll();

        $orderid = $result_orderid[0]['Maxid'];
        $query = ("insert into `Order_Product` values(?, ?, ?);");
        if ($black_num != 0){
            $stmt = $db -> prepare($query);
            $stmt -> execute(array($orderid, 3, $black_num));
        };
        if ($blue_num != 0){
            $stmt = $db -> prepare($query);
            $stmt -> execute(array($orderid, 1, $blue_num));
        };
        if ($pink_num != 0){
            $stmt = $db -> prepare($query);
            $stmt -> execute(array($orderid, 2, $pink_num));
        };
        
        echo "1";

?>



 
