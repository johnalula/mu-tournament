<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TEAM_GROUP)):
	
	//sport_game_group_name=Group One - 5000M (Men) - Running&sport_game_group_id=5&sport_game_group_token_id=5e754ee527395f5b407c18ba125a1fb53f836acd&tournament_id=1&tournament_team_group_id=1&tournament_team_group_token_id=8bed6e61e3c51bf310b141ade06f985b1b97aaf1&sport_game_id=5&sport_game_token_id=a5b16fbdda8b5c083be1d62b23ce2380ffcf6213&gender_category_id=1&participant_team_name=Mekelle University (MU-ET) - ETHIOPIA&participant_team_id=4&participant_team_token_id=6e60f180ecab6683ae00640e0d847c1607cb050d&team_status=1&start_date=04/28/2018&description=dfsfgsdfgsdfg
	
	//$_flag =  SportGameGroupParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, 1, 5, '5e754ee527395f5b407c18ba125a1fb53f836acd', 4, '6e60f180ecab6683ae00640e0d847c1607cb050d', 'Mekelle University (MU-ET) - ETHIOPIA', 'Group One - 5000M (Men) - Running', '04/26/2018', 2, 'asdfas dfasdf', SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );  
	
	//$_flag =  SportGameTeamGroupTable::processNew ( $_orgID, $_orgTokenID, 4, '6e60f180ecab6683ae00640e0d847c1607cb050d', 1, 'b7d28c838020d0307bcb521542e95f464cbe17c5', 'Mekelle University (MU-ET)', '04/26/2018', 1, 'sdfgsdfgsdf sdfgsdfg', SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );  
	
	//$_flag =  SportGameTeamGroupTable::processNew ( $_orgID, $_orgTokenID, $_memberTeamID, $_memberTeamTokenID, $_teamGroupID, $_teamGroupTokenID, $_memberTeamName, $_entryDate, $_teamStatus, $_description, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );  
	
	//$_teamGroup =  GroupTypeTable::makeObject ( $_orgID, 1);
	//echo count($_candidateParticipantTeams).' = '; 
	//echo sha1(md5('3829e68f447d9c6e723f820a44421f7e90674acf'));
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('member', array( '_tournamentTeamGroup' => $_tournamentTeamGroup, '_groupParticipantTeams' => $_groupParticipantTeams, '_candidateGroups' => $_candidateGroups, '_candidateGameCategorys' => $_candidateGameCategorys )) ?> 
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
<div class="modal fade" id="candidateTournamentSportGameGroupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
									<img title="<?php echo $_tournamentTeamGroup->gameCategoryName ?>" src="<?php echo image_path($_tournamentTeamGroup->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
										<img title="<?php echo $_tournamentTeamGroup->gameCategoryName ?>" src="<?php echo image_path($_tournamentTeamGroup->activeFlag ? 'status/active':'status/other')  ?>"> 
									</span>
									<?php echo __('Candidate Tournament Groups').' ( Type: '.$_tournamentTeamGroup->gameCategoryName.' -  Code #: '.$_tournamentTeamGroup->tournamentGroupFullCode.' - Mode : '.TournamentCore::processContestantTeamModeValue($_tournamentTeamGroup->contestantTeamMode).' )'  ?>
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
										<?php include_partial('partials/insert_toolbar', array('_object' => $_tournamentSportGameGroups)) ?> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('candidate_tournament_groups', array( '_tournamentSportGameGroups' => $_tournamentSportGameGroups )) ?> 
										</div>
									</div> 
									
									<div class="ui-panel-footer-default">
										<div class="ui-panel-list-pagination-default">
											<div class="ui-panel-list-pagination">
												<?php include_partial('global/pagination', array('_totalRecords' => $_countProducts , '_pager'=> 'sport_game')) ?>
											</div>
										</div>
									</div>
											
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
<div class="modal fade" id="candidateGroupParticipantTeamModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<input type="hidden" class="form-control" id="multiple_team_group_id" name="multiple_team_group_id" value="<?php echo $sf_request->getParameter('team_group_id') ?>"> 
	<input type="hidden" class="form-control" id="multiple_team_group_token_id" name="multiple_team_group_token_id" value="<?php echo $sf_request->getParameter('token_id') ?>"> 
	<input type="hidden" class="form-control" id="multiple_gender_category_id" name="multiple_gender_category_id" value="<?php echo $_sportGameTeamGroup->groupGenderCategoryID ?>"> 
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
									<img title="<?php echo $_tournamentTeamGroup->gameCategoryName ?>" src="<?php echo image_path($_tournamentTeamGroup->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
										<img title="<?php echo $_tournamentTeamGroup->gameCategoryName ?>" src="<?php echo image_path($_tournamentTeamGroup->activeFlag ? 'status/active':'status/other')  ?>"> 
									</span>
									<?php echo __('Candidate Participant Teams').' ( Type: '.$_tournamentTeamGroup->gameCategoryName.' -  Code #: '.$_tournamentTeamGroup->tournamentGroupFullCode.' - Mode : '.TournamentCore::processContestantTeamModeValue($_tournamentTeamGroup->contestantTeamMode).' )'  ?>
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
										<?php include_partial('partials/modal_action_toolbar', array('_object' => $_tournamentTeamGroup)) ?> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('team/candidate_participant_team', array('_candidateMemberTeams' => $_candidateParticipantTeams)) ?> 
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
	$('#createGroupParticipantTeam').click(function(){
		var url = '<?php echo url_for('team_group/createGroupParticipantTeam')?>'; 
		var formName = 'createGroupParticipantTeamForm';
		var data = $("form#createGroupParticipantTeamForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return false; 
	});  
	$('#createMultipleCandidateModalData').click(function(){
		var url = '<?php echo url_for('team_group/createMultipleGroupParticipantTeam')?>'; 
		//var formName = 'insertModalOneData';
		//var data = $("form#insertModalOneData").serialize();
		//var datas = generateValidData (formName);
		//processEntry(datas, url )
		
		var data = 'tournament_team_group_id='+document.getElementById('tournament_team_group_id').value+'&tournament_team_group_token_id='+document.getElementById('tournament_team_group_token_id').value+'&sport_game_group_name='+document.getElementById('sport_game_group_name').value+'&sport_game_id='+document.getElementById('sport_game_id').value+'&gender_category_id='+document.getElementById('gender_category_id').value+'&team_status='+document.getElementById('team_status').value+'&start_date='+document.getElementById('start_date').value+'&description='+document.getElementById('description').value;
		//alert(data);
		$('#candidateGroupParticipantTeamModal').modal('hide');
		processEntry(data, url )
		return false; 
	});  
	
	//*********************************/
	
	$('.selectCandidateTournamentSportGameGroup').click(function() {   
		var url = '<?php echo url_for('team_group/candidateTournamentGroup')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-tournament-groups';   
		var data = 'team_group_id='+document.getElementById('team_group_id').value+'&team_group_token_id='+document.getElementById('team_group_token_id').value+'&sport_game_id='+document.getElementById('sport_game_id').value+'&sport_game_token_id='+document.getElementById('sport_game_token_id').value+'&tournament_id='+document.getElementById('tournament_id').value+'&gender_category_id='+document.getElementById('gender_category_id').value;
		//alert(data);
		processDataSelection(data, idName, url );	
		return true;	 
	}); 
	$('.selectCandidateGroupParticipantTeam').click(function() {   
		var url = '<?php echo url_for('team_group/candidateGroupParticipantTeam')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-participant-team';   
		var data = 'tournament_team_group_id='+document.getElementById('tournament_team_group_id').value+'&tournament_team_group_token_id='+document.getElementById('tournament_team_group_token_id').value+'&sport_game_id='+document.getElementById('sport_game_id').value+'&sport_game_group_id='+document.getElementById('sport_game_group_id').value+'&tournament_id='+document.getElementById('tournament_id').value+'&gender_category_id='+document.getElementById('gender_category_id').value;
		//alert(data);
		processDataSelection(data, idName, url );	
		return true;	 
	}); 
	//$('.selectCandidate').click(function() {   
		//$("#insertCandidateModalData").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//alert('Hello');
		//return true;	 
	//}); 
	
	
	//*********************************/
	
	$("#candidateTournamentSportGameGroupModal").submit(function(e) { 
		if($("input[name=selectSportGameModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("sport_game_group_id").value = listArr[0];
			document.getElementById("sport_game_group_token_id").value = listArr[1];  
			document.getElementById("sport_game_id").value = listArr[2];  
			document.getElementById("sport_game_token_id").value = listArr[3];  
			document.getElementById("gender_category_id").value = listArr[9];  
			document.getElementById("sport_game_group_name").value = listArr[4]+' - '+listArr[5]+' ('+listArr[10]+') - '+listArr[8];  
			  
			$("#createGroupParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelGroupParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$(".selectCandidateGroupParticipantTeam").removeAttr("disabled") ;
			$('#candidateTournamentSportGameGroupModal').modal('hide');
		return e.preventDefault();
	});
	 
	$("#candidateGroupParticipantTeamModal").submit(function(e) { 
		if($("input[name=selectSportGameModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("participant_team_id").value = listArr[2];
			document.getElementById("participant_team_token_id").value = listArr[3];  
			document.getElementById("participant_team_name").value = listArr[4]+' ('+listArr[5]+') - '+listArr[6]; 
			   
			$("#createGroupParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelGroupParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateGroupParticipantTeamModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
 
</script>

