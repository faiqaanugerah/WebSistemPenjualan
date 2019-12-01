<!----content---->
				<div class="content">
					<div class="container">
				</div>
				<div class="clearfix"> </div>
				<!-- //products ---->
				<!----product-details--->
				<div class="product-details">
				<form method="post" action="<?php echo base_url('user'); ?>">
					<div class="container">
					<div class="product-details-row1">
					<?php
                	foreach ($penjualan as $pen ){
              		?>
						<div class="product-details-row1-head">
							<input type="hidden" name="id_penjualan" value="<?php echo $pen->id_penjualan;?>">
							<h2 style="font-family: Berlin Sans FB; font-size: 60px;"><?php echo $pen->nama_barang;?></h2>
							<p>Product By Camilan Goreng Dua Putra</p>
						</div>

						<div class="col-md-4 product-details-row1-col1">
							<!----details-product-slider--->
						<!-- Include the Etalage files -->
							<link rel="stylesheet" href="<?php echo base_url('asset/css/etalage.css')?>">
							<script src="<?php echo base_url() ?>asset/js/jquery.etalage.min.js"> </script>
						<!-- Include the Etalage files -->
						<script>
								jQuery(document).ready(function($){
					
									$('#etalage').etalage({
										thumb_image_width: 300,
										thumb_image_height: 400,
										source_image_width: 900,
										source_image_height: 1000,
										show_hint: true,
										click_callback: function(image_anchor, instance_id){
											alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
										}
									});
									// This is for the dropdown list example:
									$('.dropdownlist').change(function(){
										etalage_show( $(this).find('option:selected').attr('class') );
									});
		
							});
						</script>
						<!----//details-product-slider--->
						<div class="details-left">
							<div class="details-left-slider">
								<ul id="etalage">
									<li>
										<a href="optionallink.html">
											<img class="etalage_thumb_image" src="<?php echo base_url('asset/images/jagung1.jpg')?>" />
											<img class="etalage_source_image" src="<?php echo base_url('asset/images/jagung1.jpg')?>" />
										</a>
									</li>
									<li>
										<img class="etalage_thumb_image" src="<?php echo base_url('asset/images/kacang_telur2.jpeg')?>" />
										<img class="etalage_source_image" src="<?php echo base_url('asset/images/kacang_telur2.jpeg')?>" />
									</li>
									<li>
										<img class="etalage_thumb_image" src="<?php echo base_url('asset/images/kacang_bawang2.png')?>" />
										<img class="etalage_source_image" src="<?php echo base_url('asset/images/kacang_bawang2.png')?>" />
									</li>
								</ul>
							</div>
						</div>
					</div>
						<div class="details-left">
						</div>
					</div>
					<div class="col-md-8 product-details-row1-col2">
						<div class="product-price">
							<div class="product-price-left text-right">
								<span>Discount</span>
								<h5><?php echo 'Rp. '.$pen->harga;?></h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="product-price-details">
							<a class="shipping" href="#"><span> </span>Free shipping</a>
							<div class="clearfix"> </div>
							<div class="product-size-qty">
								<div class="pro-size"> 
									<span>Stock:</span>
									<select>
										<option><?php echo $pen->stock;?></option>
									</select>
								</div>
								<div class="pro-qty">
									<span>Jumlah Pembelian:</span>
									<select>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
									</select>
								</div> 
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
							<div class="product-cart-share">
								<div class="add-cart-btn">
									<input type="submit" value="Add to cart" />
								</div>
								<ul class="product-share text-right">
									<h3>Share This:</h3>
									<ul>
										<li><a class="share-face" href="#"><span> </span> </a></li>
										<li><a class="share-twitter" href="#"><span> </span> </a></li>
										<li><a class="share-google" href="#"><span> </span> </a></li>
										<li><a class="share-rss" href="#"><span> </span> </a></li>
										<div class="clear"> </div>
									</ul>
								</ul>
							</div>
						</div>
					</div>
						<div class="clearfix"> </div>
				<!--//product-details--->
				<?php } ?>
				</div>
				</form>
				</div>
				</div>
			<!----content---->
			<div class="clearfix"> </div>