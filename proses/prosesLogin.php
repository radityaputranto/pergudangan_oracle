<?php 
    include('config.php');

if (isset($_POST['_form']) AND $_POST['_form'] == 'on') {

/*    $query = "SELECT * FROM PENGGUNA WHERE email='$_POST[email]' AND password='" . $_POST['password'] . "'";
*/

$email=$_POST['email'];
$pass1=$_POST['password'];


    $query = "SELECT * FROM PENGGUNA WHERE email='$email' AND password='$pass1'";


    /*versi MySql*/
    /*if ($query = $connection->query($query)) {
        if ($query->num_rows) {*/
    $hasil= oci_parse($connection, $query);
    $data= oci_execute($hasil);



if ($data >= 1)

    {

                $_SESSION['is_logged'] = true;
                $_SESSION['email'] = $email;

            header('location: ?page=home');

    }

else

    {

    echo "<script>
                    alert('Email dan Password tidak cocok! Periksa kembali');
                    window.location='?page=login';
        </script>";
    }

}





    /*if () {
        if () {

            session_start();
            while ($data = $query->fetch_array()) {
                $_SESSION['is_logged'] = true;
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['email'] = $data['email'];
            }
            header('location: ?page=home');
        } else {
            $msg= "Email dan Password tidak cocok! Periksa kembali";
            /*echo "
                <script>
                    alert('Email dan Password tidak cocok! Periksa kembali');
                    window.location='?page=login';
                </script>
            ";*/
   /*     }
    } else {
        echo "<h1>Whooops! query error</h1>";
    }*/

 ?>