<html>
    <head>
        <title>HomePage</title>

        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
        <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
    </head>

    <body>

        @include('header')
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\dog.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images\cat.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images\dog.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>







          <!-- <div id="carouselControls" class="carousel" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images\dog.jpg" class="d-block w-100" alt="dog.jpg">
                </div>
                <div class="carousel-item">
                  <img src="images\cat.jpg" class="d-block w-100" alt="dog.jpg">
                </div>
                <div class="carousel-item">
                  <img src="images\dog.jpg" class="d-block w-100" alt="dog.jpg">
                </div>
              </div>

                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
          </div>
 -->
          <hr>

          <div class="container">

            <div class="row" style="background-color: #007FFF">
            <!-- <div class="row" style="background-color: #dfe1e5"> -->

            <div class="col-8" style="color: white;">
              <h1>Pet Adoption Tips</h1> 
              <p class="lead">
                <h2>Why Adopt a Dog or Cat Over Buying?</h2>
                Did you know that over 1,000 people per hour run a search right here looking to adopt a pet? Pet adoption is quickly becoming the preferred way to find a new dog, puppy, cat or kitten. Best of all, there are so many benefits when you adopt a dog or adopt a cat over buying.
              </p>

              <p>
                For instance, pet adoption will almost always be more affordable than buying a puppy for sale from a breeder or finding a kitten for sale from a litter. There are more benefits as well. Since pets in rescues and shelters usually come from a home where the owners ran out of money, got divorced, or had to move, it's common to find that the dogs and cats on our website are already housetrained, good with kids, or do well with other pets. People are finding out that buying a puppy for sale from a breeder isn't all it's cracked up to be, and the dogs and cats don't leave the organization without having their shots and being taken to the vet. That means less stress, and more savings! So what are you waiting for? Go find that perfect pet!
              </p>

            </div>

            <div class="col-4">
              <img src="images\surrender.jpg" style="height:425px; width:395px;">
            </div>
            </div>
          </div>



          
          @include('footer')
        
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>