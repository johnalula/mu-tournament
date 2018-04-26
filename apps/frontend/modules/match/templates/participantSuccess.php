
<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_MATCH)):
	//match_fixture=Group One - 5000M Running - Men (Athletics)&match_fixture_id=1&match_fixture_token_id=81f85a62f6e4419c4bb3430b3ad4d5fd1af83a9d&sport_game_group_id=1&sport_game_group_token_id=e3c1cac992933bbb99ce3ca296ea0a175e8db7cd&tournament_match_id=1&tournament_match_token_id=c14cde52da7dbba0b3fb2b418a9c9a35962411b9&participant_team_name=Arba Minch University (AMU-ET) - ETHIOPIA&participant_team_id=7&participant_team_token_id=6e60f180ecab6683ae00640e0d847c1607cb050d&sport_game_group_team_id=17&sport_game_group_team_token_id=56234234514997b1df19ac78f1c72ceade49ee75&description=fgsdfg sdfg sdgs dfgg
	
	//$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, 1, 'c14cde52da7dbba0b3fb2b418a9c9a35962411b9', 1, '81f85a62f6e4419c4bb3430b3ad4d5fd1af83a9d', 1, 'e3c1cac992933bbb99ce3ca296ea0a175e8db7cd', 17, '56234234514997b1df19ac78f1c72ceade49ee75', 'Group One - 5000M Running - Men (Athletics)', 'Arba Minch University (AMU-ET) - ETHIOPIA', $_matchStatus, 'asdf asdfa sdfasdf', SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );
	
	//$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_sportGameTeamGroupID, $_sportGameTeamGroupTokenID, $_matchFixtureName, $_participantTeamName, $_matchStatus, $_description, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );
	
	//$_tournamentMatchFixtures = TournamentMatchFixtureTable::processCandidateSelections ( 1, $_parentMatchID, 1, sha1(md5('82bd3aa39c947e4afe24f7bf25f240f3f6adc7e8')), $_sportGameTypeID, $_keyword);
	
	//echo count($_candidateParticipantTeams).' == '.count($_matchFixtures).' == ';
	
	/*$_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processCandidateSelections ( 1, 1, sha1(md5('c14cde52da7dbba0b3fb2b418a9c9a35962411b9')), $_matchFixtureID, $_teamGroupID, $_sportGameID, $_keyword);
		//if(!$_groupMemberTeams) { return false; } 
		echo count($_candidateParticipantTeams).' == ';  
		$_exclusion = array();   
		foreach($_candidateParticipantTeams as $_candidateParticipantTeam) {
			//if(!$_productPrice->hasActiveInventoryItem ) {
				echo $_candidateParticipantTeam->sport_game_team_group_id.' => ';
			//} 
		} */
		//echo count($_candidateParticipants);
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('participant', array( '_tournamentMatch' => $_tournamentMatch,'_activeTournament' => $_activeTournament, '_matchParticipantTeams' => $_matchParticipantTeams, '_matchFixtures' => $_matchFixtures )) ?> 
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
<div class="modal fade" id="candidateTournamentMatchFixtureModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog-xlg">
		<div class="modal-content"> 
			 <div class="ui-modal-panel-container1" id=""> 
				<div class="ui-panel-grid-box" id=""> 
					<!-- First panel -->  
						<div class="ui-panel-grid">
							<div class="ui-panel-header-default">
								<h2 class="ui-theme-panel-header">
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Tournament Match Fixture Management') ?>">
									<span class="ui-header-status-icon">
										<img title="<?php echo $_tournamentMatch->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatch->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
										<img title="<?php echo $_tournamentMatch->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatch->activeFlag ? 'status/active':'status/other')  ?>"> 
									</span>
									<?php echo __('Candidate Match Fixtures').' ( Sport Game: '.$_tournamentMatch->gameCategoryName.' - Code #: '.$_tournamentMatch->matchNumber.' )'  ?>
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
										<?php include_partial('partials/modal_action_toolbar', array('_object' => $_candidateSportGames)) ?> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div id="ui-list-collapsible-panel-five">
										<div class="ui-tab-panel-grid ">
											<?php include_partial('candidate_match_fixtures', array( '_candidateMatchFixtures' => $_candidateMatchFixtures )) ?> 
										</div>		
									</div><!-- ui-tab-panel-grid -->
									
									<div class="ui-panel-footer-default">
										<div class="ui-panel-list-pagination-default">
											<div class="ui-panel-list-pagination">
												<?php include_partial('global/pagination', array('_totalRecords' => $_countProducts , '_pager'=> 'match-fixture')) ?>
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
<div class="modal fade" id="candidateParticipantTeamModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Tournament Match Fixture Management') ?>">
									<span class="ui-header-status-icon">
										<img title="<?php echo $_tournamentMatch->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatch->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
										<img title="<?php echo $_tournamentMatch->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatch->activeFlag ? 'status/active':'status/other')  ?>"> 
									</span>
									<?php echo __('Candidate Teams').' ( Sport Game: '.$_tournamentMatch->gameCategoryName.' - Code #: '.$_tournamentMatch->matchNumber.' )'  ?>
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
										<?php include_partial('partials/modal_action_toolbar', array('_object' => $_sportGameTeamGroup)) ?> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('candidate_participant_team', array('_candidateMemberTeams' => $_candidateParticipantTeams)) ?> 
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
<div class="modal fade" id="candidateMatchParticipantModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Tournament Match Fixture Management') ?>">
									<span class="ui-header-status-icon">
										<img title="<?php echo $_tournamentMatch->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatch->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
										<img title="<?php echo $_tournamentMatch->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatch->activeFlag ? 'status/active':'status/other')  ?>"> 
									</span>
									<?php echo __('Candidate Teams').' ( Sport Game: '.$_tournamentMatch->gameCategoryName.' - Code #: '.$_tournamentMatch->matchNumber.' )'  ?>
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
										<?php include_partial('partials/modal_action_toolbar', array('_object' => $_sportGameTeamGroup)) ?> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('team_group/candidate_team_member_participants', array('_candidateParticipants' => $_candidateParticipants)) ?> 
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
	$('#createTournamentMatchParticipant').click(function(){
		var url = '<?php echo url_for('match/createTournamentMatchParticipant')?>'; 
		var formName = 'createTournamentMatchParticipantForm';
		var data = $("form#createTournamentMatchParticipantForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});  
	
	$('#createBatchTournamentMatchParticipant').click(function(){
		var url = '<?php echo url_for('match/createBatchTournamentMatchParticipant')?>'; 
		var formName = 'createTournamentMatchParticipantForm';
		var data = $("form#createTournamentMatchParticipantForm").serialize();
		var datas = generateValidData (formName);
		//processEntry(datas, url )
		alert(datas);
		return true; 
	});  
	
	//*********************************/
	
	$('.selectCandidateTournamentMatchFixture').click(function() {   
		var url = '<?php echo url_for('match/candidateTournamentMatchFixtures')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-match-fixtures';   
		var data = 'tournament_match_id='+document.getElementById('tournament_match_id').value+'&tournament_match_token_id='+document.getElementById('tournament_match_token_id').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	//*********************************/
	
	$('.selectCandidateParticipantTeam').click(function() {   
		var url = '<?php echo url_for('match/candidateTournamentMatchParticipantTeams')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-participant-teams';   
		var data = 'tournament_match_id='+document.getElementById('tournament_match_id').value+'&tournament_match_token_id='+document.getElementById('tournament_match_token_id').value+'&match_fixture_id='+document.getElementById('match_fixture_id').value+'&match_fixture_token_id='+document.getElementById('match_fixture_token_id').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	
	$('.selectCandidateMatchParticipant').click(function() {   
		var url = '<?php echo url_for('match/candidateTournamentMatchParticipants')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-team-member-participant';   
		var data = 'participant_team_id='+document.getElementById('participant_team_id').value+'&participant_team_token_id='+document.getElementById('participant_team_token_id').value+'&match_fixture_id='+document.getElementById('match_fixture_id').value+'&match_fixture_token_id='+document.getElementById('match_fixture_token_id').value+'&sport_game_group_team_id='+document.getElementById('sport_game_group_team_id').value+'&sport_game_group_team_token_id='+document.getElementById('sport_game_group_team_token_id').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	//*********************************/
	 
	
	$("#candidateTournamentMatchFixtureModal").submit(function(e) { 
		if($("input[name=selectSportGameModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("match_fixture_id").value = listArr[0];
			document.getElementById("match_fixture_token_id").value = listArr[1];  
			//document.getElementById("match_fixture").value = listArr[2]+' ('+listArr[3]+')';  
			document.getElementById("match_fixture").value = listArr[7]+' - '+listArr[4]+' '+listArr[6]+' - '+listArr[8]+' ('+listArr[5]+')';    
			document.getElementById("sport_game_group_id").value = listArr[2];  
			document.getElementById("sport_game_group_token_id").value = listArr[3];  
			//document.getElementById("contestant_team_mode").value = listArr[8];  
			//document.getElementById("contestant_mode").value = listArr[10];    
			
			$("#createTournamentMatchParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentMatchParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$(".selectCandidateParticipantTeam").removeAttr("disabled") ;
			$('#candidateTournamentMatchFixtureModal').modal('hide');
		return e.preventDefault();
	});
	$("#candidateParticipantTeamModal").submit(function(e) { 
		if($("input[name=selectSportGameModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			  
			document.getElementById("participant_team_id").value = listArr[0];
			document.getElementById("participant_team_token_id").value = listArr[1];  
			document.getElementById("sport_game_group_team_id").value = listArr[2];
			document.getElementById("sport_game_group_team_token_id").value = listArr[3];
			document.getElementById("participant_team_name").value = listArr[4]+' ('+listArr[5]+')'+' - '+listArr[6];    
						
			$("#createTournamentMatchParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentMatchParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$(".selectCandidateMatchParticipant").removeAttr("disabled") ;
			$('#candidateParticipantTeamModal').modal('hide');
		return e.preventDefault();
	});
	 
	$("#candidateMatchParticipantModal").submit(function(e) { 
		if($("input[name=selectSportGameModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("participant_id").value = listArr[0];
			document.getElementById("participant_token_id").value = listArr[1];  
			document.getElementById("participant_name").value = listArr[2]+' ( '+listArr[4]+' )';    
			
			$("#createTournamentMatchParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentMatchParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateMatchParticipantModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
 
</script>
