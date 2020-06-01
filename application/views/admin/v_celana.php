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
        <div class="form-group row" align="left">
                <div class="col-sm-12 ml-auto">
                    <a href="<?php echo site_url()?>/admin/celana/add" class="btn btn-success">Tambah</a>
                </div>
        </div>    


        <div class="row">
            <div class="col-md-12">
            <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data celana yang tersedia
                    </div>
                <div class="panel-body">
                     <!-- /. CARI DATA  -->
                        <form align="right" action="" method="POST">
                        Search : <input type="text" name="query" placeholder="cari data"/>
                        </form><br>
                    <div class="table-responsive">
                        <?php if ($hasil):?>
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                            <th><center><b>No.</th>
                            <th><center><b>Nama Celana</th>
                            <th><center><b>Harga</th>
                            <th><center><b>Deskripsi</th>
                            <th><center><b>Gambar</th>
                            <th colspan="3"><center><b>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;?>
                            <?php foreach ($hasil as $row):?>
                            <tr>
                            <td><center><?php echo $i?>.</td>
                            <td><center><?php echo $row->nama_celana?></td>
                            <td><center>Rp.<?php echo number_format($row->harga,0,',','.')?>,-</td>
                            <td><center><?php echo $row->deskripsi?></td>
                             <td><center><?php echo $row->gambar?></td>
                            <td align="center"><a class="btn btn-default" href="<?php echo site_url("admin/celana/add/$row->id_celana")?>" title="Edit"><i class="fa fa-edit "></i></a></td>

                            <td align="center"><a onclick="return confirm('Yakin data anda ingin di hapus?')" class="btn btn-default" href="<?php echo site_url("admin/celana/delete/$row->id_celana")?>" title="Hapus"><i class="fa fa-trash"></i></a></td>
                            
                            </tr>
                                <?php $i++?>
                                <?php endforeach?>
                        </tbody>
                        </table>
                            <?php else: ?>
                            Tidak ada data
                            <?php endif?>
                </div>
                </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
                <!-- /. ROW  -->
<?php $this->load->view('admin/footer.php')?>
