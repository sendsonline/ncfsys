<div class="container-fluid white">
	<div class="row   margin-100">
	<!-- <div class="col-md-1 col-sm-1"></div> -->
		<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10">
			<div class="member-search">
				<div class="row">
				  <div class="col-lg-12">
				    <div class="input-group">
				    <span class="input-group-btn">
				        <button class="btn btn-primary" type="button">Search</button>
				      </span>
				      <input type="text" class="form-control member-searches" placeholder="Search for names...">
						
				    </div><!-- /input-group -->
				    <div class="row">
				    	<div class="col-md-5"></div>
				    	<div class="col-md-7">
				    		<div class="alert alert-success loading-alert" role="alert" align="center">
								<a href="#" class="alert-link">Searching...</a>
							</div>
				    	</div>
				    </div>
				    
				  </div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div>
			</div>
			<div class="col-md-1 col-sm-1"></div>
		</div>
	<div class="col-md-12 col-sm-8 col-xs-4">
		<div class="row marginTop50 ncf-member-body">
		
		<!-- <div class="col-md-1"></div> -->
		<div class="col-md-12">
			<!-- <div class="row members-header text-bold">NCF Members</div> -->
			

			<?php
				$from = 0;
				$to=0;
				if(empty($_POST['from']) && empty($_POST['to'])){
					$from = 0;
					$to = 5;
				}
				else{
					$from = $_POST['from'];
					$to = $_POST['to'];
				}
					$totalMember = DAOFactory::getMembersDAO()->queryAll();
					$total = count($totalMember);

					
			?>
			
			<?php
				
				?>
					<form method="post" action="<?= URL ?>members" id="paging">
						<input type="hidden" name="total_member" value="<?= $total ?>">
						<input type="hidden" name="from" value="<?= $from ?>">
						<input type="hidden" name="to" value="<?= $to ?>">
					</form>
				




			<div class="row marginBottom20 ">
				<div class="col-md-1"></div>
				<div class="col-md-10 col-sm-8 col-xs-12 dropdown-main">
				<div class="row">
				<?php
				$members = DAOFactory::getMembersDAO()->queryAllWithPage($from,20);
				foreach ($members as $user) {
					?>

					<div class="col-md-6">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<img src="<?= URL ?>public/uploads/<?= $user['prof_pic'] ?>" class="member-prof-pic">
							</div>
							<div class="col-md-10">
								<div class="member-name" style="z-index:0">
									<h4 ><a href="<?= URL ?>members/profile?id=<?= $user['id'] ?>"><?= $user['firstname'].' '.$user['middlename'].' '.$user['lastname'] ?></a></h4>
								
								</div>
								<div class="member-verse" style="z-index:0">
									<p>"<?= $user['life_verse'] ?>"</p>
								</div>
							</div>
						</div>
						
						
					</div>
					<?php } ?>
				</div>
				
					

					<!-- <div class="row dropdown-slave" style="display:none">

					<form method="post" action="<?= URL ?>members/deleteProfile" id="deleteForm_<?= $user['id']?>">
						<input type="hidden" name="id" value="<?= $user['id']?>">
					</form>

					<form method="post" action="<?= URL ?>members/updateProfile" id="updateForm_<?= $user['id']?>" enctype="multipart/form-data">
						<div class="row picture" align="center">
							<img src="<?= URL ?>public/uploads/<?= $user['prof_pic'] ?>" class="dropdown-pic ">
							
							<input type="file" name="file" class="imgInput"/>
							<button type="button" class="btn btn-primary btn-xs click-picture" id="" style="display:none">Change profile picture</button>
						</div>
						<div class="row dropdown-name text-center">
							<h4 class="text-bold user-name"><?= $user['firstname'].' '.$user['middlename'].' '.$user['lastname'] ?></h4>
						</div>
						<div class="row edit-name" style="display:none;margin-top: 20px;">
							<div class="col-md-5">
								<label>Lastname</label>
								<input type="text" name="lastname" class="form-control" value="<?= $user['lastname'] ?>">
							</div>
							<div class="col-md-4">
								<label>Firstname</label>
								<input type="text" name="firstname" class="form-control" value="<?= $user['firstname'] ?>">
							</div>
							<div class="col-md-3">
								<label>Middlename</label>
								<input type="text" name="middlename" class="form-control" value="<?= $user['middlename'] ?>">
							</div>
						</div>
					
						<div class="row">
							<label class="text-bold">Address</label>
							<p><input type="text" name="address" class="form-control dropdown-input" value="<?= $user['address'] ?>" required></p>
						</div>
						<div class="row">
							<label class="text-bold">Age</label>
							<p><input type="text" name="age" class="form-control dropdown-input" value="<?= $user['age'] ?>" required></p>
						</div>
						<div class="row">
							<label class="text-bold">Birthday</label>
							<p><input type="text" name="birthday" class="form-control dropdown-input date-type" value="<?= $user['birthday'] ?>" required></p>
						</div>
						<div class="row">
							<label class="text-bold">Gender</label>
							<p><input type="text" name="gender" class="form-control dropdown-input" value="<?= $user['birthday'] ?>" required></p>
						</div>
						<div class="row">
							<label class="text-bold">Water Baptism Date</label>
							<p><input type="text" name="water_bap" class="form-control dropdown-input date-type" value="<?= $user['water_bap'] ?>" required></p>
						</div>
						<div class="row">
							<label class="text-bold">Holy Ghost Baptism Date</label>
							<p><input type="text" name="hg_bap" class="form-control dropdown-input date-type" value="<?= $user['hg_bap'] ?>" required></p>
						</div>
						<div class="row">
							<label class="text-bold">Life Verse</label>
							<p><textarea name="life_verse" class="form-control dropdown-input" value="" required><?= $user['life_verse'] ?></textarea></p>
						</div>
						<div class="row" align="right">
							<input type="hidden" name="user_id" value="<?= $user['id']?>">
							<input type="hidden" name="add_date" value="<?= $user['add_date']?>">
							<button type="button" class="btn btn-sm btn-warning btn-edit">Edit</button>
							<button type="button" class="btn btn-sm btn-danger btn-delete">Delete</button>
							
						</div>
					</form>
					</div> -->
				</div>
				<div class="col-md-1 col-sm-1"></div>
			</div>

			
			

			
			<div class="row member-paging">
				<div class="col-md-11">
					<nav aria-label="...">
					  <ul class="pager">
					    <li class="previous prev-page"><a href="#"><span aria-hidden="true">&larr;</span> Previous</a></li>
					    <li class="next next-page"><a href="#">Next<span aria-hidden="true">&rarr;</span></a></li>
					  </ul>
					</nav>
				</div>
				<div class="col-md-1"></div>
				
				
			</div>

		</div>
		<div class="col-md-1"></div>
			
		</div>

	</div>
	<!-- <div class="col-md-2 col-sm-3">
		<div class="row marginTop50">
			<h3>Recently Added</h3>
		</div>

		<?php 
			$recentAdded = DAOFactory::getMembersDAO()->queryAllRecent();
			foreach ($recentAdded as $name) {
			
			
		?>

		<div class="row marginTop20">
			<div class="col-md-1">
				<div class="row">
					<div><img src="<?= URL ?>public/uploads/<?= $name['prof_pic']?>" class="recentProfile-pic"></div>
				</div>
			</div>
			<div class="col-md-10">
				<div class="recentAdded"><?= $name['firstname'].' '.$name['middlename'].' '.$name['lastname'] ?></div>
				<p class="date-font"><?= $name['add_date'] ?></p>
			</div>
		</div>

		<?php } ?>
		
	</div> -->
	<!-- <div class="col-md-1 col-sm-1"></div> -->
	</div>
