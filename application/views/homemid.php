<div class=" grey">
<div class="pagecontainer">
				<div class="headertext">
					 ITEMS ONLINE: <hr>
                </div>

				

                <!-- phone category -->
				
					
				
				<div class="positioner">
				<?php if(!empty($items)){
					echo '<div class="category_title"><h4>Phones</h4></div>';
				}?>
				
				  <div class="product_container">
				  
                        <?php foreach($items as $item):?>
                             <!-- Below is the product container -->
							      <!-- creating the card -->
							    <div class="card" style=" margin: 10px; background-color:rgba(255, 255, 255, 0.473) !important">

									<div class="card-body">
										<div class="crow">
												<div class="gd-12 gd-m-12 gd-s-4">
													<img  class=" img-responsive" style=' display:block; height: 100%; width: 100%; object-fit: contain' src="<?php echo site_url()?>/resources/images/<?php  echo $item['image'];?>">
												</div>
												<div class="gd-12 gd-m-12 gd-s-8" style="text-align:center;">
													<h5 class="card-title">Title: <?php echo $item['product_title']?></h5>
													<p class="card-text">Price: <?php echo $item['price']?></p>
													<a  class="btn btn-custom" href="<?=site_url("item/single_item/".$item["product_id"])?>" id="mymodal"> Get it !</a>
												</div>
										</div>
									</div>
									</div>
							
						<?php endforeach;?>
               		 </div>
				</div>

				<!-- laptop here -->
				<div class="positioner">

				<?php if(!empty($laptop)){
					echo'<div class="category_title"><h4>Laptops</h4></div>';
				}?>
				
				  <div class="product_container">
				  
                        <?php foreach($Laptop as $item):?>
                            <!-- Below is the product container -->
							      <!-- creating the card -->
							    <div class="card" style=" margin: 10px; background-color:rgba(255, 255, 255, 0.473) !important">

									<div class="card-body">
										<div class="crow">
												<div class="gd-12 gd-m-12 gd-s-4">
													<img  class=" img-responsive" style=' display:block; height: 100%; width: 100%; object-fit: contain' src="<?php echo site_url()?>/resources/images/<?php  echo $item['image'];?>">
												</div>
												<div class="gd-12 gd-m-12 gd-s-8" style="text-align:center;">
													<h5 class="card-title">Title: <?php echo $item['product_title']?></h5>
													<p class="card-text">Price: <?php echo $item['price']?></p>
													<a  class="btn btn-custom" href="<?=site_url("item/single_item/".$item["product_id"])?>" id="mymodal"> Get it !</a>
												</div>
										</div>
									</div>
									</div>
							
						<?php endforeach;?>
               		 </div>
				</div>
				  
				<!-- home appiances -->
				<div class="positioner">
				<?php if(!empty($laptop)){
					echo'<div class="category_title"><h4>Home Appliances</h4></div>';
				}?>
			
				  <div class="product_container">
				  
                        <?php foreach($HM as $item):?>
                             <!-- Below is the product container -->
							      <!-- creating the card -->
							    <div class="card" style=" margin: 10px; background-color:rgba(255, 255, 255, 0.473) !important">

									<div class="card-body">
										<div class="crow">
												<div class="gd-12 gd-m-12 gd-s-4">
													<img  class=" img-responsive" style=' display:block; height: 100%; width: 100%; object-fit: contain' src="<?php echo site_url()?>/resources/images/<?php  echo $item['image'];?>">
												</div>
												<div class="gd-12 gd-m-12 gd-s-8" style="text-align:center;">
													<h5 class="card-title">Title: <?php echo $item['product_title']?></h5>
													<p class="card-text">Price: <?php echo $item['price']?></p>
													<a  class="btn btn-custom" href="<?=site_url("item/single_item/".$item["product_id"])?>" id="mymodal"> Get it !</a>
												</div>
										</div>
									</div>
									</div>
							
						<?php endforeach;?>
               		 </div>
				</div>
		<!--closing the big div  -->
</div>