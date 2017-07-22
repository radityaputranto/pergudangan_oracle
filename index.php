<?php 
require_once "config.php";
session_start();
require_once "pages/header.php";


 ?>


 	<?php if (isset($_SESSION['is_logged'])): ?>
 	

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
          <a href="index.php">
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
              <img class="profile-img" src="assets/images/profile.png">
            </button>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-left">
          <li class="navbar-title"><span class="highlight">Aplikasi Stock Pohon</span></li>

        
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
            <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
              <img class="profile-img" src="assets/images/profile.png">
              <div class="title">Profile</div>
            </a>
            <div class="dropdown-menu">
              <div class="profile-info">
                <!-- <h4 class="username"> <?php echo $u['nama']; ?> </h4> -->
                <h4 class="username">Raditya </h4>
              </div>
              <ul class="action">
                <li>
                  <a href="pages/soon.html">
                    Profile
                  </a>
                </li>
                <li>
                  <a href="pages/soon.html">
                    <span class="badge badge-danger pull-right">5</span>
                    My Inbox
                  </a>
                </li>
                <li>
                  <a href="pages/soon.html">
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

  <!-- akhir navbar -->

 	<?php endif ?>

 	<!-- menampilkan halaman -->

            <?php include_once "pages/" . $page . ".php"; ?>
        
 </body>
 </html>