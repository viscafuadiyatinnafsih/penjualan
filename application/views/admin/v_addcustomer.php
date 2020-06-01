 <?php $this->load->view('admin/header.php')?>                
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2><font color="#DB709">ShoppingGo</h2>   

                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />

                <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data customer
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    <form role="form" method="post" action="<?= site_url()?>/admin/customer/add">
                                        <input type="hidden" name="id_customer" required value="<?php if (@$detail){ echo @$detail->id_customer;} else { echo set_value('id_customer');}?>">


                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required value="<?php if (@$detail){ echo @$detail->nama_lengkap;} else { echo set_value('nama_lengkap');}?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" required value="<?php if (@$detail){ echo @$detail->alamat;} else { echo set_value('alamat');}?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Telepon</label>
                                            <input type="number" name="no_telp" class="form-control" placeholder="Nomor Telepon" required value="<?php if (@$detail){ echo @$detail->no_telp;} else { echo set_value('no_telp');}?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control" placeholder="Email" required value="<?php if (@$detail){ echo @$detail->email;} else { echo set_value('email');}?>" />
                                        </div>
                                        <br>
                                        
                                        
                                        <input type="submit" class="btn btn-success form-control" name="submit" value="Simpan">

                                    </form>
                                    
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>

                
<?php $this->load->view('admin/footer.php')?>