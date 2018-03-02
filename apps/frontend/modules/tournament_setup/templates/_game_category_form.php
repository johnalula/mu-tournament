<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createGameCategoryForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Game Category Information') ?>">
						<?php echo __('Game Category') ?>
					</legend>
					<div class="form-group">
						<label for="firstname" class="col-sm-102 control-label"><?php echo __('Name') ?>:</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="category_name" name="game_category[category_name]" placeholder="<?php echo __('Name') ?>">
						</div>
					</div>
					<div class="form-group" style="border:0px solid #f00;">
						<label for="lastname" class="col-sm-102 control-label"><?php echo __('Alias') ?>:</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="category_alias"	name="game_category[category_alias]"	placeholder="<?php echo __('Alias') ?>">
						</div>
					</div> 
					<div class="form-group">
						<label for="lastname" class="col-sm-102 control-label">Decription</label>
						<div class="col-sm-6">
							<textarea class="form-control" rows=3 id="description" name="game_category[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
						</div>
					</div> 
				</fieldset> 
			</div> 
			<div class="ui-clear-fix"></div>
		</div> 
	</form>
</div> 

<script> 
	 
	$('#category_name').keyup(function(e) {
		$("#createGameCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelGameCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createGameCategoryFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelGameCategoryFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#category_alias').keyup(function(e) {
		$("#createGameCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelGameCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createGameCategoryFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelGameCategoryFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#description').keyup(function(e) {
		$("#createGameCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelGameCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createGameCategoryFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelGameCategoryFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$( "#start_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	$( "#end_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
</script>
