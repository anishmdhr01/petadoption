<!DOCTYPE html>
<html>
<head>
	<title>Surrender</title>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
	      <link rel='stylesheet' type='text/css' media='screen' href='css/surrender.css'>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>


<body>
  <br>

  @include('sweet::alert')

	 @include('header')

    <div class="container">
      <h3 style="color: darkorange;">Q. Found a Pet you cannot take care of?</h3>
    
       <p style="color: black;"><b> Answer </b>:<b> Well, you can surrender to us. Surrendering a pet can be quite difficult but if there is no other option for you, We can take care of the pet for you. We provide shelters for the pets which are soon to be adopted. By surrendering your pet to us,we can guarantee you that we will care it until a safe home for it is found.</b></p>
      <br>
      <br>
    </div>

    <div class="container">
      <div class="row">
        <div class="col">

            <div class="container">

                <strong style="color: darkorange"><h4>Please Fill out this form for surrendering:</h4></strong>
                <br>
                

                   <form class="surrenderForm" method="POST">
                    @csrf
                    <label for="typeofpet"><strong style="color: black;">Which pet do you want to surrender?</strong></label><br>
                    <input type="checkbox" id="Pet" name="pet[]" value="Dog">
                    <label for="PetDog"><strong style="color: black;">Dog</strong> </label>
                    <input type="checkbox" id="Pet" name="pet[]" value="Cat">
                    <label for="PetCat"><strong style="color: black;">Cat </strong></label><br>
                    <span style="color: red">@error('pet'){{$message}}@enderror</span><br>

                    <label for="category"><strong style="color: black;">Please select the correct category:</strong></label><br>
                    <input type="checkbox" id="PetCategory" name="category[]" value="Owned">
                    <label for="PetDogCategory"><strong style="color: black;">Owned</strong> </label>
                    <input type="checkbox" id="PetCategory" name="category[]" value="Stray">
                    <label for="PetCatCategory"><strong style="color: black;">Stray </strong></label><br>
                    <span style="color: red">@error('category'){{$message}}@enderror</span><br>

                    <label for="vaccine"><strong style="color: black;">Is your pet vaccinated?</strong></label><br>
                    <input type="checkbox" id="Vaccine" name="vaccine[]" value="Yes">
                    <label for="vaccination"><strong style="color: black;">Yes</strong> </label>
                    <input type="checkbox" id="Vaccine" name="vaccine[]" value="No">
                    <label for="vaccination"><strong style="color: black;">No</strong></label>
                    <input type="checkbox" id="Vaccine" name="vaccine[]" value="NotSure">
                    <label for="vaccination"><strong style="color: black;">Not Sure</strong></label><br>
                    <span style="color: red">@error('vaccine'){{$message}}@enderror</span><br>
                    
                    <label for="Reason"><strong style="color: black;">Reason for Surrendering?</strong></label><br>
                    <input type="text" id="reason" name="Reason"><br>
                    <span style="color: red">@error('Reason'){{$message}}@enderror</span><br>

                    
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Surrender</button>
                  </form>
            </div>
          </div>
    
      <div class="col">
          <div class="container" >
            <strong style="color: darkorange"><h4>We help the pets.</h4></strong>

            <strong style="color: black;">We are still searching for the most favourable home for him. Surrender your pets to us. If you arenot taking care of them, Surely,we will.</strong>

            <div class="row">
              <div class="col">
              </div>
            <div class="col">
              <img src="images\SadDogSurrender.jpg" style="width: 300px; height: 307px;">
              </div>  
              <div class="col">
              </div>
              
            </div>
            
          </div>
      </div>
 </div>
</div>

 @include('footer')
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   
 <!-- <script type="text/javascript">
   function show(){
      var check=document.getElementById("PetCategory");
      var vaccine=document.getElementById("vaccination");
      if(check.checked==true){
        vaccine.style.display="block";
      }   
      else{
        vaccine.style.display="none";
      }
    }
 </script> -->

</body>
</html>