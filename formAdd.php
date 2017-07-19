<?php 

  include 'config.php';

 ?>


<!-- penmabahan header -->
<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    require_once "pages/header.php";
 ?>


 <!-- inti -->
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <!-- <div class="card-header">
          <center>UPDATE DATA</center>
        </div> -->
        <div class="card-body">
          <div class="row">
  <!-- Kiri -->
  
    <!-- kanan -->          
  <div class="col-md-6">
 
  <h3>Tambah Data</h3>
  <form action="proses/tambahPohon.php" method="POST">
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
        <i class="fa fa-map-marker" aria-hidden="true"></i></span>
      <input type="text" class="form-control" placeholder="Tempat" aria-describedby="basic-addon1" value="" name="tempat">
    </div>
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" name="save" class="btn btn-success">Simpan</button>
        <button type="button" class="btn btn-default">Batalkan</button>
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
  
  <script type="text/javascript" src="assets/js/vendor.js"></script>
  <script type="text/javascript" src="assets/js/app.js"></script>

</body>
</html>
