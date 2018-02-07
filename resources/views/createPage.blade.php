<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Product</title>
  </head>
  <body>
    <form class="" action="{{action('ProductController@saveProduct')}}" method="post">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <p>Nama barang :</p>
      <input type="text" name="name" value="">
      <p>Stock :</p>
      <input type="text" name="stock" value="">
      <input type="submit" name="">
    </form>
  </body>
</html>
