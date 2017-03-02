

<section id="charts" class="section">
    <div class="container">
        <div class="row title text-center">
            <h2 class="margin-top black">Predicted Graph of Risk factors</h2>
            <p class="light black">  
            <div class=" col-offset-4 col-md-12"> 
		        	
		        	<?php foreach ($charts as $ch): ?>
		        		
		        	
		        	<div>

				        <h5><?php echo $ch['Title'];?></h5>
				        <img src="<?=base_url()?>img/upload/<?php echo $ch['image'];?>"  ></a>
				        <p class="light black"> <?php echo $ch['Description'];?> </p>

					</div>
				<?php endforeach;?>
					

				</div>
			</p>
        </div>
        
    </div>
</section>