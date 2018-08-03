

<div class="container white marginTop70">
	<div class="row">
	<!-- <div class="col-md-1"></div> -->
	<div class="col-md-12">
		<div class="row">
			<?php
		$id = $_GET['id'];
			$min = DAOFactory::getMinistriesDAO()->load($id);
			// print_r($members);

		?>
		<div class="cover-photo">
			<div class="black3">
				<div class="">
					<img src="<?= URL ?>public/uploads/<?= $members->profPic ?>" class="prof-pics">
				</div>
				<div class="profile-names">
					<h3><?= $min->ministryName ?></h3>
				</div>
			</div>
		</div>
		<div class="add-panel">
				<div class="col-md-4"></div>
				<div class="col-md-4 add-wrap" id="add-members"> <a> Add Member</a></div>
				<div class="col-md-4"></div>
			
		</div>
		<div class="members-wrapper">
					<div class="members-header">
							Ministry Members
					</div>
					<div class="members-content">
						<?php
							$memb = DAOFactory::getMinistryMembersDAO()->loadMembers($_GET['id']);
							// print_r($memb);
							if(!empty($memb)){
							foreach ($memb as $m) {
						?>
							<div class="row">
								<div class="col-md-8 col-sm-8 member-name" style="z-index:0">
									<h4 ><img src="<?= URL ?>public/uploads/<?= $m['prof_pic'] ?>" class="member-prof-pic">&nbsp&nbsp<a href="<?= URL ?>members/profile?id=<?= $m['member_id'] ?>"><?= $m['firstname'].' '.$m['middlename'].' '.$m['lastname'] ?></a></h4>
								</div>
								<div class=" col-md-4 col-sm-4">
									<p class="text-center" style="margin-top: 25px; font-style: italic"><?= $m['position'] ?></p>
								</div>
								<div class="">
									
								</div>
							</div>

						<?php
							}}
						?>
					</div>
				</div>
		
		</div>
	</div>
	<!-- <div class="col-md-1"></div> -->
	
	</div>
</div>


<div id="add-member-modal" class="modal fade" role="dialog">
  <div class="modal-dialog" id="create-company-modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" id="create-company-modal-content">
      <div class="modal-header" id="create-company-modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Add Member</h4>

      </div>
      <div class="modal-body">
        <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">Search</span>
		  <input type="text" class="form-control" placeholder="Member.." aria-describedby="basic-addon1">
		</div>
		<br>
		<div class=" modal-scroAction">
		<table class="table table-bordered table-hover">
			<tr>
				<th>Name</th>
				<th>Action</th>
			</tr>
			<?php
				$members = DAOFactory::getMembersDAO()->queryAll();
				// print_r($members);
				if(!empty($members)){
				foreach ($members as $user) {
					?>
			<tr>
				<td><?= $user->lastname .", ".$user->firstname." ".$user->middlename ?></td>
				<td><a class="btn btn-success btn-xs">Add as member</a></td>
			</tr>
			<?php }} ?>
		</table>
		
				
		</div>

	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss = "modal">Cancel</button>
      </div>
    </div>


  </div>
</div>
<div id="welcome-loading" style="display:none">
  <img src="<?= URL ?>public/images/loading-welcome.gif" alt="">
</div>

<script type="text/javascript" src="<?= URL ?>views/fs/js/company.js"></script>
