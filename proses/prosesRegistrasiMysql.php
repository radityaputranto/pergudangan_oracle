<?php 
    include('../config.php');
    function cek_ketersedian($nama,$email){
        global $connection;
        $nama = mysqli_real_escape_string($connection,$nama);
        $email = mysqli_real_escape_string($connection,$email);

        $cek_nama="SELECT * FROM user  WHERE nama = '$nama'";
        $cek_email="SELECT * FROM user  WHERE email = '$email'";

        /*contoh MYSQL*/
        /*if ($result = $connection->query($cek_nama))*/
        if ($result = oci_parse($connection,$cek_nama))
         {
            /*contoh MYSQL*/
            /*if ( $result2 = $connection->query($cek_email)) {*/
            if ( $result2 = oci_parse($connection,$cek_email)) {
              /* if (mysqli_num_rows($result) == 0  ) {
                    if (mysqli_num_rows($result2) == 0) {
              */              return true;
               /*         }    
                }
*/
               /* else return false; 
            }*/

                
        }

    }





    function register_user($nama,$email,$pass1){
        global $connection;

        //security dalam php
        //hindari sql injection
        $nama = mysqli_real_escape_string($connection,$nama);
        $email = mysqli_real_escape_string($connection,$email);
        $pass1 = mysqli_real_escape_string($connection,$pass1);

        //$pass1 = password_hash($pass1,PASSWORD_DEFAULT);
        


        $query ="INSERT INTO user VALUES(NULL, '$nama', '$email', md5('$pass1'))";
        $result = oci_parse($connection,$query)
        /*$daftar=oci_execute($result);*/
        if ($result) {
            
            return true;
        }
        else{
            
            return false;
        }
    }




if (isset($_POST['_form']) AND $_POST['_form'] == 'on') {

        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $pass1=$_POST['password'];
        $pass2=$_POST['conPassword'];
        
        if(!empty(trim($nama)) && !empty(trim($email)) && !empty(trim($pass1))&& !empty(trim($pass2))){

            if($pass1==$pass2){
                if (cek_ketersedian($nama,$email)){

                    //memasukan ke dalam database
                    if(register_user($nama,$email,$pass1)){
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
                }
                else{
                    $msg = "username / email telah terdaftar";
                }

            
            }
            else{
            $msg = "password harus sama";
            }

        }
        

        else{
            $msg = "Tidak Boleh Kosong";      
        }
    }

?>