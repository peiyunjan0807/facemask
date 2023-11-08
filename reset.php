<html>
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
	<link href="login.css" rel="stylesheet">

	<style>
		.bd-placeholder-img {
		  font-size: 1.125rem;
		  text-anchor: middle;
		}
  
		@media (min-width: 768px) {
		  .bd-placeholder-img-lg {
			font-size: 3.5rem;
		  }
		}
	  </style>
  </head>
	<body>
	<?php
		header("Content-type:text/html;charset=utf-8");
		include("facemask.php");
		$db_link = mysqli_connect('localhost', 'root', '12345789', 'facemask') ;
		
		session_start();
		$Email=$_SESSION['Email'];
		
		$Password = $_POST['Password'];
		$Confirm_Password = $_POST['Confirm_Password'];
		//$Username = $_POST['Username'];
		
		if($Password && $Confirm_Password){ //如果帳號和密碼都不為空
			if($Password != $Confirm_Password){
				echo "
				<script>
					alert('密碼錯誤!');
					setTimeout(function(){window.location.href='password_reset.php';},1); //如果錯誤使用js 3秒後跳轉到登入頁面重試;
				</script>";
			}
			else{
				$query = ("update user set Password=? where Email=?");
				$stmt = $db->prepare($query);
				$result = $stmt->execute(array($Password, $Email));
				echo "
					<script>
						swal({
							//儲存
							title: '修改成功！',
							type: 'success',
							showConfirmButton: false,
							timer: 1000,
						}).then((result) => { }, (dismiss) => { });
						//alert('修改成功');
						setTimeout(function(){window.location.href='facemask_login.php';},1000); //如果錯誤使用js 3秒後跳轉到登入頁面重試;
					</script>";	
			}
		}
		else{	//如果帳號或密碼為空
			echo "
			<script>
			alert('密碼不得為空');
			setTimeout(function(){window.location.href='password_reset.php';},1); //如果錯誤使用js 3秒後跳轉到登入頁面重試;
			</script>";
		}
	?>
	</body>
</html> 

