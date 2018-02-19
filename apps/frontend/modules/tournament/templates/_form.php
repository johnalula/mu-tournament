<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createCategoryForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Tournament Information') ?>">
						<?php echo __('Tournament') ?>
					</legend>
					<div class="form-group">
						<label for="firstname" class="col-sm-102 control-label"><?php echo __('Name') ?>:</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="tournament_name" name="tournament[tournament_name]" placeholder="<?php echo __('Name') ?>">
						</div>
					</div>
					<div class="form-group" style="border:0px solid #f00;">
						<label for="lastname" class="col-sm-102 control-label"><?php echo __('Alias') ?>:</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="tournament_alias"	name="tournament[tournament_alias]"	placeholder="<?php echo __('Alias') ?>">
						</div>
					</div>
					<div class="form-group" style="border:0px solid #f00;">
						<label for="season" class="col-sm-102 control-label"><?php echo __('Season') ?>:</label>
						<div class="col-sm-201">
							 <select id="season" name="tournament[season]" class="form-control" title="<?php echo __('Tournament Season') ?>">
								<?php foreach(TournamentCore::processTournamentStatuses() as $_key => $_type): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultTournamentStatus () ? 'selected':'' ?> >
										<?php echo $_type ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label for="lastname" class="col-sm-101 control-label"><?php echo __('Status') ?>:</label>
						<div class="col-sm-201">
							 <select id="status" name="tournament[status]" class="form-control" title="<?php echo __('Tournament Status') ?>">
								<?php foreach(TournamentCore::processTournamentStatuses() as $_key => $_type): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultTournamentStatus () ? 'selected':'' ?> >
										<?php echo $_type ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-group" style="border:0px solid #f00;">
						<label for="lastname" class="col-sm-102 control-label"><?php echo __('End Date') ?>:</label>
						<div class="col-sm-201">
							 <div class="input-group"> 
								<input class="form-control" id="start_date" name="tournament[start_date]" type="text" placeholder="<?php echo __('Date') ?>" value="<?php echo date('m/d/Y', time()) ?>" title="<?php echo __('Tournament Start Date') ?>" readonly>
								<span class="input-group-btn">
									<button class="btn btn-default ui-button-img" type="button">
										<img class="ui-addon-img" src="<?php echo image_path('icons/calendar_small') ?>" >
									</button>
								</span> 
							</div>
						</div>
						<label for="lastname" class="col-sm-101 control-label"><?php echo __('End Date') ?>:</label>
						<div class="col-sm-201">
							  <div class="input-group"> 
								<input class="form-control" id="end_date" name="tournament[end_date]" type="text" placeholder="<?php echo __('Date') ?>" value="<?php echo date('m/d/Y', time()) ?>" title="<?php echo __('Tournament End Date') ?>" readonly>
								<span class="input-group-btn">
									<button class="btn btn-default ui-button-img" type="button">
										<img class="ui-addon-img" src="<?php echo image_path('icons/calendar_small') ?>" >
									</button>
								</span> 
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="lastname" class="col-sm-102 control-label">Decription</label>
						<div class="col-sm-6">
							<textarea class="form-control" rows=3 id="description" name="tournament[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
						</div>
					</div> 
				</fieldset> 
			</div> 
			<div class="ui-clear-fix"></div>
		</div> 
	</form>
</div> 

<script>
	$('#status').change(function(e) {
		$("#createTournament").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournament").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTournamentFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	 
	$('#tournament_name').keyup(function(e) {
		$("#createTournament").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournament").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTournamentFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#tournament_alias').keyup(function(e) {
		$("#createTournament").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournament").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTournamentFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#description').keyup(function(e) {
		$("#createTournament").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournament").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTournamentFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTournamentFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
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
