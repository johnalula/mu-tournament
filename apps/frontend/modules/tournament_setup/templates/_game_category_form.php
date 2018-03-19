<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createGameCategoryForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Match Participant Team Information') ?>">
						<?php echo __('Game Category') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Name') ?>: <span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<input type="text" class="form-control" id="category_name" name="game_category[category_name]" placeholder="<?php echo __('Name') ?>">	 
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Alias') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-40"> 
							 <input type="text" class="form-control" id="category_alias"	name="game_category[category_alias]"	placeholder="<?php echo __('Alias') ?>">
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:&nbsp;</label>
						<div class="col-sm-40"> 
							<textarea class="form-control form-control-md" rows=3 id="description" name="match_fixture[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
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
