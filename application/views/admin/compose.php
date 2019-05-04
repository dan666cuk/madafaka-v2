		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Write an Article :</h4>
						</div>
						<div class="form-body">
							<form action="<?php echo base_url().'index.php/admin/savepost';?>" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control1" name="judul" placeholder="Title" required/>
								</div>
								<div class="form-group">
									<label>Content</label>
									<textarea name="berita" id="ckeditor" cols="10" rows="50" class="form-control1" required/></textarea>
								</div>
								<div class="form-group">
									<label >File input</label>
									<input type="file" name="filefoto" required>
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							</form> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="<?php echo base_url().'assets/admin/ckeditor/ckeditor.js';?>"></script>
		<script type="text/javascript">
		  $(function () {
		    CKEDITOR.replace('ckeditor');
		  });
		</script>