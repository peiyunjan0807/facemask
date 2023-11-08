<html>
	<head>
    <meta charset="utf-8" />
    <title>Facemasks</title>

    <!-- icon next to title -->
    <link rel="icon" href="./mask.png" type="image/x-icon" />

    <!-- bootstrap and jQuery -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>

    <!-- swal -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.js"
      type="text/javascript"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.css"
    />

    <!-- mode switch button -->
    <link
      href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css"
      rel="stylesheet"
    />
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <!-- icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
	<body>
	<?php
		header("Content-type:text/html;charset=utf-8");
		
		// if(($_POST["singnIn"])){
		// exit("錯誤執行");
		// }//檢測是否有submit操作 
		include("facemask.php");
		$db_link = mysqli_connect('127.0.0.1', 'root', '12345789', 'facemask') ;
		
		$Email = $_POST['email'];
		$Password = $_POST['password'];
		session_start();
   		$_SESSION['Email']=$Email;
		if ($Email && $Password){ //如果帳號和密碼都不為空
		$result = mysqli_query($db_link, "select * from user where Email='$Email' and Password='$Password'"); //檢測資料庫是否有對應的 Email 和 Password
		$rows = mysqli_num_rows($result); //返回一個數值
		if($rows){ //0 false 1 true
			$sql ="SELECT * FROM `user` WHERE `Email`='$Email'and `isManager`='0'";
			$result = mysqli_query($db_link,$sql);
			$rows = mysqli_num_rows($result);
			if($rows){
				$isManager=0;	
			}
			else{
				$isManager=1;
			}
			
			$_SESSION['isManager']=$isManager;
			header('Location: homePage.php'); //如果成功跳轉至welcome.php
			exit;
		}
		else{
			echo "
			<script>
				alert('帳號或密碼錯誤');
				setTimeout(function(){window.location.href='facemask_login.php';},1); //如果錯誤使用js 3秒後跳轉到登入頁面重試;
			</script>";
			header('Location:facemask_login.php');
		}
		}else{	//如果帳號或密碼為空
			echo "
			<script>
			alert('帳號和密碼不得為空');
			setTimeout(function(){window.location.href='facemask_login.php';},1); //如果錯誤使用js 3秒後跳轉到登入頁面重試;
			</script>";
			header('Location:facemask_login.php');
		}
	?>
	</body>
</html> 

