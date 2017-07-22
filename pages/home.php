<?php 
if (!isset($_SESSION['is_logged'])) {
    echo "
        <script>
            alert('Login dulu!');
            window.location='?page=login';
        </script>
    ";
}

$tgl=date("d/m/Y");
?>


      <div class="col-xs-12">
        <div class="card">
          <div class="card-header">
            Data Stock Pohon <br>
            <?php 
            echo $tgl; ?>

          </div>
          <div class="card-body no-padding">
            <table class="datatable table table-striped primary" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      
                      <th>Nama Pohon</th>
                      <th>Jenis</th>
                      <th>Ukuran</th>
                      <th>Harga</th>
                      <th>Tempat</th>
                      <th>Edit Data</th>
                      <th>Hapus Data</th>
                  </tr>
              </thead>
              <tbody>

        <?php 

          global $connection;

          $no=1;
          unset($data);
        /*pembetulan*/

            //MYSQL
            /*
              $query ="SELECT * FROM pohon ORDER BY nama_pohon";    
            $data= $connection->query($query);
            while ($r=mysqli_fetch_array($data)) {*/
            
            $query = oci_parse($connection, "SELECT * FROM POHON ORDER BY NAMA_POHON ");
            oci_execute($query);

            $data = array("ID_POHON"=>'', "NAMA_POHON"=>'', "JENIS_POHON"=>'', 'UKURAN_POHON'=>'', 'HARGA_POHON'=>'', 'LOKASI'=>'');
            while($data = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS))
            {

            ?>
             <tr>
          
          <td><?php echo $data['NAMA_POHON']; ?></td>
          <td><?php echo $data['JENIS_POHON']; ?></td>
          <td><?php echo $data['UKURAN_POHON']; ?></td>
          <td><?php echo $data['HARGA_POHON']; ?></td>
          <td><?php echo $data['LOKASI']; ?></td>

          <!-- <td><a href='?page=formEdit?id_pohon=<?php ;?>' class="tombol-edit">Edit</a> -->

          
          <td><a href='pages/formEdit.php?id=<?php echo $data['ID_POHON'];?>' class="tombol-edit">Edit</a>
          </td>

          <td>

          <a href='proses/prosesHapus.php?id=<?php echo $data['ID_POHON'];?>&nama=<?php echo $data['NAMA_POHON'];?>' class="tombol-hapus">Hapus</a>
          
          </td>
         </tr>
            <?php
          }
         ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
  </div>

  
  <script type="text/javascript" src="assets/js/vendor.js"></script>
  <script type="text/javascript" src="assets/js/app.js"></script>
