<div class="main_bg">
	<div class="wrap">
		<div class="main">
			<div class="container">
				<div id="portfoliolist">
				<?php foreach ($news as $data) {?>
				<a href="<?php echo site_url()."home/read/".$data['id'];?>">
					<div class="portfolio">
						<div class="portfolio-wrapper">
							<img src="<?php echo base_url().'assets/images/'.$data['picture'];?>"/>
							<div class="label">
								<div class="label-text">
									<p class="text-title"><?= $data['title']; ?></p>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>
				</a>
				<?php } ?>
				</div>
			</div><!-- end container -->
		</div>
	</div>
</div>
