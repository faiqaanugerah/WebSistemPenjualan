<!-- ********** Hero Area Start ********** -->
        <script src="<?php echo base_url() ?>asset/js/js/responsiveslides.min.js" ></script>
             <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 4
                  $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                      $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                      $('.events').append("<li>after event fired.</li>");
                    }
                  });
            
                });
              </script>
            <!----//End-slider-script---->
                        <!-- Slideshow 4 -->
                <div  id="top" class="callbacks_container">
                  <ul class="rslides" id="slider4">
                    <li>
                      <img src="<?php echo base_url('asset/images/kcarab.jpg')?>" alt="">
                       <div class="caption">
                        <div class="slide-text-info">
                            <h1>PAKET KACANG KACANGAN</h1>
                            <label>PROMO</label>
                            <a class="slide-btn" href="#"><span>Rp. 45.000,-</span> <small>Dapatkan Sekarang</small><label> </label></a>
                        </div>
                      </div>
                    </li>
                    <li>
                     <img src="<?php echo base_url('asset/images/kacangpromo.jpg')?>" alt="">
                       <div class="caption">
                        <div class="slide-text-info">
                            <h1>KACANG ARAB</h1>
                            <label>PROMO</label>
                            <a class="slide-btn" href="#"><span>Rp. 20.000,-</span> <small>Dapatkan Sekarang</small><label> </label></a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <img src="<?php echo base_url('asset/images/kacangpromo.jpg')?>" alt="">
                       <div class="caption">
                        <div class="slide-text-info">
                            <h1>KACANG ARAB</h1>
                            <label>PROMO</label>
                            <a class="slide-btn" href="#"><span>Rp. 20.000,-</span> <small>Dapatkan Sekarang</small><label> </label></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="clearfix"> </div>
            <!----- //End-slider---->
            <!----content---->
                <div class="content">
                    <div class="container">
                <!---top-row--->
                <div class="top-row"></div>
                </div>
                <!---top-row--->
                <div class="container"> 
                <!----speical-products---->
                <div class="special-products">
                    <div class="s-products-head">
                        <div class="s-products-head-left">
                            <h3>SPECIAL <span>PRODUCTS</span></h3>
                        </div>
                        <div class="s-products-head-right">
                            <a href="products.html"><span> </span>view all products</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!----special-products-grids---->
                    <div class="special-products-grids">
                        <?php foreach ($penjualan as $pen) :?>
                        <div class="col-md-3 special-products-grid text-center">
                            <a class="brand-name" href="single-page.html"><img src="<?php echo base_url('asset/images/logoku.png')?>" title="name" /></a>
                            <a class="product-here" href="#"><img src="<?php echo base_url('asset/images/jagung1.jpg')?>" title="<?php echo $pen->nama_barang;?>" /></a>
                            <h4><a href="#"><?php echo $pen->nama_barang;?></a></h4>
                            <a class="product-btn" href="<?= base_url('auth'); ?>"><span><?php echo 'Rp. '.$pen->harga;?></span><small>GET NOW</small><label> </label></a>
                        </div>
                        <?php endforeach;?>
                        <div class="clearfix"> </div>
                    </div>
                    <!---//special-products-grids---->
                </div>
                <!---//speical-products---->
                </div>