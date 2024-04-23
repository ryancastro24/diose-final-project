<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
</head>
<body>


<div class="container pt-5">


<a href="{{ route('home') }}"><button class="btn btn-info text-white mb-5">Back To Home</button></a>

<h1 class="mb-3">HISTORY</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Brand Name</th>
      <th scope="col">Model Name</th>
      <th scope="col">Body Type</th>
      <th scope="col">Price</th>
      <th scope="col">Date Purchased</th>
    </tr>
  </thead>
  <tbody>

  @foreach($customers as $customer)
    <tr>
    <td>{{ $customer->brand_name}}</td>
      <td>{{ $customer->model_name}}</td>
      <td>{{ $customer->body_type}}</td>
      <td>{{ $customer->price}}</td>
      <td>{{ $customer->created_at  }}</td>
    </tr>
  
  @endforeach


  </tbody>
</table>

</div>
    
</body>
</html>