<?php
    error_reporting(0);
    session_start();
    $UserID = $_SESSION['UserID'];
    $Userame = $_SESSION['Userame'];
    $Email =$_SESSION['Email'];
    $isManager = $_SESSION['isManager'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    

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
      if($Email){//already log in
        if($isManager){
          header("Location: ./adminPage.php");
        }
        else{//user log in
          
          header("Location: ./shop.php");
        }
      }
      else{?>
        <nav class="navbar navbar-expand-lg navbar-light bg-green">
          <div class="container">
            <a class="navbar-brand" href="#"><img src="mask.png" width="100" height="100" class="d-inline-block align-top" alt=""></a>
            <ul class="nav" >
              <li class="nav-item" >
                <a class="nav-link" href="./facemask_login.php">訂單</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./facemask_login.php">購物車</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./facemask_login.php">登入</a>
              </li>
            </ul>
          </div>
        </nav>
  <div class="container" style="text-align:center; margin-top:15%;">
       <h1 >Welcome to 口罩富翁！</h1>
    </div>
      <?php }
	?>
  

    


<script src="./main.js"></script>
</body>




</html>