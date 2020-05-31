<?php $this->load->view('admin/header.php')?>
 <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Customer</h2>   
            
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
        <div class="form-group row" align="left">
                <div class="col-sm-12 ml-auto">
                    <a href="<?php echo site_url()?>/manager/data/add" class="btn btn-success">Tambah</a>
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
                       
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                            <th><center><b>No.</th>
                            <th><center><b>Nama Lengkap</th>
                            <th><center><b>Alamat</th>
                            <th><center><b>Nomor Telpon</th>
                            <th><center><b>E-mail</th>
                            </tr>
                        </thead>
                        
                       
                </div>
                </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
                <!-- /. ROW  -->
<?php $this->load->view('admin/footer.php')?>
