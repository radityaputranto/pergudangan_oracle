<?php 
//$id=$_POST['nisn'];
include '../config.php';
global $connection;

if (isset($_POST['save'])) {


      $nama=$_POST['nama'];
      $jenis=$_POST['jenis'];
      $ukuran=$_POST['ukuran'];
      $harga=$_POST['harga'];
      $tempat=$_POST['tempat'];
      $tes="tes";

/*
      $sql  = "INSERT INTO pohon ( nama_pohon, jenis_pohon, ukuran_pohon, harga_pohon, lokasi) VALUES ( '$nama','$jenis','$ukuran','$harga','$tempat')";*/
      
      $sql  = "INSERT INTO pohon ( ID_POHON,NAMA_POHON, JENIS_POHON, UKURAN_POHON, HARGA_POHON, LOKASI) VALUES (idPohon.NextVal, :W0, :W1, :W2, :W3 ,:W4)";

      $result = oci_parse($connection, $sql);
                oci_bind_by_name($result, ":W0", $nama);
                oci_bind_by_name($result, ":W1", $jenis);
                oci_bind_by_name($result, ":W2", $ukuran);
                oci_bind_by_name($result, ":W3", $harga);
                oci_bind_by_name($result, ":W4", $tempat);
                oci_execute($result);

      ?>
      <script type="text/javascript">
        window.location.href='../index.php';  
      </script>
      
      <?php


      //$queryTambah ="INSERT INTO pohon VALUES('$nama','$jenis','$ukuran','$harga','$tempat')";
      /*$connection->query($sql);*/


}
?>
