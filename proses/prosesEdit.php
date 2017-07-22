<?php 
include '../config.php';
global $connection;

if (isset($_POST['save'])) {

      $id=$_GET['id'];
      $nama=$_POST['nama'];
      $jenis=$_POST['jenis'];
      $ukuran=$_POST['ukuran'];
      $harga=$_POST['harga'];
      $tempat=$_POST['tempat'];
      



 $sql  = "UPDATE  pohon SET NAMA_POHON = :W0, JENIS_POHON = :W1, UKURAN_POHON = :W2, HARGA_POHON = :W3, LOKASI = :W4   WHERE ID_POHON=:d1";

      $result = oci_parse($connection, $sql);
                oci_bind_by_name($result, ":d1", $id);
                oci_bind_by_name($result, ":W0", $nama);
                oci_bind_by_name($result, ":W1", $jenis);
                oci_bind_by_name($result, ":W2", $ukuran);
                oci_bind_by_name($result, ":W3", $harga);
                oci_bind_by_name($result, ":W4", $tempat);
                oci_execute($result);


    /*  $sql  = "UPDATE pohon SET nama_pohon='$nama',jenis_pohon='$jenis',ukuran_pohon='$ukuran',lokasi='$tempat' where id='$id'";
*/  
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
