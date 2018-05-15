<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TEAM_GROUP)):
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('view', array( '_tournamentTeamGroup' => $_tournamentTeamGroup, '_candidateParticipantMembers' => $_candidateParticipantMembers )) ?>
			</div><!-- end of ui-tab-three-->
		</div> <!-- end of ui-detail-tab-list -->
		<div class="ui-clear-fix"></div>
	</div> <!-- end of ui-main-list-default -->
</div>		  
<?php else: ?> 
	<div class="ui-error-container" id="ui-error-box" >
		<?php echo include_partial('global/credential_denied', array()) ?>
	</div>  
<?php endif; ?>

<?php else: ?>

	<div class="ui-success-container" id="ui-success-box" >
		<?php echo include_partial('global/authorization_denied', array()) ?>
	</div>
<?php endif; ?>         

<!--- ************************  -->


<!-- Modal -->
<div class="modal fade" id="candidateGroupMemberTeamModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog">
		<div class="modal-content"> 
			 <div class="ui-modal-panel-container1" id=""> 
				<div class="ui-panel-grid-box" id=""> 
					<!-- First panel -->  
						<div class="ui-panel-grid">
							<div class="ui-panel-header-default">
								<h2 class="ui-theme-panel-header">
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group management') ?>">
									<span class="ui-header-status-icon">
										<img title="<?php echo $_sportGameTeamGroup->sportGameGroupName ?>" src="<?php echo image_path($_sportGameTeamGroup->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
										<img title="<?php echo $_sportGameTeamGroup->sportGameGroupName ?>" src="<?php echo image_path($_sportGameTeamGroup->activeFlag ? 'status/active':'status/other')  ?>"> 
									</span>
									<?php echo __('Candidate Teams').' ( Sport Game: '.$_sportGameTeamGroup->sportGameName.' - Group: '.$_sportGameTeamGroup->sportGameGroupName.' - Code #:'.$_sportGameTeamGroup->sportGameGroupCode.' )'  ?>
								</h2>
								<div class="ui-panel-content-minimize opened" id="ui-list-collaps-panel-one" style="">	
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								</div>
							</div><!-- ui-panel-header-default -->
							<div class="" id="ui-list-collapsible-panel-one">
								<div class="ui-panel-content-separater"></div><!-- end of ui-panel-filter-box -->
							<!-- Begining of toolbar -->
								<div class="ui-toolbar-menu-box ui-panel-content-border">
									<div class="ui-toolbar-menu">
										<?php include_partial('partials/modal_action_toolbar', array('_object' => $_task)) ?> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('candidate_group_member_team', array('_candidateMemberTeams' => $_candidateMemberTeams)) ?> 
										</div>
									</div> 
									
									<div class="ui-panel-footer-default-box">
										&nbsp;
									</div><!-- ui-panel-footer-default -->			
								</div> 			
							</div><!-- ui-panel-content-box --> 
						</div><!-- end of ui-panel-grid --> 
					<!-- First panel --> 
					<div class="clearFix"></div>		
				</div><!-- end of ui-panel-grid-box --> 
			</div><!-- /.modal-content -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</form>
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="candidateGroupMemberTeamParticipantModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog">
		<div class="modal-content"> 
			 <div class="ui-modal-panel-container1" id=""> 
				<div class="ui-panel-grid-box" id=""> 
					<!-- First panel -->  
						<div class="ui-panel-grid">
							<div class="ui-panel-header-default">
								<h2 class="ui-theme-panel-header">
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group management') ?>">
									<span class="ui-header-status-icon">
										<img title="<?php echo $_sportGameTeamGroup->sportGameGroupName ?>" src="<?php echo image_path($_sportGameTeamGroup->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
										<img title="<?php echo $_sportGameTeamGroup->sportGameGroupName ?>" src="<?php echo image_path($_sportGameTeamGroup->activeFlag ? 'status/active':'status/other')  ?>"> 
									</span>
									<?php echo __('Candidate Partiicipants').' ( Sport Game: '.$_sportGameTeamGroup->sportGameName.' - Group: '.$_sportGameTeamGroup->sportGameGroupName.' - Code #:'.$_sportGameTeamGroup->sportGameGroupCode.' )'  ?>
								</h2>
								<div class="ui-panel-content-minimize opened" id="ui-list-collaps-panel-one" style="">	
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								</div>
							</div><!-- ui-panel-header-default -->
							<div class="" id="ui-list-collapsible-panel-one">
								<div class="ui-panel-content-separater"></div><!-- end of ui-panel-filter-box -->
							<!-- Begining of toolbar -->
								<div class="ui-toolbar-menu-box ui-panel-content-border">
									<div class="ui-toolbar-menu">
										<?php include_partial('partials/modal_action_toolbar', array('_object' => $_task)) ?> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('party/candidate_game_participant', array('_candidateParticipants' => $_candidateParticipants)) ?> 
										</div>
									</div> 
									
									<div class="ui-panel-footer-default-box">
										&nbsp;
									</div><!-- ui-panel-footer-default -->			
								</div> 			
							</div><!-- ui-panel-content-box --> 
						</div><!-- end of ui-panel-grid --> 
					<!-- First panel --> 
					<div class="clearFix"></div>		
				</div><!-- end of ui-panel-grid-box --> 
			</div><!-- /.modal-content -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</form>
