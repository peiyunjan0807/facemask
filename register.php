<html>
	<head>
    <meta charset="utf-8">
    <title>Facemasks</title>
    

    <!-- icon next to title -->
    <link rel="icon" href="./mask.png" type="image/x-icon">

    <!-- bootstrap and jQuery -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- swal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.js"
        type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.css" />

    <!-- mode switch button -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="./main.css">

</head>
	<body>
	<?php
		header("Content-type:text/html;charset=utf-8");
		include_once "facemask.php";
		$db_link = mysqli_connect('localhost', 'root', '12345789', 'facemask') ;
		
		$Username = $_POST['Username'];
		$Email = $_POST['Email'];
		$Password = $_POST['Password'];
		//$Password_check = $_POST['Password_check'];
		$Address = $_POST['Address'];
		$Phone = $_POST['Phone'];
		
		if($Username && $Email && $Password && $Address && $Phone){
			if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $_POST["Email"])) {
				echo "
				<script>
				alert('E-mail 輸入錯誤!');
				setTimeout(function(){window.location.href='facemask_register.php';},1); //如果錯誤使用js 3秒後跳轉到登入頁面重試;
				</script>";
			}
			/*else if($Password != $Password_check || $Password == 0){
				echo "
				<script>
				alert('密碼輸入錯誤!');
				setTimeout(function(){window.location.href='facemask_register.php';},1); //如果錯誤使用js 3秒後跳轉到登入頁面重試;
				</script>";
			}*/
			
			else{
				$check="SELECT * FROM user WHERE Email='".$Email."'";
				if(mysqli_num_rows(mysqli_query($db_link,$check))==0){
					$sql="INSERT INTO user (UserID, Username, Email, Password, Address, Phone, IsManager)
							VALUES(NULL,'$Username','$Email','$Password','$Address','$Phone','0')";
        
					if(mysqli_query($db_link, $sql)){
						//echo "註冊成功!3秒後將自動跳轉頁面<br>";
						//echo "<a href='facemask_login.php'>未成功跳轉頁面請點擊此</a>";
						echo "
						<script>
						 swal({
                //儲存
                title: '註冊成功！',
                type: 'success',
                showConfirmButton: false,
                timer: 1000,
              }).then((result) => { }, (dismiss) => { });
						
						setTimeout(function(){window.location.href='facemask_login.php';},1000); //如果錯誤使用js 3秒後跳轉到登入頁面重試;
						</script>";
						//header("Location:facemask_login.html");
						exit;
					}
					else{
						echo "Error creating table: " . mysqli_error($db_link);
					}
				}
				else{
					//echo "該帳號已註冊!<br>3秒後將自動跳轉頁面<br>";
					//echo "<a href='facemask_register.html'>未成功跳轉頁面請點擊此</a>";
					echo "
						<script>
						alert('該帳號已註冊');
						setTimeout(function(){window.location.href='facemask_register.php';},1); //如果錯誤使用js 3秒後跳轉到登入頁面重試;
						</script>";
					exit;
				}
			}
		}
		else{	//如果帳號或密碼為空
			echo "
			<script>
			alert('註冊資料不得為空!');
			setTimeout(function(){window.location.href='facemask_register.php';},1); //如果錯誤使用js 3秒後跳轉到登入頁面重試;
			</script>";
		}
	?>
	</body>
</html> 
