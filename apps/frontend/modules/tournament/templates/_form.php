<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTournamentForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Tournament Information') ?>">
						<?php echo __('Tournament') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Tournament Name') ?>"><?php echo __('Name') ?>:</label>
						<div class="col-sm-40"> 
							<input type="text" class="form-control" id="tournament_name" name="tournament[tournament_name]" placeholder="<?php echo __('Name') ?>" title="<?php echo __('Tournament Name') ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Tournament Alias') ?>"><?php echo __('Alias') ?>:</label>
						<div class="col-sm-40"> 
							<input type="text" class="form-control" id="tournament_name" name="tournament[tournament_name]" placeholder="<?php echo __('Alias') ?>" title="<?php echo __('Tournament Alias') ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Tournament Season') ?>"><?php echo __('Season') ?>:</label>
						<div class="col-sm-23">
							<select id="season" name="tournament[season]" class="form-control" title="<?php echo __('Tournament Season') ?>">
								<?php foreach(TournamentCore::processTournamentStatuses() as $_key => $_type): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultTournamentStatus () ? 'selected':'' ?> >
										<?php echo $_type ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-01 control-label" title="<?php echo __('Touirnament Status') ?>"><?php echo __('Status') ?>:</label>
						<div class="col-sm-23">
							<select id="status" name="tournament[status]" class="form-control" title="<?php echo __('Tournament Status') ?>">
								<?php foreach(TournamentCore::processTournamentStatuses() as $_key => $_status): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::processDefaultTournamentStatus () ? 'selected':'' ?> >
										<?php echo $_status ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Tournament Starting Date') ?>"><?php echo __('Start Date') ?>:</label>
						<div class="col-sm-23">
							<div class="input-group"> 
								<input class="form-control" id="start_date" name="tournament[start_date]" type="text" placeholder="<?php echo __('Start Date') ?>" value="" title="<?php echo __('Tournament Start Date') ?>" readonly>
								<span class="input-group-btn">
									<button class="btn btn-default ui-button-img" type="button">
										<img class="ui-addon-img" src="<?php echo image_path('icons/calendar_small') ?>" >
									</button>
								</span> 
							</div>
						</div>
						<label class="col-sm-01 control-label" title="<?php echo __('Touirnament End Date') ?>"><?php echo __('Date') ?>:</label>
						<div class="col-sm-23">
							<div class="input-group"> 
								<input class="form-control" id="end_date" name="tournament[end_date]" type="text" placeholder="<?php echo __('End Date') ?>" value="" title="<?php echo __('Tournament End Date') ?>" readonly>
								<span class="input-group-btn">
									<button class="btn btn-default ui-button-img" type="button">
										<img class="ui-addon-img" src="<?php echo image_path('icons/calendar_small') ?>" >
									</button>
								</span> 
							</div>
						</div>
					</div> 
					<div class="form-group">
						<label class="col-sm-21 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:</label>
						<div class="col-sm-40"> 
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
