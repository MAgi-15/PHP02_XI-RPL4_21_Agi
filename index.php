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
    <title>Aplikasi CRUD BUKU</title>
</head>
<body>
    <div class="container">
    <table class="table table-striped table-hover mt-5">
        <thead class="table-dark">
            <th>Id Siswa</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Id Jurusan</th>
            <th>Nama Jurusan</th>
            <th>Aksi</th>
        </thead>
        <?php
            $sqlGet = "SELECT * FROM db_buku";
            $query = mysqli_query($conn, $sqlGet);

            while($data = mysqli_fetch_array($query)) {
                echo "
                <tbody>
                    <tr>
                        <td>$data[id_siswa]</td>
                        <td>$data[nis]</td>
                        <td>$data[nama_siswa]</td>
                        <td>$data[jenis_kelamin]</td>
                        <td>$data[alamat]</td>
                        <td>$data[id_jurusan]</td>
                        <td>$data[nama_jurusan]</td>
                        <td>$</td>
                    </tr>
                </tbody>
                ";
            }
        ?>
    </table>
    </div>
</body>
</html>