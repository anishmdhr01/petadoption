<html>
  <head>
    <title>Edit Detail Page</title>
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
          <form method="GET" action="/updatedetail/{{$data[0]->Pet_Id}}">
            @csrf
            <div class="mb-3">
              <label for="InputBreed" class="form-label" style="color: black;">Breed</label>
              <input type="text" class="form-control" name="Breed" value="{{$data[0]->Breed}}" placeholder="Enter Breed">
              <span style="color: red">@error('Breed'){{$message}}@enderror</span>
            </div>

            <div class="mb-3">
              <label for="InputWeight" class="form-label" style="color: black;">Weight</label>
              <input type="text" class="form-control" name="Weight" value="{{$data[0]->Weight}}" placeholder="Enter Weight">
              <span style="color: red">@error('Weight'){{$message}}@enderror</span>
            </div>

            <div class="mb-3">
              <label for="InputColor" class="form-label" style="color: black;">Color</label>
              <input type="text" class="form-control" name="Color" value="{{$data[0]->Color}}" placeholder="Enter Color">
              <span style="color: red">@error('Color'){{$message}}@enderror</span>
            </div>
              
            <div class="mb-3">
              <label for="InputGender" class="form-label" style="color: black;">Gender</label>
              <input type="text" class="form-control" name="Gender" value="{{$data[0]->Gender}}" placeholder="Enter Gender">
              <span style="color: red">@error('Gender'){{$message}}@enderror</span>
            </div>

            <div class="mb-3">
              <label for="InputAge" class="form-label" style="color: black;">Age</label>
              <input type="text" class="form-control" name="Age" value="{{$data[0]->Age}}" placeholder="Enter Age">
              <span style="color: red">@error('Age'){{$message}}@enderror</span>
            </div>

            <div class="mb-3">
              <label for="InputFee" class="form-label" style="color: black;">Fee</label>
              <input type="text" class="form-control" name="Fee" value="{{$data[0]->Fee}}" placeholder="Enter Fee">
              <span style="color: red">@error('Fee'){{$message}}@enderror</span>
            </div>

            <div class="mb-3">
              <label for="InputDescription" class="form-label" style="color: black;">Description</label>
              <input type="text" class="form-control" name="Description" value="{{$data[0]->Description}}" placeholder="Enter Description">
              <span style="color: red">@error('Description'){{$message}}@enderror</span>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div> 
    
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>
