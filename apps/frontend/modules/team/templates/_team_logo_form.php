<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTeamGroupMemberParticipantForm" role="form" action="<?php echo url_for('team/createTeamLogo') ?>" enctype="multipart/form-data" method="POST">
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Group Member Team Participant Information') ?>">
						<?php echo __('Team Logo') ?>
					</legend>
					<div class="form-group">
						<label class="col-sm-20 control-label" title="<?php echo __('Team Logo File') ?>"><?php echo __('Logo File') ?>:<span class="ui-red-text">*</span></label>
						<div class="col-sm-40"> 
							<input type="file" class="form-control form-control-file"  style="width:100%;" id="file_name" name="file_name" >	
							<input type="text" class="form-control" id="team_group_id" name="team_group_member_participant[team_group_id]" value="<?php echo $_team->id ?>"> 
							<input type="text" class="form-control" id="team_group_token_id" name="team_group_member_participant[team_group_token_id]" value="<?php echo $_team->token_id ?>">
						</div>
					</div>
				</fieldset> 
			</div> 
			<div class="ui-clear-fix"></div>
		</div> 
	</form>
</div> 

<script>
	$('#member_participant_status').change(function(e) {
		$("#createTeamGroupMemberParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamGroupMemberParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		//alert('asdfa');
		return false;
	});  
	 
	$('#matchteam_status').change(function(e) {
		$("#createTeamGroupMemberParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamGroupMemberParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	   
	$( "#start_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	 
</script>
