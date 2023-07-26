
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="Asyifa Zahwa" content="width=device-width, initial-scale=1">
  <title>CRUD TEST</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
</head>
<body>
    <!-- navbar -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="container"><a class="navbar-brand" href="#">Home</a></div>
    </div>
  </div>
</nav>


<h1 style="text-align: center;">Selamat Datang di Daftar Pengikut dari Bootcamp</h1>
<!-- Table -->
<div class="container">
  <div><a href="/tambah">Tambah</a></div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">No. HP</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <td>{{ $item["name"] }}</td>
        <td>{{ $item["alamat"] }}</td>
        <td>{{ $item["no_hp"] }}</td>
        <td><a href="/update/{{ $item["id"] }}">Update</a>
          <a href="/destroy/{{ $item["id"] }}">Delete</a></td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

</body>
</html>