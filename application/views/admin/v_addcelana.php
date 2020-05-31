 <?php $this->load->view('admin/header.php')?>                
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
                Tambah daftar celana
            </div>
        
        <div class="panel-body">
            <div class="row">
            <div class="col-md-12">
                                   
            <br>

        <form role="form" method="post">
            <div class="form-group">
                <label>Nama Pakaian</label>
                <input class="form-control" required name="nama pakaian" placeholder="nama pakaian" value="" />
            </div>
                                        
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga"  required class="form-control" placeholder="harga" value="" />
            </div>
            
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" required class="form-control" placeholder="gambar" value="" />
            </div>

                            
           
            <div class="form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label"></label>
                </div>
                            
                <div class="col-md-3">
                    <a href="<?php echo site_url() ?>/admin/celana"><input type="submit" class="form-control btn btn-warning btn-sm" name="submit" value="batal">
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

                
<?php $this->load->view('admin/footer.php')?>
