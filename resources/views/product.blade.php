<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Products List</title>
  </head>
  <body>
    <table>
      <tr>
          <th>Nomor</th>
          <th>Nama</th>
          <th>stock</th>
      </tr>
      @foreach ($product as $key)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$key->name}}</td>
        <td>{{$key->stock}}</td>
      </tr>
      @endforeach

    </table>
  </body>
</html>
