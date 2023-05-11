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
    <title>Form</title>
</head>
<body>
    <div class="container mt-3">
    <h2>Data Pengguna</h2>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <th>ID</th>
            <th>Aksi</th>
            <th>Avatar</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
        </thead>

        <?php
        $sqlGet = "SELECT * FROM users";
        $query = mysqli_query($conn, $sqlGet);

        while($data= mysqli_fetch_array($query)) {
            echo "
                <tbody>
                <tr>
                    <td>$data[ID]</td>
                    <td>
                        <div class='row'>
                            <div class='col d-flex justify-content-center'>
                                <a href='' class='btn btn-sm btn-primary'>Detail</a>
                            </div>
                            <div class='col d-flex justify-content-center'>
                                <a href='' class='btn btn-sm btn-warning'>Edit</a>
                            </div>
                            <div class='col d-flex justify-content-center'>
                                <a href='' class='btn btn-sm btn-danger'>Hapus</a>
                            </div>
                        </div>   
                    </td>
                    <td>
                    </td>
                    <td>$data[Nama]</td>
                    <td>$data[Email]</td>
                    <td>$data[Phone]</td>
                    <td>$data[Role]</td>
                </tr>
                </tbody>
            ";
        }
        ?>

    </table>
    <a href="add.php" class="btn btn-info btn-md mb-3">Tambah Data</a>
    </div>
</body>
</html>