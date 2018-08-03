

<div class="container-fluid white marginTop70">
	<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10 ">
		<div class="row">
			<?php
		$id = $_GET['id'];
			$members = DAOFactory::getMembersDAO()->load($id);
			// print_r($members);

		?>
		<div class="cover-photo">
			<div class="black3">
				<div class="">
					<img src="<?= URL ?>public/uploads/<?= $members->profPic ?>" class="prof-pics">
				</div>
				<div class="profile-names">
					<h3><?= $members->firstname .' '.$members->middlename ." ". $members->lastname .'' ?></h3>
				</div>
				<div class="profile-quote">
					<h5><?= $members->lifeVerse ?></h5>
				</div>
			</div>
		</div>
		<div class="new-birth">
				<div class="col-md-4 birth-wrap"><?= $members->birthday ?></div>
				<div class="col-md-4 birth-wrap"><?= $members->waterBap ?></div>
				<div class="col-md-4 birth-wrap"><?= $members->hgBap ?></div>
			
		</div>
		<div class="ministry-wrapper">
			<div class="ministry-header">
				<p>Ministry(s):</p>
			</div>
			<div class="ministry-content">
				<p><b>Directress</b> from <b>Programming and Multimedia Ministry</b> in Jaro, Leyte</p>
				<p><b>Guitarist</b> from <b>Music Ministry</b> in Jaro, Leyte</p>
				<p></p>
			</div>
		</div>
		<div class="info-wrapper">
			<div class="info-header"><a href="">Basic Information:</a></div>
			<div class="info-content">
				<h5><b>Age is </b><?= $members->age  ?>.</h5>
				<h5><b>Gender is </b><?= $members->gender  ?>.</h5>
				<h5><b>From </b><?= $members->address  ?>.</h5>
				<h5>Invited by <b> Christine Joy Mondal</b></h5>
			</div>
		</div>
		</div>
	</div>
	<div class="col-md-1"></div>
	
	</div>
</div>

