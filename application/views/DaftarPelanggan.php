<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .ini{
        margin-left: 20px;
      }
      h2{
        text-align: center;
        margin-top: 35px;
      }
    </style>
  </head>
  <body>

    <div class="container-fluid">
        <div class="block-header">
            <h2>
                Masukkan Daftar Pelanggan
            </h2>
        </div>
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <?php
                            $notifikasi = $this->session->flashdata('notif');
                            if($notifikasi != null){
                                echo '<div class="alert alert-danger">'.$notifikasi.'</div>';
                            }
                        ?>
                    </div>
                    <div class="body">
                        <form class="ini" id="form_validation" method="POST" action="<?php echo base_url('index.php/Pelanggan/SendDataPelanggan')?>">
                            <div class="form-group form-float">
                              <br>
                                <div class="form-line">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="NamaPelanggan">
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">No Telp</label>
                                    <input type="text" class="form-control" name="NoTelp">
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Alamat</label>
                                    <textarea name="Alamat" cols="30" rows="5" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                  <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="Username">
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="Password">
                                </div>
                            </div>
                            <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        <!-- #END# Basic Validation -->
    </div>

  </body>
</html>
