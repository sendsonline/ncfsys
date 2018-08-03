<div class="container marginTop100">
	<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6 ">
	<div class="add-member-form">
			<div class="panel-prime marginBottom20">
				
			</div>

		<form method="post" action="<?= URL ?>members/addMember" enctype="multipart/form-data">
			<div class="row prof-pic">
				<div class="profPicBlack">
					<img src="<?= URL ?>public/uploads/img.png" class="profile-pic click-pic">
					<img src="<?= URL ?>public/images/edit-icon.png" class="edit-pic-icon click-pic">
						<input type="hidden" name = "user_id" value="<?= $user_info->id ?>"  visbility="hidden" class = "uploadPicture">
						<input type="file" name="file" id="imgInp"/>

				</div>
			</div>
			<div class="row panel-prime-body">
					<label>Lastname</label>
						<input type="text" name="lastname" class="form-control" placeholder="Lastname..." required>
					<label>Firstname</label>
						<input type="text" name="firstname" class="form-control" placeholder="Firstname..." required>
					<label>Middlename</label>
						<input type="text" name="middlename" class="form-control" placeholder="Firstname..." required>
					<label>Age</label>
						<input type="text" name="age" class="form-control" placeholder="Age..." required>
					<label>Gender</label>
						<input type="text" name="gender" class="form-control" placeholder="Gender..." required>
					<label>Birthday</label>
						<input type="date" name="birthday" class="form-control" placeholder="Birthday..." required>
					<label>Address</label>
						<input type="text" name="address" class="form-control" placeholder="Address..." required>
					<label>Water Baptized Date</label>
						<input type="text" name="water_bap" class="form-control" placeholder="Water Baptism Date..." required>
					<label>Holy Ghost Baptism Date</label>
						<input type="text" name="hg_bap" class="form-control" placeholder="Holy Ghost Baptism Date..." required>
					<label>Life Quote</label>
						<textarea name = "life_verse" class="form-control" placeholder='"My Life Verse..."'></textarea>
						<br>
					<p align="right"><button class="btn btn-sm btn-success">Save Information</button></p>
				
				</div>
			</form>
		</div>
	</div>
</div>
</div>
	<div class="col-md-3"></div>