</div><!-- /.modal -->

<!--- ************************  -->

<div class="modal fade" id="processAjaxLoadergModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
	<div class="modal-dialog-xxsm">
		<div class="modal-contents ui-ajax-loader-text" style="text-align:center!important;padding:5px!important;">
			<div class="ui-ajax-loader-content">
				<img src="/images/icons/ajax-loader.png"><br>
				<?php echo __('Loading . . .') ?>
			</div>	<!-- /.modal-content -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog --> 
</div><!-- /.modal -->

 

<script>
	
	$('#footerApproveTeamGrouping').click(function(){
		var url = '<?php echo url_for('team_group/approveTeamGrouping')?>'; 
		var data = 'team_group_id='+document.getElementById('team_group_id').value+'&team_group_token_id='+document.getElementById('team_group_token_id').value;
		processEntry(data, url )
		//alert(data);
		return false; 
	});  
	$('#footerCompleteTeamGrouping').click(function(){
		var url = '<?php echo url_for('team_group/completeTeamGrouping')?>'; 
		var data = 'team_group_id='+document.getElementById('team_group_id').value+'&team_group_token_id='+document.getElementById('team_group_token_id').value;
		processEntry(data, url )
		//alert(data);
		return false; 
	});  
	
	$('.selectCandidateGroupMemberTeam').click(function() {   
		var url = '<?php echo url_for('team_group/candidateGroupMemberTeam')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-sport-game-participation';   
		//var data = 'tam_group_id='+document.getElementById('gender_category_id').value;
		var data = 'team_group_id='+document.getElementById('team_group_id').value+'&team_group_token_id='+document.getElementById('team_group_token_id').value+'&sport_game_id='+document.getElementById('sport_game_id').value+'&sport_game_token_id='+document.getElementById('sport_game_token_id').value+'&gender_category_id='+document.getElementById('gender_category_id').value;
		//alert(data);
		processDataSelection(data, idName, url );	
		return true;	 
	}); 
	$('.selectCandidateGroupMemberTeamParticipant').click(function() {   
		var url = '<?php echo url_for('team_group/candidateGroupMemberTeamParticipant')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-team-member-participant';   
		//var data = 'tam_group_id='+document.getElementById('gender_category_id').value;
		var data = 'member_team_id='+document.getElementById('member_team_id').value+'&member_team_token_id='+document.getElementById('member_team_token_id').value+'&sport_game_id='+document.getElementById('sport_game_id').value+'&sport_game_token_id='+document.getElementById('sport_game_token_id').value+'&team_group_id='+document.getElementById('team_group_id').value+'&team_group_token_id='+document.getElementById('team_group_token_id').value+'&gender_category_id='+parseInt(document.getElementById('gender_category_id').value);
		//alert(data);
		processDataSelection(data, idName, url );	
		return true;	 
	}); 
	
	
	//*********************************/
	
	$("#candidateGroupMemberTeamModal").submit(function(e) { 
		if($("input[name=selectSportGameModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("group_member_team_id").value = listArr[0];
			document.getElementById("group_member_team_token_id").value = listArr[1];  
			document.getElementById("member_team_id").value = listArr[2];
			document.getElementById("member_team_token_id").value = listArr[3];  
			document.getElementById("member_team_name").value = listArr[4]+' ('+listArr[5]+')';    
			$("#createTeamGroupMemberParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTeamGroupMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$(".selectCandidateGroupMemberTeamParticipant").removeAttr("disabled") ;
			$('#candidateGroupMemberTeamModal').modal('hide');
		return e.preventDefault();
	});
	$("#candidateGroupMemberTeamParticipantModal").submit(function(e) { 
		if($("input[name=selectSportGameModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("member_participant_id").value = listArr[0];
			document.getElementById("member_participant_token_id").value = listArr[1];  
			document.getElementById("member_participant_name").value = listArr[2];    
			document.getElementById("member_participant_role_id").value = listArr[3];    
			$("#createTeamGroupMemberParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTeamGroupMemberParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateGroupMemberTeamParticipantModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
 
</script>

