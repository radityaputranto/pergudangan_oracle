<?php
include('konek.php');

$query = oci_parse($con, "SELECT * FROM PENGGUNA ORDER BY IDUSER DESC");
oci_execute($query);

if(isset($_GET['btnsubmit']))
{
	if($_GET['patokan'] == '')
	{
		$q1 = oci_parse($con, "INSERT INTO PENGGUNA (IDUSER, NAMA, EMAIL, USERNAME, PASSWORD) VALUES (:W1, :W2, :W3, :W4, :W5)");
	}
	else
	{
		$q1 = oci_parse($con, "UPDATE PENGGUNA SET NAMA=:W2, EMAIL=:W3, USERNAME=:W4, PASSWORD=:W5 WHERE IDUSER=:W1");
	}
	//KALAU GET INDEX NYA BERDASARKAN FORM NAME
	oci_bind_by_name($q1, ":W1", $_GET['idusernya']);
	oci_bind_by_name($q1, ":W2", $_GET['namanya']);
	oci_bind_by_name($q1, ":W3", $_GET['emailnya']);
	oci_bind_by_name($q1, ":W4", $_GET['usernamenya']);
	oci_bind_by_name($q1, ":W5", $_GET['passwordnya']);
	oci_execute($q1);

	header("location: index.php");
}

if(isset($_GET['aksi']))
{
	$ambilid = $_GET['id'];

	//aksi untuk mengambil data sekaligus edit
	if($_GET['aksi'] == 'edit')
	{
		$q2 = oci_parse($con, "SELECT * FROM PENGGUNA WHERE IDUSER = :W1");
		//NAMA INDEX BERDASARKAN ID BUTTON EDIT
		oci_bind_by_name($q2, ":W1", $ambilid);
		oci_execute($q2);
		$data = oci_fetch_array($q2, OCI_ASSOC+OCI_RETURN_NULLS);

	}

	//aksi untuk hapus
	elseif($_GET['aksi'] == 'hapus')
	{
		$q3 = oci_parse($con, "DELETE FROM PENGGUNA WHERE IDUSER=:W1");
		oci_bind_by_name($q3, ":W1", $ambilid);
		oci_execute($q3);
		header("location: index.php");
	}
}
else
{
	//NAMA INDEX CAPITAL SEMUA SESUAI DATABASE
	$data = array("IDUSER"=>'', "NAMA"=>'', 'EMAIL'=>'', 'USERNAME'=>'', 'PASSWORD'=>'');
}

?>
<form method="get" action="index.php">
	<input type="hidden" name="patokan" value="<?php echo $data['IDUSER'];?>">
	ID User : <input type="text" name="idusernya" value="<?php echo $data['IDUSER'];?>" /><br>
	Nama : <input type="text" name="namanya" value="<?php echo $data['NAMA'];?>" /><br>
	Email : <input type="email" name="emailnya" value="<?php echo $data['EMAIL'];?>" /><br>
	Username : <input type="text" name="usernamenya" value="<?php echo $data['USERNAME'];?>" /><br>
	Password : <input type="password" name="passwordnya"  value="<?php echo $data['PASSWORD'];?>" /><br>
	<input type="submit" name="btnsubmit" value="Simpan" />
</form>

<table border='1'>
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Username</th>
		<th>Password</th>
		<th></th>
	</tr>
	<?php
	while($dd = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS))
	{
		echo "<tr>"; 
			echo "<td>".$dd['IDUSER']."</td>";
			echo "<td>".$dd['NAMA']."</td>";
			echo "<td>".$dd['EMAIL']."</td>";
			echo "<td>".$dd['USERNAME']."</td>";
			echo "<td>".$dd['USERNAME']."</td>";
			echo "<td>
					[<a href='index.php?aksi=edit&id=".$dd['IDUSER']."'>edit</a>]
					[<a href='index.php?aksi=hapus&id=".$dd['IDUSER']."'>hapus</a>]
				  </td>";
		echo "</tr>";
	}

	?>
</table>