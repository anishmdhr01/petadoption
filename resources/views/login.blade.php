<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Login to Animal Shelter</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
  <link rel='stylesheet' type='text/css' media='screen' href='css/surrender.css'>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
</head>

<body style="background-image:url('images/catdoglogin.png'); background-position: no-repeat;" >

	@include('sweet::alert')

    @include('header')
    <div class="container">
	 <form class="form1 "style="background-color:white; color: black; text-align: center; " method="POST"><br>
	 	@csrf
        <h4 style="color:orange;">Log-in to "Save A Pet"</h4><br>

		<strong>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> 
		<input type="text" name="email" required="required"><br><br>

		<strong>Password :</strong> <input type="password" name="password" required="required"><br><br>

		<button type="submit" class="btn btn-primary">Login</button>
	</form>
</div>
	<div class="container">
	<form class="form2" style="background-color: white; color: black; text-align: center;">
		<br>
		<h5 style="color: darkorange;"> Don't Have an account yet? </h5>
		
		</br>
				 <button type="button" class="btn btn-primary"><a href="/register" style="color: white; text-decoration: none;">Register</a></button>
		</form>


		</div>
	</div>

  @include('footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  
</body>
</html>