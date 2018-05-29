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
						<label class="col-sm-21 control-label"><?php echo __('Contestant Name') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-40"> 
							<select id="contestant_name" name="game_category[contestant_name]" class="form-control" title="<?php echo __('Team Mode') ?>">
								<option value="" selected  ><?php echo 'Select Mode ...' ?></option>
								<?php foreach(TournamentCore::processContestantTeamModes() as $_key => $_mode): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::$_PAIR_TEAM ? 'selected':'' ?> >
										<?php echo $_mode ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
					</div>  
					<div class="form-group">
						<label class="col-sm-21 control-label"><?php echo __('Team Mode') ?>: <span class="ui-red-text">&nbsp;</span></label>
						<div class="col-sm-212">
							<select id="participant_team_mode" name="game_category[participant_team_mode]" class="form-control" title="<?php echo __('Team Mode') ?>">
								<option value="" selected  ><?php echo 'Select Mode ...' ?></option>
								<?php foreach(TournamentCore::processContestantTeamModes() as $_key => $_mode): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == TournamentCore::$_PAIR_TEAM ? 'selected':'' ?> >
										<?php echo $_mode ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label class="col-sm-122 control-label" title="<?php echo __('Category Status') ?>"><?php echo __('Status') ?>:</label>
						<div class="col-sm-212">
							<select id="category_status" name="game_category[category_status]" class="form-control" title="<?php echo __('Category Status') ?>">
								<option value="" selected  ><?php echo 'Select Status ...' ?></option>
								<?php foreach(SystemCore::ProcessBatchActionTypes() as $_key => $_status): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == SystemCore::$_ACTIVATE ? 'selected':'' ?> >
										<?php echo $_status ?>
									</option>								 
								<?php endforeach; ?>
							</select>
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
	$('#category_name').keyup(function(e) {
		$("#createGameCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelGameCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	 
	 
</script>
