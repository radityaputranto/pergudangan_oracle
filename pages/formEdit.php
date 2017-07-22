<?php 
include "../config.php"; 
/*require_once "index.php";   */

?>   


<!DOCTYPE html>
<html>
<head>
  <title>Borneo | Apliaksi Stock pohon</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="../assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/yellow.css">

  <!-- custom CSS -->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>


<!-- navbar dan side bar -->
  <div class="app app-default">

  <aside class="app-sidebar" id="sidebar">
    <div class="sidebar-header">
      <a class="sidebar-brand" href="#"><span class="highlight">Borneo </span></a>
      <!-- <a>  Aplikasi Tanam Pohon</a> -->
      <button type="button" class="sidebar-toggle">
        <i class="fa fa-times"></i>
      </button>
    </div>
    <div class="sidebar-menu">
      <ul class="sidebar-nav">
        <li class="">
          <a href="../index.php">
            <div class="icon">
              <i class="fa fa-database" aria-hidden="true"></i>
            </div>
            <div class="title">Stock Pohon</div>
          </a>
          <a href="?page=formAdd"> 
          <button type="button" class="btn btn-default">Tambah Stock</button></a>
        </li>
    </div>
  </aside>


<!-- navbar -->
  <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
    <div class="dropdown-background">
      <div class="bg"></div>
    </div>
    <div class="dropdown-container">
      {{list}}
    </div>
  </script>
  <div class="app-container">

    <nav class="navbar navbar-default" id="navbar">
    <div class="container-fluid">
      <div class="navbar-collapse collapse in">
        <ul class="nav navbar-nav navbar-mobile">
          <li>
            <button type="button" class="sidebar-toggle">
              <i class="fa fa-bars"></i>
            </button>
          </li>
          <li class="logo">
            <a class="navbar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>
          </li>
          <li>
            <button type="button" class="navbar-toggle">
              <img class="profile-img" src="../assets/images/profile.png">
            </button>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-left">
          <li class="navbar-title"><span class="highlight">Aplikasi Tanam Pohon</span></li>

        
        </ul>
        <ul class="nav navbar-nav navbar-right">


          <!-- PHP untuk mengambil data user -->
          <?php 

          global $connection;

          $no=1;
          
            $query2 ="SELECT * FROM PENGGUNA ";    
            /*$data2= $connection->query($query2);
            $u=mysqli_fetch_array($data2);*/

            $data2= oci_parse($connection,$query2);
            oci_execute($data2);

            ?>

          <li class="dropdown profile">
            <a href="soon.html" class="dropdown-toggle"  data-toggle="dropdown">
              <img class="profile-img" src="../assets/images/profile.png">
              <div class="title">Profile</div>
            </a>
            <div class="dropdown-menu">
              <div class="profile-info">
                <h4 class="username"> <?php echo $u['nama']; ?> </h4>
              </div>
              <ul class="action">
                <li>
                  <a href="soon.html">
                    Profile
                  </a>
                </li>
                <li>
                  <a href="soon.html">
                    <span class="badge badge-danger pull-right">5</span>
                    My Inbox
                  </a>
                </li>
                <li>
                  <a href="soon.html">
                    Setting
                  </a>
                </li>
                <li>
                 <a href="?page=logout">
                    Logout
                  </a>
                  
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    </nav>
<!-- akhir sidebar -->

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <center>UPDATE DATA</center>
        </div>
        <div class="card-body">
          <div class="row">
  <!-- Kiri -->
  <div class="col-md-6">
    <h3>Data Asal</h3>


      <?php 

        global $connection;

        $id=$_GET['id'];
        $no=1;
        
      /*menggunakan MySql*/

         /* $query ="SELECT * FROM pohon WHERE id_pohon='$id'";    
          $data= $connection->query($query);
          while ($data=mysqli_fetch_array($data)) {*/

      /*menggunakan Oracle*/
          $query = oci_parse($connection, "SELECT * FROM POHON WHERE ID_POHON ='$id' ");
            oci_execute($query);

            $data = array("ID_POHON"=>'', "NAMA_POHON"=>'', "JENIS_POHON"=>'', 'UKURAN_POHON'=>'', 'HARGA_POHON'=>'', 'LOKASI'=>'');
            while($data = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS))
            {






          ?>






    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <i class="fa fa-leaf" aria-hidden="true"></i></span>
      <input type="text" class="form-control" placeholder="Nama pohon" aria-describedby="basic-addon1" value=" <?php echo $data['NAMA_POHON']; ?>" disabled="">
    </div>

    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <i class="fa fa-book" aria-hidden="true"></i></span>
      <input type="text" class="form-control" placeholder="Jenis" aria-describedby="basic-addon1" value="<?php echo $data['JENIS_POHON']; ?>" disabled="">
    </div>

    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <i class="fa fa-arrows-v" aria-hidden="true"></i></span>
      <input type="text" class="form-control" placeholder="Ukuran" aria-describedby="basic-addon1" value="<?php echo $data['UKURAN_POHON']; ?>" disabled="">
    </div>

    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <i class="fa fa-money" aria-hidden="true"></i></span>
      <input type="text" class="form-control" placeholder="Harga" aria-describedby="basic-addon1" value="<?php echo $data['HARGA_POHON']; ?>" disabled="">
    </div>

    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <i class="fa-map-marker" aria-hidden="true"></i></span>
      <input type="text" class="form-control" placeholder="Lokasi" aria-describedby="basic-addon1" value="<?php echo $data['LOKASI']; ?>" disabled="">
    </div>

        <?php
        }
       ?>
  </div>




  <!-- kanan -->          
  <div class="col-md-6">
 
  <h3>Edit Data</h3>
  <form action="../proses/prosesEdit.php?id=<?php echo"$id"; ?>" method="POST">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <i class="fa fa-leaf" aria-hidden="true"></i></span>
      <input type="text" class="form-control" placeholder="Nama pohon" aria-describedby="basic-addon1" value="" name="nama">
    </div>

    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <i class="fa fa-book" aria-hidden="true"></i></span>
      <!-- <input type="text" class="form-control" placeholder="Jenis" aria-describedby="basic-addon1" value=""> 
      -->
      <select class="select2" name="jenis">
      <option value="Grade A">Grade A</option>
      <option value="Grade B">Grade B</option>
      <option value="Grade C">Grade C</option>
      
    </select>

    </div>

    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <i class="fa fa-arrows-v" aria-hidden="true"></i></span>
      <input type="text" class="form-control" placeholder="Ukuran" aria-describedby="basic-addon1" value="" name="ukuran">
    </div>

    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <i class="fa fa-money" aria-hidden="true"></i></span>
      <input type="text" class="form-control" placeholder="Harga" aria-describedby="basic-addon1" value="" name="harga">
    </div>

    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <i class="fa-map-marker" aria-hidden="true"></i></span>
      <input type="text" class="form-control" placeholder="Tempat" aria-describedby="basic-addon1" value="" name="tempat">
    </div>
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" name="save" class="btn btn-success">Simpan</button>
        <button type="button" class="btn btn-default" ><a href="../index.php">Batalkan</a></button>
      </div>
    </div>
  </div>
  </form>
</div>
        </div>
      </div>
    </div><!-- akhir md-12 -->
    </div><!-- akhir row -->
    
  </div>
</div>

  </div>
  
  <script type="text/javascript" src="../assets/js/vendor.js"></script>
  <script type="text/javascript" src="../assets/js/app.js"></script>

</body>
</html>
