<html>
<head>
	<title>Register</title>

	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

  @include('sweet::alert')

  @include('header')
  <div class="container">

    <div class="row">
      <div class="col">
        <form method="POST">
          @csrf
          <div class="mb-3">
            <label for="InputFirstName" class="form-label" style="color: black;">First Name</label>
            <input type="text" class="form-control" name="FirstName">
            <span style="color: red">@error('FirstName'){{$message}}@enderror</span>
          </div>

          <div class="mb-3">
            <label for="InputLastName" class="form-label" style="color: black;">Last Name</label>
            <input type="text" class="form-control" name="LastName">
            <span style="color: red">@error('LastName'){{$message}}@enderror</span>
          </div>

          <div class="mb-3">
            <label for="InputEmail1" class="form-label" style="color: black;">Email address</label>
            <input type="email" class="form-control" name="Email" aria-describedby="emailHelp">
            <span style="color: red">@error('Email'){{$message}}@enderror</span>
          </div>
            
          <div class="mb-3">
            <label for="InputPassword1" class="form-label" style="color: black;">Password</label>
            <input type="password" class="form-control" name="Password">
            <span style="color: red">@error('Password'){{$message}}@enderror</span>
          </div>

          <div class="mb-3">
            <label for="InputConfirmPassword1" class="form-label" style="color: black;">Confirm Password</label>
            <input type="password" class="form-control" name="ConfirmPassword">
            <span style="color: red">@error('ConfirmPassword'){{$message}}@enderror</span>
          </div>
          
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>
    </div>
  </div> 
  
  @include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>