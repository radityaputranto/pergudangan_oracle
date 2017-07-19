<?php 
    
if (isset($_POST['_form']) AND $_POST['_form'] == 'on') {
    $query = "SELECT * FROM user WHERE email='$_POST[email]' AND password='" . md5($_POST['password']) . "'";
    if ($query = $connection->query($query)) {
        if ($query->num_rows) {
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
        }
    } else {
        echo "<h1>Whooops! query error</h1>";
    }
}
 ?>