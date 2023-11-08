<!DOCTYPE html>

  <?php     
    include_once "conn_db.php";
	  session_start();
  ?>

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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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
  <nav class="navbar navbar-expand-lg navbar-light bg-green">
    <div class="container">
    <a class="navbar-brand" href="homePage.php"><img src="mask.png" href="homePage.php"width="100" height="100" class="d-inline-block align-top" alt="homePage.php"></a>
    
    <ul class="nav" >
      <li class="nav-item" >
        <a class="nav-link" href="order.php"style="color: #334257;">訂單</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="shop.php" style="color: #334257;">購物車</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="facemask_login.php" style="color: #334257;">登出</a>
      </li>
    </ul>
  </div>
  </nav>


    <div class="container" >
        <!-- action="order_insert.php" method="post" -->
        <form style="padding-top: 50px;">  
          <h3>> 購物車</h3>

          <?php
            // $one = $_SESSION['Email'];
            // echo $one;
          ?>

          <div class="card-deck  " style="padding-top: 50px; padding-bottom: 40px;">
              <div class="card  ">
                <img src="img/black.png" class="card-img-top" alt="blackmask"><hr>
                <div class="card-body">
                  <h5 class="card-title">黑色口罩</h5>
                  <p class="card-text"><small class="text-muted">15 $</small></p>
                  <input type="number" class="form-control" id="blackmask" min='0' value='0' name="3">
                </div>
              </div>

              <div class="card ">
                <img src="img/blue.png" class="card-img-top" alt="..."><hr>
                <div class="card-body">
                  <h5 class="card-title">藍色口罩</h5>
                  <p class="card-text"><small class="text-muted">20 $</small></p>
                  <input type="number" class="form-control" id="bluemask"  min='0' value='0' name="1">
                </div>
              </div>
              
              <div class="card ">
                <img src="img/pink.png" class="card-img-top" alt="..."><hr>
                <div class="card-body">
                  <h5 class="card-title">粉色口罩</h5>
                  <p class="card-text"><small class="text-muted">25 $</small></p>
                  <input type="number" class="form-control" id="pinkmask"  min='0' value='0' name="2">
                </div>
              </div>
            </div>
            <button class="btn btn-primary check-btn" type="button" id="submit-btn">Submit</button>
        </form>  
    </div>

    <script src="./shop.js"></script>

</body>

</html>




