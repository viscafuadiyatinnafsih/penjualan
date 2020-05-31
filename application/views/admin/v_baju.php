<?php $this->load->view('admin/header.php')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
        
            <div class="row">
                
            <hr>
            	<div class="row" align="center">
                	<b><h2><font color="#DB709">ShoppingGo</font></h2></b>
                </div>
            <hr/>

        <center><b>Daftar baju yang tersedia</b></center>
        <br></br>

		<div class="form-group row" align="left">
            <div class="col-sm-12 ml-auto">
               <a href="<?php echo site_url()?>/admin/add_baju" class="btn btn-success">Tambah</a>
            </div>
        </div>   


        <table id="bootstrap-data-table" class="table center table-striped table-bordered">
          	<thead align="center">
            <tr>
                <th><center>No</th>
                <th><center>Nama Pakaian</th>
                <th><center>Harga</th>
                <th><center>Gambar</th>
                <th colspan ="2"><center>Aksi</th>
    		</tr>
            
            <tr>
                <th><center>1</th>
                <th><center>jaket musin dingin</th>
                <th><center>Rp. 300.000</th>
                <th><center><img src="http://localhost/penjualan/assets/img/baju2.jpg" width="50px" height="50px" /></th>
                <th><center><a class="btn btn-default" title="Edit" href=""><i class="fa fa-edit "></i></a></th>
                <th><center><a class="btn btn-default" title="Edit" href=""><i class="fa fa-trash "></i></a></th>
    		</tr>
                                    
            <tr>
                <th><center>2</th>
                <th><center>kaus polos wanita</th>
                <th><center>Rp. 75.000</th>
                <th><center><img src="http://localhost/penjualan/assets/img/baju3.jpg" width="50px" height="50px" /></th>
                <th><center><a class="btn btn-default" title="Edit" href=""><i class="fa fa-edit "></i></a></th>
                <th><center><a class="btn btn-default" title="Edit" href=""><i class="fa fa-trash "></i></a></th>
    		</tr>
                                    
            <tr>
                <th><center>3</th>
                <th><center>kaus abu-abu wanita</th>
                <th><center>Rp. 90.000</th>
                <th><center><img src="http://localhost/penjualan/assets/img/baju4.jpg" width="50px" height="50px" /></th>
                <th><center><a class="btn btn-default" title="Edit" href=""><i class="fa fa-edit "></i></a></th>
                <th><center><a class="btn btn-default" title="Edit" href=""><i class="fa fa-trash "></i></a></th>
    		</tr>
                                    
            <tr>
                <th><center>4</th>
                <th><center>sweater</th>
                <th><center>Rp. 150.000</th>
                <th><center><img src="http://localhost/penjualan/assets/img/baju5.jpg" width="50px" height="50px" /></th>
                <th><center><a class="btn btn-default" title="Edit" href=""><i class="fa fa-edit "></i></a></th>
                <th><center><a class="btn btn-default" title="Edit" href=""><i class="fa fa-trash "></i></a></th>
    		</tr>
                                    
            <tr>
                <th><center>5</th>
                <th><center>kemeja putih pria</th>
                <th><center>Rp. 200.000</th>
                <th><center><img src="http://localhost/penjualan/assets/img/baju1.jpg" width="50px" height="50px" /></th>
                <th><center><a class="btn btn-default" title="Edit" href=""><i class="fa fa-edit "></i></a></th>
                <th><center><a class="btn btn-default" title="Edit" href=""><i class="fa fa-trash "></i></a></th>
   			</tr>
            </thead>
        </table>

	</div>
	</div>

<?php $this->load->view('admin/footer.php')?>

                        
