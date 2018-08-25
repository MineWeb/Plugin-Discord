<div class="container">
	<div class="row">
		<div class="col-md-12">
			<blockquote>
				<h1 style="font-size:18px;">
					<?= $Lang->get("INDEX_TITRE"); ?>
				</h1>
			</blockquote>
			<?php foreach ($datas as $data): ?>
				<div class="center-block">
					<div class="box">
						<center>
							<br></br>
							<iframe src="<?= $Lang->get("WIDGET_DEBUT"); ?><?= $data['Discord']['api_discord']; ?>" width="100%" height="500" allowtransparency="true" frameborder="0"></iframe>
							<br></br>
						</center>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

