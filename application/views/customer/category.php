<?php $this->load->view('customer/header.php')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
        
                 <div class="row">
                
                <hr>
                  <div class="row" align="center">
                    <b><h2><font color="#DB709">ShoppingGo</font></h2></b>
                    </div>
                <hr/>

                    <center><b>Kategori pakaian yang tersedia</b></center>
                    <br></br>
                    <a href="" class="fh5co-card-item">
                        <figure>
                            <div class="overlay"><i class="ti-shopping-cart" value="Tai"></i></div>
                            <center><img src="http://localhost/penjualan/assets/img/baju3.jpg" width="350px" height="250px" /></center>
                        </figure><br></br>
                        <div class="fh5co-text">
                             <center><a href="<?php echo site_url("customer/baju")?>" class="btn btn-warning">baju</a></center>
                        </div>
                    </a>
                </div>
                <br></br>

             
                    <a href="" class="fh5co-card-item">
                        <figure>
                            <div class="overlay"><i class="ti-shopping-cart" value="Tai"></i></div>
                            <center><img src="http://localhost/penjualan/assets/img/celana4.jpg" width="350px" height="250px" /></center>
                        </figure><br></br>
                        <div class="fh5co-text">
                             <center><a href="<?php echo site_url("customer/celana")?>" class="btn btn-warning">celana</a></center>
                        </div>
                    </a>
                </div>
                 
<?php $this->load->view('customer/footer.php')?>

                        