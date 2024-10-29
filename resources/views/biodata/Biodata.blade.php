<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Biodata Saya</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
    body{
      background-image: url('https://i.pinimg.com/originals/78/f3/76/78f376395675123e5afaeb5397af2ba5.gif')
    }
    .list{
      transition: all 0.3s ease-in-out;
    }
    .list:hover{
      transform: scale(1.05);
      cursor: pointer;

    }
    .group{
      transition: all 0.3s ease-in-out;
    }
    .group:hover{
      transform: scale(1.05);
      cursor: pointer;
    }
    .card{
      transition: all 0.3s ease-in-out;
    }
    .card:hover{
      transform: scale(1.05);
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="card w-50 mx-auto d-flex justify-content-center align-items-center mt-5 border border-2 rounded shadow p-4 border-white bg-dark text-white  ">
    <div class="card-body">
      <ul class="list-group justify-content-center d-flex flex-column">
            <div class="group w-100 mx-auto border border-2 rounded p-5 border-white shadow ">
           <h1 class="text-center mt-3 fw-bold text-decoration-underline ">Biodata Saya !</h1>
          <li class="list list-group-item mt-3 border border-2 rounded shadow border-primary">Nama Saya : {{ $datas['Nama'] }}</li>
          <li class="list list-group-item mt-3 border border-2 rounded shadow border-primary">Kelas Saya : {{ $datas['Kelas'] }}</li>
          <li class="list list-group-item mt-3 border border-2 rounded shadow border-primary">Sekolah Saya : {{ $datas['Sekolah'] }}</li>
          <li class="list list-group-item mt-3 border border-2 rounded shadow border-primary">Alamat Saya : {{ $datas['Alamat'] }}</li>
          <li class="list list-group-item mt-3 border border-2 rounded shadow border-primary">Hoby Saya : <b>{{ $datas['Hoby'] }}</b></li>
        </div>
        </ul>
    </div>
  </div>
</body>
</html>