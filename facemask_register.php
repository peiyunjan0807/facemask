<html lang="en">
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
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="mask.png" alt="" width="72" height="72">
    <h2>Sign up</h2>
    
  </div>

  <div class="row justify-content-center">

    <div class="col-md-8 order-md-1 ">
      <form action = "register.php" method = "post" class="needs-validation" novalidate>

		<div class="mb-3">
			<label for="username">Username</label>
			<div class="input-group">
			  <input type="text" class="form-control" id="username" placeholder="Username" name="Username" required>
			  <div class="invalid-feedback" style="width: 100%;">
				Your username is required.
			  </div>
			</div>
		  </div>

        <div class="mb-3">
          <label for="username">Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="username" placeholder="password" name="Password" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com" name="Email">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="Address" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>
		
		<div class="mb-3">
          <label for="address">Phone number</label>
          <input type="text" class="form-control" id="address" placeholder="0912345678" name="Phone" required>
          <div class="invalid-feedback">
            Please enter your phone number.
          </div>
        </div>
        <hr class="mb-4">
		<a href="facemask_login.php" >already have account</a></br>
        <button class="btn btn-primary btn-lg btn-block" type="submit" style="margin-top: 10px;">Sign up</button>
      </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.2/dist/js/bootstrap.bundle.js"></script>
        <script src="form-validation.js"></script></body>
</html>