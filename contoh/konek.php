<?php 
//membangun koneksi
$username = "gudang";
$password = "gudang";
$database = "localhost/orcl";
 
$con = oci_connect($username,$password,$database);
 
// if($koneksi){
// 	echo "Koneksi berhasil";
// }

?>
 