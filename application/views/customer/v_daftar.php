 <?php $this->load->view('customer/header.php')?>                
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
            <div class="row">
            <div class="col-md-12">
            <h2><font color="#DB709"><center>ShoppingGo</center></font></h2>   
            </div>
            </div>
            <hr />
               
        <div class="row">
            <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading">
                Masukkan data diri Anda terlebih dahulu
            </div>
        
        <div class="panel-body">
            <div class="row">
            <div class="col-md-12">
                                   
            <br>

        <form role="form" method="post">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input class="form-control" required name="nama pakaian" placeholder="nama pakaian" value="" />
            </div>
                                        
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat"  required class="form-control" placeholder="alamat" value="" />
            </div>
            
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" name="no_telp" required class="form-control" placeholder="no_telp" value="" />
            </div>

            <div class="form-group">
                <label>E-mail</label>
                <input type="text" name="email" required class="form-control" placeholder="email" value="" />
            </div>

                            
           
            <div class="form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label"></label>
                </div>
                            
                <div class="col-md-3">
                    <a href="<?php echo site_url() ?>/customer/transaksi"><input type="submit" class="form-control btn btn-warning btn-sm" name="submit" value="batal">
                </div>
            </div>
                    
        </form>
                <div class="col-md-3">
                    <input type="submit" class="form-control btn btn-primary btn-sm" name="submit" value="simpan"></a>
                </div>
            </div>
                            
    </div>
                                        

    </form>
                                    
    </div>
                     
 </div>
</div>

                
<?php $this->load->view('customer/footer.php')?>
