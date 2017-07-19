<?php 
include "config.php"; 
require_once "pages/header.php";   

?>   



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

        $id=$_GET['id_pohon'];
        $no=1;
        
      /*pembetulan*/

            $query ="SELECT * FROM pohon WHERE id_pohon='$id'";    
          $data= $connection->query($query);
          while ($r=mysqli_fetch_array($data)) {

          ?>






    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <i class="fa fa-leaf" aria-hidden="true"></i></span>
      <input type="text" class="form-control" placeholder="Nama pohon" aria-describedby="basic-addon1" value=" <?php echo $r['nama_pohon']; ?>" disabled="">
    </div>

    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <i class="fa fa-book" aria-hidden="true"></i></span>
      <input type="text" class="form-control" placeholder="Jenis" aria-describedby="basic-addon1" value="<?php echo $r['jenis_pohon']; ?>" disabled="">
    </div>

    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <i class="fa fa-arrows-v" aria-hidden="true"></i></span>
      <input type="text" class="form-control" placeholder="Ukuran" aria-describedby="basic-addon1" value="<?php echo $r['ukuran_pohon']; ?>" disabled="">
    </div>

    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <i class="fa fa-money" aria-hidden="true"></i></span>
      <input type="text" class="form-control" placeholder="Harga" aria-describedby="basic-addon1" value="<?php echo $r['harga_pohon']; ?>" disabled="">
    </div>

    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
        <i class="fa-map-marker" aria-hidden="true"></i></span>
      <input type="text" class="form-control" placeholder="Lokasi" aria-describedby="basic-addon1" value="<?php echo $r['lokasi']; ?>" disabled="">
    </div>

        <?php
        }
       ?>
  </div>




  <!-- kanan -->          
  <div class="col-md-6">
 
  <h3>Edit Data</h3>
  <form action="proses/prosesEdit.php" method="POST">
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
