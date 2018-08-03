<div class="container white">
	<div class="row   marginTop100">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="row">
				<?php
					$min = DAOFactory::getMinistriesDAO()->queryAll();
					// print_r($min);
					foreach ($min as $mins) {
						# code...
					
				 ?>
				<div class="ministry-top">
					<h4> <a href="<?= URL ?>ministries/profile?id=<?= $mins->id ?>"> <?= $mins->ministryName ?></a></h4>
				</div>

				<?php } ?>
			</div>
		</div>
		<div class="col-md-2"></div>
		</div>
	