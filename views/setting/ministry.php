<div class="container marginTop100">
	<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
	<div class="add-member-form">
			<div class="panel-prime marginBottom20">
				
			</div>

		<form method="post" action="<?= URL ?>setting/addMinistry" enctype="multipart/form-data">
			
			<div class="row panel-prime-body">
					<label>Ministry Name:</label>
						<input type="text" name="min_name" class="form-control" placeholder="Lastname..." required>
					<label>Ministry Description:</label>
						<input type="text" name="min_desc" class="form-control" placeholder="Lastname..." required>
					<label>Ministry Address:</label>
						<input type="text" name="min_add" class="form-control" placeholder="Lastname..." required>
					
					<p align="right"><input type="submit" class="btn btn-sm btn-success" value="Save Information"></p>
				
				</div>
			</form>
		</div>
	</div>
</div>
</div>
	<div class="col-md-3"></div>

