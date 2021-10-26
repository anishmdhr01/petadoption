<!DOCTYPE html>
<html>
<head>
	<title>Adopt Page</title>

	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		
		<link rel="stylesheet" type="text/css" href="css/detail.css">

		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

	@include('header')

	@include('sweet::alert')

	<div class="container">
		<div class="animals">
			<h2><strong>Adopt a Pet for You</strong></h2>
			<p><strong>People that say "Money can't buy you happiness" have never paid an adoption fee.</strong></p>
		</div>

		<form class="detail" method="POST" style="color: black;">
			@csrf
			<img src="images/ben.jpg">
			<input type="hidden" name="petid" value="@foreach($data as $i) {{$i->Pet_Id}} @endforeach">
			<p><b>Breed:</b>@foreach($data as $i) {{$i->Breed}} @endforeach</p><br>
			<p><b>Weight:</b>@foreach($data as $i) {{$i->Weight}} @endforeach</p><br>
			<p><b>Color:</b>@foreach($data as $i) {{$i->Color}} @endforeach</p><br>
			<p><b>Gender:</b>@foreach($data as $i) {{$i->Gender}} @endforeach</p><br>
			<p><b>Age:</b>@foreach($data as $i) {{$i->Age}} @endforeach</p><br>
			<button type="submit" class="button">Adoption Fee : Rs. @foreach($data as $i) {{$i->Fee}} @endforeach</button>
		</form>
		
		<div class="desc">
			<b>Facts about Pet : </b> <br>
			<p>@foreach($data as $i) {{$i->Description}} @endforeach</p>
		</div>
	</div>

	@include('footer')

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>