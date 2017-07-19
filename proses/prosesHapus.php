<?php 
      require_once '../config.php';



        global $connection;

        $id=$_GET['id'];
        
        
      /*pembetulan*//*

            $query ="DELETE FROM pohon WHERE Id_pohon='$id'";    
          $data= $connection->query($query);*/




		$q3 = oci_parse($connection, "DELETE FROM pohon WHERE ID_POHON=:W1");
		oci_bind_by_name($q3, ":W1", $id);
		oci_execute($q3);
		header("location: ../index.php");
	
?>

<script type="text/javascript">
	alert("Anda Yakin ??");
	window.location.href="../index.php";
</script>