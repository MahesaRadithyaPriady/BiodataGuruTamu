<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dahsboard</title>
</head>
<body>
  <div>
    <div class="card">
      <div class="card-body">
        <h1>Dahsboard</h1>
        <ul>
         
          @if (count($products) > 0)
          @foreach ($products as $product) 
            <li>Nama Product : {{ $product->name }}</li>
            <li>Description :  {{ $product->description }}</li>
          @endforeach
          @else
            <li>Belum ada produk</li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</body>
</html>