<!DOCTYPE html>
<html>
<head>
	<title>Adopt Page</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/adoptpage.css">
</head>
<body>
	
	@include('header')
	<div class="animals">

	<div class="container">

		<div class="animal">
			<h2><strong>Adopt a Pet for You</strong></h2>
			<p><strong>People that say "Money can't buy you happiness" have never paid an adoption fee.   </strong></p>
		</div>

		<div class="row">
			<div class="col">
				<a href="/german" class="pets">
			<img src="images/german.jpg">
			<h4>German Shepherd</h4>
			<p>Adoption Fee : Rs. 20000</p>
			</a>
				
			</div>

			<div class="col">
				<a href="/bulldog" class="pets">
			<img src="images/bulldog.jpg">
			<h4>Bulldog</h4>
			<p>Adoption Fee : Rs. 18000</p>
			</a>
				
			</div>

			<div class="col">
				<a href="/bengal" class="pets">
			<img src="images/ben.jpg">
			<h4>Bengal Cat</h4>
			<p>Adoption Fee : Rs. 10000</p>
			</a>
				
			</div>
			
		</div>


		<div class="row">
			<div class="col">
				<a href="/pomeranian" class="pets">
			<img src="images/pomeranian.jpg">
			<h4>Pomeranian</h4>
			<p>Adoption Fee : Rs. 24000</p>
			</a>
				
			</div>


			<div class="col">
				<a href="/scottish" class="pets">
			<img src="images/scottish.jpg">
			<h4>Scottish Fold</h4>
			<p>Adoption Fee : Rs. 15000</p>
			</a>

				
			</div>


			<div class="col">
				<a href="/sia" class="pets">
			<img src="images/siamese.jpg">
			<h4>Siamese</h4>
			<p>Adoption Fee : Rs. 12000</p>
			</a>
				
			</div>
			
		</div>
		
			
		</div>
	</div>

	@include('footer')

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
</body>
</html>