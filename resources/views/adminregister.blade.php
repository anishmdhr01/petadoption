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
      <div class=table>
        <h3 style="text-align: center">Register Table</h3><br>
        <table>
          <tr>
            <th>Id</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Delete</th>
          </tr>
          @foreach($data as $i)
          <tr>
            <td>{{$i->Id}}</td>
            <td>{{$i->FirstName}}</td>
            <td>{{$i->LastName}}</td>
            <td>{{$i->Email}}</td>
            <td><a href="adminregister/{{$i->Id}}" class="btn btn-danger">Delete</a></td>
          </tr>
          @endforeach
        </table><br>
      </div>
    </div>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>