<?php 

  require_once "../oracle/proses/prosesLogin.php";
?>

  <div class="app app-default">

    <div class="app-container app-login">
      <div class="flex-center">
        <div class="app-header"></div>
        <div class="app-body">
          

          <div class="loader-container text-center">
              <div class="icon">
                <div class="sk-folding-cube">
                    <div class="sk-cube1 sk-cube"></div>
                    <div class="sk-cube2 sk-cube"></div>
                    <div class="sk-cube4 sk-cube"></div>
                    <div class="sk-cube3 sk-cube"></div>
                  </div>
                </div>
              <div class="title">Logging in...</div>
          </div>


          <div class="app-block">
              <div class="app-form">
                <div class="form-header">
                  <div class="app-brand"><span class="highlight">Borneo</span></div>

                </div>



                <!-- form utama -->
                <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST" class="masuk" >

                        <!-- alert bila salah -->
                        <?php if(isset($msg)) : ?>
                            <div class="alert alert-danger">
                            <?= $msg?>
                            </div>
                        <?php endif ;?>


                        <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">
                            <i class="fa fa-envelope" aria-hidden="true"></i></span>

                          <input type="email" name="email" class="form-control" placeholder="Emial Address" >
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon2">
                            <i class="fa fa-key" aria-hidden="true"></i></span>
                        
                          <input type="password" class="form-control" placeholder="Password" name="password" >
                        </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-submit">Login</button> 
                        </div>

                         <p class="text-center">Belum punya akun? <a href="?page=register">Daftar</a></p>

                        <input type="hidden" name="_form" value="on">
                </form>
               

                <div class="form-line">
                  <div class="title">OR</div>
                </div>


                <div class="form-footer">
                  <button type="button" class="btn btn-default btn-sm btn-social __facebook">
                    <div class="info">
                      <i class="icon fa fa-facebook-official" aria-hidden="true"></i>
                      <span class="title">Login with Facebook</span>
                    </div>
                  </button>
                </div>
                <br>
                


                    </div>
             </div><!-- app block -->
        </div><!-- app body -->
        <div class="app-footer"></div>
      </div> <!-- flex center -->
    </div><!-- app login -->

  </div><!-- app default -->
  
  <script type="text/javascript" src="../login/assets/js/vendor.js"></script>
  <script type="text/javascript" src="../login/assets/js/app.js"></script>


