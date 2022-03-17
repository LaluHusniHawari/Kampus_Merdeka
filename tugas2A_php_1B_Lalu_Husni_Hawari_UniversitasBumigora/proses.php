<?php
$nama = $_POST['nama'];
$matpel = $_POST['matpel'];
$nilai = $_POST['nilai'];

//1. tentukan kelulusan minimal nilai 60 (ternary)
    $keterangan= $nilai >= 60 ? 'lulus' : 'tidak lulus';

//2. tentukan grade A, B, C, D, E (if multi kondisi)
    if($nilai >= 85 && $nilai <= 100) $grade = 'A';
    else if($nilai >= 75 && $nilai < 85) $grade = 'B'; 
    else if($nilai >= 60 && $nilai < 75) $grade = 'C';
    else if($nilai >= 30 && $nilai < 60) $grade = 'D'; 
    else if($nilai >= 0 && $nilai < 30) $grade = 'E';
    else $grade = '';  

    //3. tentukan predikat (switch case)
    switch ($grade) {
        case 'A': $predikat = 'Memuaskan'; break;
        case 'B': $predikat = 'Bagus'; break;
        case 'C': $predikat = 'Cukup'; break;
        case 'D': $predikat = 'Kurang'; break;
        case 'E': $predikat = 'Buruk'; break;
        default: $predikat = '';
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="css/main.css">

    <title>Hasil </title>
  </head>
  <body>


 <div class="container">
  <h2>E-RAPORT</h2>
    <hr>
    <br>
  <table class="table table-striped table-hover">
  <thead>
      <th>NAMA</th>
      <th>MATA KULIAH</th>
      <th>NILAI</th>
      <th>KETERANGAN</th>
      <th>GRADE</th>
      <th>PREDIKAT</th>
  </thead>
  <tbody>
      <tr>
          <td><?= $nama ?></td>
          <td><?= $matpel ?></td>
          <td><?= $nilai ?></td>
          <td><?= $keterangan ?></td>
          <td><?= $grade ?></td>
          <td><?= $predikat ?></td>
      </tr>
  </tbody>
</table>
<a href="nilai.php" class="btn btn-primary">Kembali ke halaman input nilai</a>
 </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>


<br>
