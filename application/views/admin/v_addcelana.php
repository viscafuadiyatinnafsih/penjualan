 <?php $this->load->view('admin/header.php')?>                
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2><font color="#DB709">ShoppingGo</font></h2>   

                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />

                <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data celana yang tersedia
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    <form role="form" method="post" action="<?= site_url()?>/admin/celana/add">
                                        <input type="hidden" name="id_celana" required value="<?php if (@$detail){ echo @$detail->id_celana;} else { echo set_value('id_celana');}?>">


                                        <div class="form-group">
                                            <label>Nama Pakaian</label>
                                            <input class="form-control" name="nama_celana" placeholder="Nama Celana" required value="<?php if (@$detail){ echo @$detail->nama_celana;} else { echo set_value('nama_celana');}?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" name="harga" class="form-control" placeholder="Harga" required value="<?php if (@$detail){ echo @$detail->harga;} else { echo set_value('harga');}?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input type="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi" required value="<?php if (@$detail){ echo @$detail->deskripsi;} else { echo set_value('deskripsi');}?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="gambar" class="form-control" placeholder="Gambar" required value="<?php if (@$detail){ echo @$detail->gambar;} else { echo set_value('gambar');}?>" />
                                        </div>
                                        <br>
                                        
                                        
                                        <input type="submit" class="btn btn-success form-control" name="submit" value="Simpan">

                                    </form>
                                    
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>

                
<?php $this->load->view('admin/footer.php')?>