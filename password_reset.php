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
  <body class="text-center" >
    <form class="form-signin" action = "reset.php" method ="post">
		<img class="mb-4" src="mask.png" alt="" width="72" height="72">
		<h1 class="h3 mb-3 font-weight-normal">Reset Password</h1>
		<label for="inputEmail" class="sr-only">Password</label>
		<input type="text" id="inputEmail" class="form-control" placeholder="Password" name="Password" required autofocus>
		<label for="inputPassword" class="sr-only">Confirm Password</label>
		<input type="text" id="inputPassword" class="form-control" placeholder="Confirm Password" name="Confirm_Password" required>

		<!--<div class="checkbox mb-3">
			<a href="facemask_register.html">register</a>
		</div>-->
		<div>
			<br><br>
		</div>

		<button class="btn btn-lg btn-primary btn-block" type="submit">Confirm</button>
	
	</form>
</body>
</html>