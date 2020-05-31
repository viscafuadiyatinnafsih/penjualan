<?php $this->load->view('customer/header.php')?>                
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><font color="#DB709">Data Customer</font></h2>   

                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Harap isi data Anda terlebih dahulu</b>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                   
                                    <br>

                                    <form role="form" method="post" action="">
                                        <input type="hidden" name="id_user" required value="">

                                        <input type="hidden" name="level" value="2">


                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" required name="nama" placeholder="Nama Lengkap" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" required class="form-control" placeholder="Alamat" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Telepon</label>
                                            <input name="text" type="nomor telepon" required class="form-control" placeholder="Nomor Telepon" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="text" name="E-mail" required class="form-control" placeholder="E-mail" value="" />
                                        </div>
                                        
                                        </div>
                                        <p>
                                        <p>

                                        <td align="center"><a class="btn btn-warning" href="<?php echo site_url("customer/category")?>" title="simpan">batal</a></td></center>
                                        <td align="center"><a class="btn btn-success" href="<?php echo site_url("customer/transaksi")?>" title="simpan">simpan</a></td></center>



                                    </form>
                                    
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>

                
<?php $this->load->view('customer/footer.php')?>