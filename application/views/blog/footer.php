<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<div class="span_of_4">
			<div class="span1_of_4">
				<h4>About Us</h4>
				<p>It is a long established fact that a reader will looking layout. There are many variations of passages of Lorem Ipsum available words.</p>
				<span>Address</span>
				<p>Perum Wirabaru II T.13</p>
				<p>Wiradesa, kab.Pekalongan</p>
				<p>ID 51152</p>
				<p>WhatsApp: (+62) 821 3304 1413</p>
				<p>Email: <a href="mailto:energenesis121@gmail.com">energenesis121(at)gmail.com</a></p>
				<p>Follow on: <a href="//fb.com/rizkisimen">Facebook</a>, <a href="//twitter.com/rizkitanjung1">Twitter</a></p>
				<div class="f_icons">
					<ul>
						<li><a class="icon1" href="#"></a></li>
						<li><a class="icon2" href="#"></a></li>
						<li><a class="icon3" href="#"></a></li>
						<li><a class="icon4" href="#"></a></li>
						<li><a class="icon5" href="#"></a></li>
					</ul>
				</div>
			</div>

			<div class="span1_of_4">
				<h4>latest posts</h4>
				<?php
					$news1 = $this->db->query('select * from news order by id desc limit 3')->result_array();
					foreach ($news1 as $data1) {
				?>
				<span><?= $data1['title']; ?></span>
				<p><?= $data1['date']; ?></p>
				<?php } ?>
			</div>
			<div class="clear"></div>
		</div>
		<div class="footer_top">
			<div class="f_nav1">
				<ul>
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="<?php echo base_url()."blog";?>">Blog</a></li>
					<li><a href="<?php echo base_url()."about";?>">About</a></li>
					<li><a href="<?php echo base_url()."contact";?>">Contact</a></li>
				</ul>
			</div>
			<div class="copy">
				<p class="link"><span>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
</body>
</html>
