<div class="container-fluid" style="min-height: 700px">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="marginTop100"></div>
			<div class="count-wrapper">
                <div class="count-header"></div>
                <div class="undo-count" align="right">
                    <button class="btn btn-sm btn-success undo-one-count">Undo 1 Count</button>
                </div>
				<div class="count-body">
					<input type="hidden" class="pageId" value="<?= $_GET['id'] ?>">
					<div id="jesusAccepted"class="count-number">
						<?php
							$x = $this->counts;
							echo $x->missionNum;
						?>
					</div>
				</div>
				<div class="count-footer">Souls Accepted Jesus</div>

			</div>

		</div>
		<div class="col-md-2"></div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$("#outer-wrapper").not(".undo-one-count").mousedown(function(){
			var num = $('.pageId').val();
			$.post( 'addCount', {'pageId' : num })
		      .done(function(returnData){
		        $('#jesusAccepted').text(returnData);
		    });
		});

		$('.undo-one-count').click(function () {
            var num = $('.pageId').val();
            $.post( 'minusCount', {'pageId' : num })
                .done(function(returnData){
                    $('#jesusAccepted').text(returnData);

                });
        });
	});
</script>