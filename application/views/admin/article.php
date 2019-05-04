		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Article list</h2>
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<table class="table table-hover">
							<thead>
								<tr>
									<th width="5%">#</th>
									<th width="10%">Options</th>
									<th width="15%">Title</th>
									<th width="70%">Content</th>
								</tr>
							</thead>
							<tbody>
								<?php $x=1; foreach ($news as $data){?>
								<tr>
									<th scope="row"><?= $x++; ?></th>
									<td><a href="<?php echo site_url().'layout/read/'.$data['id']; ?>" class="fa fa-edit"></a> or <a href="<?php echo site_url().'layout/read/'.$data['id']; ?>" class="fa fa-trash"></a></td>
									<td><?= $data['title']; ?></td>
									<td><?= word_limiter($data['content'], 7); ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>