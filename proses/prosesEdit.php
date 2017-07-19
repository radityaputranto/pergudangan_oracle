<?php 
include '../config.php';
global $connection;

if (isset($_POST['save'])) {

      global $id;
      $nama=$_POST['nama'];
      $jenis=$_POST['jenis'];
      $ukuran=$_POST['ukuran'];
      $harga=$_POST['harga'];
      $tempat=$_POST['tempat'];
      


      $sql  = "UPDATE pohon SET nama_pohon='$nama',jenis_pohon='$jenis',ukuran_pohon='$ukuran',lokasi='$tempat' where id='$id'";

      ?>
      <script type="text/javascript">
        alert("Data Berhasil Disimpan");
        window.location.href='../index.php';  
      </script>
      
      <?php


      //$queryTambah ="INSERT INTO pohon VALUES('$nama','$jenis','$ukuran','$harga','$tempat')";
      $connection->query($sql);


}
?>
