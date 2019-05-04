		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Comments list</h2>
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<table class="table table-hover">
							<thead>
								<tr>
									<th width="5%">#</th>
									<th width="10%">Options</th>
									<th width="85%">comment</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$x=1;
									foreach ($news as $data){?>
								<tr>
									<th scope="row"><?= $x++; ?></th>
									<td>###</td>
									
									<td><?= word_limiter($data['content'], 15); ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>