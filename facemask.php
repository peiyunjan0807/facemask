<html>
	<head>
		<title>資料庫</title>
	</head>
	<body>
	<?php
		//echo "This Is My First PHP page !!";
		$user = 'root'; //資料庫使用者名稱
		$password = '12345789'; //資料庫的密碼

		try{
			$db = new
			PDO('mysql:host=localhost;dbname=facemask;charset=utf8',$user,$password);
			//之後若要結束與資料庫的連線，則使用「$db = null;」
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
			//Print "YES!";
			
		}
		catch(PDOException $e){ //若上述程式碼出現錯誤，便會執行以下動作
			Print "ERROR!: " . $e->getMessage();
			die();
		}
	?>
	</body>
</html> 
