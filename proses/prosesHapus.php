
<script type="text/javascript">

          var myClick = window.confirm("Anda yakin ingin menghapus ?");

          if (myClick == true){

              /*document.write("You clicked OK");*/
              	
              	<?php 
			      require_once '../config.php';
			      	global $connection;
			      	
			      	$id_pengguna= 69;
			      	$id_pohon=$_GET['id'];
			      	$nama_pengguna= 'raditya';
			      	$nama_pohon=$_GET['nama'];
			      	$tgl=date('d-m-Y');
			      	
			      	/*proses input tabel stock keluar*/
			    
			      	$q2 = "INSERT INTO data_keluar VALUES(:S0, :S1, :S2, :S3 ,:S4)";

			      	$hasil_q2 = oci_parse($connection, $q2);
	                oci_bind_by_name($hasil_q2, ":S0", $id_pengguna);
	                oci_bind_by_name($hasil_q2, ":S1", $id_pohon);
	                oci_bind_by_name($hasil_q2, ":S2", $nama_pengguna);
	                oci_bind_by_name($hasil_q2, ":S3", $nama_pohon);
	                oci_bind_by_name($hasil_q2, ":S4", $tgl);
	                oci_execute($hasil_q2);

					/*proses delete*/			        
					$q3 = oci_parse($connection, "DELETE FROM pohon WHERE ID_POHON=:W1");
					oci_bind_by_name($q3, ":W1", $id_pohon);
					oci_execute($q3);
					/*header("location: ../index.php");*/
					
				?>
				//window.open(printData.php, _blank);
				//window.location.href="../index.php";
				window.location.href="printData.php";
				alert("data telah terhapus");
          }   

          else {

              /*document.write("You clicked Cancel");*/
              	window.location.href="../index.php";
              	alert("data tidak terhapus");

          }

         

</script>


<!-- 
<script type="text/javascript">
	alert("Anda Yakin ??");
	window.location.href="../index.php";
</script> -->

