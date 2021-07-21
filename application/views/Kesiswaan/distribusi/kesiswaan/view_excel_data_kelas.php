<!DOCTYPE html>
<html>
<head>
  <title>Judul</title>
  <?php
  header("Content-Type: application/download\n");
  header("Content-Disposition: attachment; filename=\"Data Kelas.xls\"");
  header("Content-Transfer-Encoding: binary");
  header("Expires: 0");
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
  header("Pragma: public");
  ?>
</head>
<body>
  <table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>NISN</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 1;
      foreach ($tabel_siswa as $siswa):
      ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $siswa->nisn ?></td>
          <td><?php echo $siswa->nama ?></td>
          <td><?php echo $siswa->jenis_kelamin ?></td>
           <td><?php echo $siswa->agama ?></td> 
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>