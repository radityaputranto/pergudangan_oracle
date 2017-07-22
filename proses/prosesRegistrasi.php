<?php 
    include('config.php');


if (isset($_POST['_form']) AND $_POST['_form'] == 'on') {

        /*$na=69;*/
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $pass1=$_POST['password'];
        $pass2=$_POST['conPassword'];
        
        if(!empty(trim($nama)) && !empty(trim($email)) && !empty(trim($pass1))&& !empty(trim($pass2))){

            if($pass1==$pass2){


                $query = "INSERT INTO PENGGUNA VALUES(id_pengguna.NextVal,:W0, :W1, :W2, :W3)";

                $result = oci_parse($connection, $query);
                oci_bind_by_name($result, ":W0", $na);
                oci_bind_by_name($result, ":W1", $nama);
                oci_bind_by_name($result, ":W2", $email);
                oci_bind_by_name($result, ":W3", $pass1);
                oci_execute($result);






                 /* $nama = mysqli_real_escape_string($connection,$nama);
                $email = mysqli_real_escape_string($connection,$email);
                $pass1 = mysqli_real_escape_string($connection,$pass1);
*/
        //$pass1 = password_hash($pass1,PASSWORD_DEFAULT);
                    //memasukan ke dalam database
                /**
                if(register_user($connectionnection, $nama, $email, $pass1)){
                    $pesan_berhasil ="data berhasil di simpan";  
                    echo " <script>
                    window.location='?page=login';
                    </script>";
                }
                else{
                    $msg = "data gagal disimpan";
                    echo " <script>
                    window.location='?page=register';
                    </script>";
                }
                */
            }
            else{
            $msg = "password harus sama";
            }

        }
        

        else{
            $msg = "Tidak Boleh Kosong";      
        }
    }


/**
    function register_user($connection, $nama, $email, $pass1){
        //global $connectionnection;

        //security dalam php
        //hindari sql injection
        $nama = mysqli_real_escape_string($connection,$nama);
        $email = mysqli_real_escape_string($connection,$email);
        $pass1 = mysqli_real_escape_string($connection,$pass1);

        //$pass1 = password_hash($pass1,PASSWORD_DEFAULT);

        $query ="INSERT INTO PENGGUNA VALUES(id_pengguna.NextVal, '".$nama."', '".$email."', '".$pass1."')";
        $result = oci_parse($connection, $query)
        $hh = oci_execute($result);
        if ($hh) {
            
            return true;
        }
        else{
            
            return false;
        }
    }
    */
?>