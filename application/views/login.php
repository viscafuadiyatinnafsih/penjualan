<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>/assetsassets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>/assetsassets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                 <img src="http://localhost/PLN/assets/img/find_user.png" width="100px" height="130px" />
                <h2><b><font color="ffffff"> ShoppingGo</font></b></h2>
               
                <h5><font color="ffffff">( Login diri Anda untuk mendapatkan akses )</font></h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               <!-- PESAN -->
               <?php $pesan = $this->session->flashdata('pesan');?>
                <?php if (@$pesan):?>
                <div class="alert alert-danger">
                  <center><strong>Login Gagal! </strong> Username atau Password Anda salah!</center>
                </div>
                <?php endif?>

                <?php $akses = $this->session->flashdata('akses');?>
                <?php if (@$akses):?>
                <div class="alert alert-warning">
                  <center><strong>Login Gagal! </strong> Bukan hak akses anda!</center>
                </div>
                <?php endif?>
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <center><strong>Input data Anda untuk masuk</strong></center>  
                            </div>
                            <div class="panel-body">
                                <form method="post" action="<?= site_url() ?>/login/validasi" role="form">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input required="" name="username" type="text" class="form-control" placeholder="Username " />
                                        </div>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input required="" name="pass" type="password" class="form-control"  placeholder="Password" />
                                        </div>
                            <div>
                              daftar? klik <a href="<?php echo site_url()?>/customer/daftar" style="text-decoration:none"> disini
                            </div>
                                    <center><input value="LOGIN" type="submit" name="submit" class="btn btn-success"></center> 
                                    <hr />
                                    
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url();?>/assetsassets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>/assetsassets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url();?>/assetsassets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>/assetsassets/js/custom.js"></script>
   
</body>
</html>
