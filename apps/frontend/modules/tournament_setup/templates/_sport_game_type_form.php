<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createSportGameForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Sport Game Type Information') ?>">
						<?php echo __('Sport Game Types') ?>
					</legend>
					<div class="form-group">
						<label for="firstname" class="col-sm-102 control-label"><?php echo __('Category') ?>:</label>
						<div class="col-sm-6">
							 <select id="sport_game_category" name="sport_game_type[sport_game_category]" class="form-control" title="<?php echo __('Sport Game Category') ?>">
								<option value="100" selected  >
										<?php echo 'Select Game Category ...' ?>
									</option>
								<?php foreach($_countGameCategorys as $_key => $_countGameCategory): ?>								 
									<option value="<?php echo $_countGameCategory->id ?>"  >
										<?php echo $_countGameCategory->categoryName ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="firstname" class="col-sm-102 control-label"><?php echo __('Game Type') ?>:</label>
						<div class="col-sm-6">
							  <select id="sprt_game_type" name="sport_game_type[sprt_game_type]" class="form-control" title="<?php echo __('Game Type') ?>">
								<option value="100" selected  ><?php echo 'Select Distance ...' ?></option>
								<?php foreach(TournamentCore::processDistanceTypes() as $_key => $_roundNumber): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_roundNumber ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-group" style="border:0px solid #f00;">
						<label for="season" class="col-sm-102 control-label"><?php echo __('Game Distance') ?>:</label>
						<div class="col-sm-201">
							<input type="text" class="form-control" id="sport_game_distance"	name="sport_game_type[sport_game_distance]"	placeholder="<?php echo __('Distance') ?>">
						</div>
						<label for="lastname" class="col-sm-101 control-label"><?php echo __('Measurement') ?>:</label>
						<div class="col-sm-201">
							<select id="sport_game_measurement" name="sport_game_type[sport_game_measurement]" class="form-control" title="<?php echo __('Measurement') ?>">
								<option value="100" selected  ><?php echo 'Select Event ...' ?></option>
								<?php foreach(TournamentCore::processDistanceMeasurements() as $_key => $_event): ?>								 
									<option value="<?php echo $_key ?>"  >
										<?php echo $_event ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div>  
					<div class="form-group" style="border:0px solid #f00;">
						<label for="lastname" class="col-sm-102 control-label"><?php echo __('Name') ?>:</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="sport_game_type_name"	name="sport_game_type[sport_game_type_name]"	placeholder="<?php echo __('Game Name') ?>">
						</div>
					</div> 
					<div class="form-group" style="border:0px solid #f00;">
						<label for="lastname" class="col-sm-102 control-label"><?php echo __('Alias') ?>:</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="sport_game_type_alias"	name="sport_game_type[sport_game_type_alias]"	placeholder="<?php echo __('Game Alias') ?>">
						</div>
					</div>  
					<div class="form-group">
						<label for="lastname" class="col-sm-102 control-label">Decription</label>
						<div class="col-sm-6">
							<textarea class="form-control" rows=3 id="description" name="sport_game_type[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
						</div>
					</div> 
				</fieldset> 
			</div> 
			<div class="ui-clear-fix"></div>
		</div> 
	</form>
</div> 

<script> 
	 
	$('#sport_game_type_name').keyup(function(e) {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_category').change(function() {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		//document.getElementById("round_name").value = $(this).val()';
		return false;
		
	});
	$('#sport_game_type').change(function() {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_measurement').change(function() {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_distance').keyup(function(e) {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#sport_game_type_alias').keyup(function(e) {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#description').keyup(function(e) {
		$("#createSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
</script>
