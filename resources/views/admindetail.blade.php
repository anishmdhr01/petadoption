<html>

  <head>
    <title>Admin Panel</title>
    <meta charset="utf-8">        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>

  <body>
    @include('sweet::alert')

    @include('header')

    <div class="container">
      <div class="table">
        <h3 style="text-align: center">Detail Table</h3>
        <a href="/admindetailadd" class="btn btn-primary" style="float: right">Add</a><br><br>
        <table>
          <tr>
            <th>Pet_Id</th>
            <th>Breed</th>
            <th>Weight</th>
            <th>Color</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Fee</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          @foreach($data as $i)
          <tr>
            <td>{{$i->Pet_Id}}</td>
            <td>{{$i->Breed}}</td>
            <td>{{$i->Weight}}</td>
            <td>{{$i->Color}}</td>
            <td>{{$i->Gender}}</td>
            <td>{{$i->Age}}</td>
            <td>{{$i->Fee}}</td>
            <td>{{$i->Description}}</td>
            <td><a href="editdetail/{{$i->Pet_Id}}" class="btn btn-success">Edit</a></td>
            <td><a href="admindetail/{{$i->Pet_Id}}" class="btn btn-danger">Delete</a></td>
          </tr>
          @endforeach
        </table><br>
      </div>
    </div>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>