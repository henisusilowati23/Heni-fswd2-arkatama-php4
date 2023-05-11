<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>form</title>
</head>
<body>
<div class="mb-3">
  <label for="exampleFormControlInput1nama" class="form-label">Nama</label>
  <input type="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama lengkap">
</div>

<label for="exampleFormControlInput1nama" class="form-label">Role</label>
<select class="form-select" aria-label="Default select example">
  <option selected>Pilih Role Pengguna</option>
  <option value="Admin">Admin</option>
  <option value="Staff">Staff</option>
</select>

<div class="mb-3">
  <label for="exampleFormControlInput1nama" class="form-label">Email</label>
  <input type="Email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1nama" class="form-label">Password</label>
  <input type="Password" class="form-control" id="exampleFormControlInput1" placeholder="Recipient's username">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1nama" class="form-label">Tlp</label>
  <input type="Tlp" class="form-control" id="exampleFormControlInput1" placeholder="085730">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<div class="mb-3">
  <label for="formFileSm" class="form-label">Unggah foto</label>
  <input class="form-control form-control-sm" id="formFileSm" type="file">
</div>

</body>
</html>