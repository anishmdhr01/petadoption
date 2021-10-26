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
        <h3 style="text-align: center">Adopted Table</h3><br>
        <table>
          <tr>
            <th>User_Id</th>
            <th>Pet_Id</th>
            <th>Delete</th>
          </tr>
          @foreach($data as $i)
          <tr>
            <td>{{$i->User_Id}}</td>
            <td>{{$i->Pet_Id}}</td>
            <td><a href="adminadopted/{{$i->User_Id}}/{{$i->Pet_Id}}" class="btn btn-danger">Delete</a></td>
          </tr>
          @endforeach
        </table><br>
      </div>
    </div>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>