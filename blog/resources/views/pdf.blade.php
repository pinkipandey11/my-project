<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
    <thead>
      <tr>
        <td><b>Id</b></td>
        <td><b>Name</b></td>
        <td><b>Email</b></td>     
      </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
      <tr>
        <td>
          {{$user->id}}
        </td>
        <td>
          {{$user->name}}
        </td>
        <td>
          {{$user->email}}
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </body>
</html>