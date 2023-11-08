<!DOCTYPE html>

<?php
      include_once "conn_db.php";
      session_start();
    ?>
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

    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="./main.css" />

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-green">
      <div class="container">
      <a class="navbar-brand" href="#">
        <img src="mask.png" width="100" height="100" class="d-inline-block align-top" alt="">
      </a>
      
      
      <ul class="nav" >
        <li class="nav-item" >
          <a class="nav-link" href="#"  style="color: #334257;">訂單</a>
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

    <div class="container" style="margin-top: 50px;">
    <h3>> 歷史訂單 </h3>
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <div class="mb-3">
            <label for="email">search<span class="text-muted"> ( 請輸入訂單編號 ) </span></label>
            <input type="email" class="form-control" id="search" placeholder="">
          </div>
        </div>

        <!-- order card -->
        <div class="col-md-8 order-md-1">

          <!-- <div class="card order-card" id="1">           
            <div class="card-body">
              <h5 class="card-title">訂購編號：001</h5>
              <table class="table">
                <tbody>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">品名</th>
                        <th scope="col">數量</th>
                        <th scope="col">金額</th>
                      </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>黑色口罩</td>
                    <td>1</td>
                    <td>80</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>藍色口罩</td>
                    <td>3</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>粉色口罩</td>
                    <td>2</td>
                    <td>150</td>
                  </tr>
                  <tr class="tfoot">
                    <th colspan="5">Total：540&emsp;&emsp;</th>
                  </tr>
                </tbody>
              </table>
              <p>訂購人：哈哈是我啦</p>
              <p>地&emsp;址：台北市中正區重慶南路一段122號</p>
              <p class="status">已完成&emsp;&emsp;&emsp;&emsp;</p>
            </div>
        </div> -->

        <?php
          $x = $_SESSION['Email'];
          $query_user = ("select * from `user` inner join `order_table` on `user`.`Email` = '$x' and `user`.`UserID` = `order_table`.`UserID` ;");
          $stmt = $db -> prepare($query_user);
          $stmt -> execute();
          $result = $stmt -> fetchAll();
          
          for($i=0; $i<count($result); $i++){
            $y = $result[$i]['OrderID'];
            $query_order = ("select * from `order_product` join `product` on `order_product`.`OrderID` = $y and `order_product`.`productID` = `product`.`productID` ;");
            $stmt_order = $db -> prepare($query_order);
            $stmt_order -> execute();
            $result_order = $stmt_order -> fetchAll();

            echo 
            "<div class='card order-card' id='$y'>           
              <div class='card-body'>
                <h5 class='card-title'>訂購編號：$y</h5>
                <table class='table'>
                <tbody>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>品名</th>
                        <th scope='col'>數量</th>
                        <th scope='col'>金額</th>
                      </tr>";

              for ($j=0, $k=1; $j<count($result_order); $j++, $k++){

              $productname = $result_order[$j]['ProductName'];
              $quantity = $result_order[$j]['Quantity'];
              $money = $result_order[$j]['Price'] * $quantity;
              

              echo 
                      "<tr>
                        <th scope='row'>$k</th>
                        <td>$productname </td>
                        <td>$quantity</td>
                        <td>$money</td>
                      </tr>";
              }

              $username = $result[$i]['Username'];
              $total_money = $result[$i]['MaskTotalPrice'];
              $address = $result[$i]['Address'];
              $state = $result[$i]['OrderState'];

              switch($state) {
                case 0:
                  $state = "處理中"; break;
                case 1:
                  $state = "已完成"; break;
              }

              echo 
              "
              <tr class='tfoot'>
                <th colspan='4'>Total：$total_money&emsp;&emsp;&emsp;&emsp;&emsp;</th>
              </tr>
              </tbody>
              </table>
              <p>訂購人：$username</p>
              <p>地&emsp;址：$address</p>
              <p class='status'>$state&emsp;&emsp;&emsp;&emsp;</p>
              </div></div>";

          }
        ?>


          </div>
        </div>
      </div>
    </div>

    <!-- search order -->
    <script> 
      $('#search').on("change", function () {
          // window.alert('#'+$('#search').val());

          var num = $('#search').val();
          
          if (num != 0) {
            $('.order-card').hide();
            
            setTimeout(function () {
                $('#'+num).show();
              }, 10);
          }
          else $('.order-card').show();
            

      })
      </script>
  </body>
</html>

          
          
          
          
          
          
          
          
          
