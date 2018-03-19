<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createGameRoundTypeForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Sport Game Round Information') ?>">
						<?php echo __('Game Rounds') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Round Type') ?>:<span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<select id="round_type" name="game_round[round_type]" class="form-control" title="<?php echo __('Round') ?>">
								<option value="100" selected  > <?php echo 'Select Round ...' ?> </option>
								<?php foreach(TournamentCore::processRounds() as $_key => $_round): ?>								 
									<option value="<?php echo $_key ?>" rel="<?php echo $_round ?>"  >
										<?php echo $_round ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Round') ?> #: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-40"> 
							 <select id="round_number" name="game_round[round_number]" class="form-control" title="<?php echo __('Round Number') ?>">
								<option value="100" selected  > <?php echo 'Select Round ...' ?> </option>
								<?php foreach(TournamentCore::processRoundNumbers() as $_key => $_roundNumber): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_roundNumber ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Name') ?>:<span class="ui-red-text">*</span></label>
						<div class="col-sm-40">
							<input type="text" class="form-control" id="round_name"	name="game_round[round_name]"	placeholder="<?php echo __('Round Name') ?>">
						</div>
					</div>   
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:&nbsp;</label>
						<div class="col-sm-40"> 
							<textarea class="form-control form-control-md" rows=3 id="description" name="game_round[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
						</div>
					</div>
				</fieldset> 
			</div> 
			<div class="ui-clear-fix"></div>
		</div> 
	</form>
</div> 

<script>
	$('#round_name').keyup(function(e) {
		$("#createGameRoundType").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelGameRoundType").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#round_type').change(function() {
		$("#createGameRoundType").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelGameRoundType").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		//document.getElementById("round_name").value = $(this).val()';
		return false;
		
	});
	$('#round_number').change(function() {
		$("#createGameRoundType").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelGameRoundType").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#round_alias').keyup(function(e) {
		$("#createGameRoundType").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelGameRoundType").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#description').keyup(function(e) {
		$("#createGameRoundType").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelGameRoundType").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
</script>

