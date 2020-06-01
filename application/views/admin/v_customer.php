<?php $this->load->view('admin/header.php')?>
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

                <div class="form-group row" align="left">
                <div class="col-sm-12 ml-auto">
                    <a href="<?php echo site_url()?>/admin/customer/add" class="btn btn-success">Tambah</a>
                </div>
        </div>   


            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Customer
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
                                            <th><center><b>Nama Lengkap</th>
                                            <th><center><b>Alamat</th>
                                            <th><center><b>Nomor Telepon</th>
                                            <th><center><b>Email</th>
                                            <th colspan="2"><center><b>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1;?>
                                        <?php foreach ($hasil as $row):?>
                                        <tr>
                                            <td><center><?php echo $i?>.</td>
                                            <td><center><?php echo $row->nama_lengkap?></td>
                                            <td><center><?php echo $row->alamat?></td>
                                            <td><center><?php echo $row->no_telp?></td>
                                            <td><center><?php echo $row->email?></td>
                                             <td><center><a class="btn btn-default"  title="edit" href="<?php echo site_url("admin/customer/add/$row->id_customer")?>"><i class="fa fa-edit "></i></a></td>

                                            <td><center><a onclick="return confirm('Yakin data anda ingin di hapus?')" class="btn btn-default" title="hapus" href="<?php echo site_url("admin/customer/delete/$row->id_customer")?>"><i class="fa fa-trash"></i></a></td>
                                            
                                           
                                        </tr>
                                        <?php $i++?>
                                        <?php endforeach?>
                                        </tbody>
                                        </table>
                                        <?php else: ?>
                                        Tidak ada data
                                        <?php endif?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
<?php $this->load->view('admin/footer.php')?>
