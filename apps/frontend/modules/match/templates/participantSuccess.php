
<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TOURNAMENT_MATCH)):
	//match_fixture=Group One - Maraton Running - Women (Athletics)&match_fixture_id=6&match_fixture_token_id=c0eb9d0f1f6060784ff6ef7fe1b9528197ae841d&tournament_sport_game_group_id=6&tournament_sport_game_group_token_id=6df1f8657243b3c2f51424faf96bcf418e74b7e6&gender_category_id=2&tournament_match_fixture_group_id=6&tournament_match_fixture_token_group_id=6ca77bcab18a67844f426e79e3f9af5bf1f3ceb1&contestant_team_mode=1&match_fixture_contestant_team_mode=2&tournament_contestant_team_mode=2&tournament_match_id=1&tournament_match_token_id=17a7179c93fc7b90a97c0f0545a1089f66438a27&tournament_match_game_category_id=1&participant_team_name=Axum University (AXU-ET) - Ethiopia &participant_team_id=8&participant_team_token_id=6e60f180ecab6683ae00640e0d847c1607cb050d&sport_game_group_team_id=4&sport_game_group_team_token_id=d603151399eb25fc00498fb46cca25a9c02fab1a&sport_game_venue_name=Mekelle Tigray Stadium&sport_game_group_type_id=&match_date=05/23/2018&match_time=10:00 PM&description=asd asdfasdfasdf
	

	//$_flag =  TournamentMatchParticipantTeamTable::processNew ( 1, 'afccda09e18b3ebfd6734f446fd6e2a4e91f95c1', 1, '17a7179c93fc7b90a97c0f0545a1089f66438a27#', 6, 'c0eb9d0f1f6060784ff6ef7fe1b9528197ae841d', 6, '6ca77bcab18a67844f426e79e3f9af5bf1f3ceb1', 6, '6df1f8657243b3c2f51424faf96bcf418e74b7e6', 4, 'd603151399eb25fc00498fb46cca25a9c02fab1a', $_opponentParticipantTeamGroupID, $_opponentParticipantTeamGroupTokenID, 'Group One - Maraton Running - Women (Athletics)', 'Axum University (AXU-ET) - Ethiopia', $_opponentParticipantTeamName, 'Mekelle Tigray Stadium', '05/23/2018', '10:00 PM', $_matchStatus, 'asdf asdf asdfasdfad', 2, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );

	 //match_fixture=Group One - 10000M Running - Women (Athletics)&match_fixture_id=6&match_fixture_token_id=b6b3628172b215aac37f082b779c41bcd1f8311d&tournament_sport_game_group_id=4&tournament_sport_game_group_token_id=eea763e281415bf2e0086378e23a3ecef31fd379&gender_category_id=2&tournament_match_fixture_group_id=6&tournament_match_fixture_token_group_id=2785ac12ee7e10c12bdb32f1ee866ddd22ef3b6b&contestant_team_mode=1&match_fixture_contestant_team_mode=2&tournament_contestant_team_mode=2&tournament_match_id=1&tournament_match_token_id=5e1a08d23a632ab92ec1f8c5a0e7e5f0750d9812&tournament_match_game_category_id=1&participant_team_name=Mekelle University (MU-ET) - Ethiopia &participant_team_id=4&participant_team_token_id=6e60f180ecab6683ae00640e0d847c1607cb050d&sport_game_group_team_id=9&sport_game_group_team_token_id=f43eecb067032a135998fee6a2bebd7493fe33d1&sport_game_venue_name=Mekelle Tigray Stadium&sport_game_group_type_id=&match_date=05/29/2018&match_time=11:00 AM&description=sdfg sdfg sdfgsdg
	 
	 
	//echo count($_candidateParticipantTeams);
	
	//tournament_match_id=1&tournament_match_token_id=5e1a08d23a632ab92ec1f8c5a0e7e5f0750d9812&match_fixture_id=4&match_fixture_token_id=f0b05948b6c93fbc76ffb4ed0cbf44efb61ed1bd&tournament_match_fixture_group_id=4&tournament_match_fixture_token_group_id=0065cbad2acd2a8be6ff9617a1da125362d1e82a&tournament_sport_game_group_id=2&tournament_sport_game_group_token_id=927b2b9fbbc5a6da68d82c646ffd661d32e00296&sport_game_group_team_id=&sport_game_group_team_token_id=&match_fixture=Group One - 5000M Running - Women (Athletics)&participant_team_name=&tournament_contestant_team_mode=2&gender_category_id=2&description=
	
	//$_flag =  TournamentMatchParticipantTeamTable::processNew ( 1, 'afccda09e18b3ebfd6734f446fd6e2a4e91f95c1', 1, '5e1a08d23a632ab92ec1f8c5a0e7e5f0750d9812', 4, 'f0b05948b6c93fbc76ffb4ed0cbf44efb61ed1bd', 4, '0065cbad2acd2a8be6ff9617a1da125362d1e82a', 2, '927b2b9fbbc5a6da68d82c646ffd661d32e00296', $_participantTeamGroupID, $_participantTeamGroupTokenID, $_opponentParticipantTeamGroupID, $_opponentParticipantTeamGroupTokenID, 'Group One - 5000M Running - Women (Athletics)', $_participantTeamName, $_opponentParticipantTeamName, 'Tigray Stadium', $_matchDate, $_matchTime, $_matchStatus, $_description, 2, SystemCore::$_MULTIPLE_DATA, $_userID, $_userTokenID );
	
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
<div class="modal fade" id="candidateTournamentMatchFixtureGroupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
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
										<?php include_partial('partials/insert_toolbar', array('_object' => $_candidateSportGames)) ?> 
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
<div class="modal fade" id="candidateMatchFixtureParticipantTeamModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
<div class="modal fade" id="candidateMatchParticipantTeamMemberModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
											<?php include_partial('candidate_match_fixture_group_participants', array('_candidateParticipants' => $_candidateParticipants)) ?> 
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
	$('#createTournamentMatchParticipantTeam').click(function(){
		var url = '<?php echo url_for('match/createTournamentMatchParticipantTeam')?>'; 
		var formName = 'createTournamentMatchFixtureGroupParticipantForm';
		var data = $("form#createTournamentMatchFixtureGroupParticipantForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});  
	  
	
	//*********************************/
	
	$('#createBatchTournamentMatchFixtureParticipant').click(function(){
		var url = '<?php echo url_for('match/createBatchTournamentMatchFixtureGroupParticipant')?>'; 
		var formName = 'createTournamentMatchFixtureGroupParticipantForm';
		var data = $("form#createTournamentMatchFixtureGroupParticipantForm").serialize();
		var datas = generateValidData (formName);
		//processEntry(datas, url )
		alert(datas);
		return true; 
	});  
	  
	
	//*********************************/
	
	$('.selectCandidateTournamentMatchFixtureGroups').click(function() {   
		var url = '<?php echo url_for('match/candidateTournamentMatchParticipantFixtureGroups')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-match-fixtures';   
		var data = 'tournament_match_id='+document.getElementById('tournament_match_id').value+'&tournament_match_token_id='+document.getElementById('tournament_match_token_id').value+'&tournament_match_game_category_id='+document.getElementById('tournament_match_game_category_id').value+'&tournament_contestant_team_mode='+document.getElementById('match_fixture_contestant_team_mode').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	
	//*********************************/
	
	$('.selectCandidateMatchFixtureParticipantTeam').click(function() {   
		var url = '<?php echo url_for('match/candidateMatchFixtureGroupParticipantTeams')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-participant-teams';   
		var data = 'tournament_match_id='+document.getElementById('tournament_match_id').value+'&tournament_match_token_id='+document.getElementById('tournament_match_token_id').value+'&match_fixture_id='+document.getElementById('match_fixture_id').value+'&match_fixture_token_id='+document.getElementById('match_fixture_token_id').value+'&match_fixture_token_id='+document.getElementById('match_fixture_token_id').value+'&match_fixture_token_id='+document.getElementById('match_fixture_token_id').value+'&tournament_match_fixture_group_id='+document.getElementById('tournament_match_fixture_group_id').value+'&gender_category_id='+document.getElementById('gender_category_id').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	
	//*********************************/
	
	$('.selectCandidateMatchParticipantTeamMember').click(function() {   
		var url = '<?php echo url_for('match/candidateMatchFixtureGroupParticipantTeamMembers')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-group-member-participant';   
		var data = 'tournament_match_id='+document.getElementById('tournament_match_id').value+'&tournament_match_token_id='+document.getElementById('tournament_match_token_id').value+'&match_fixture_id='+document.getElementById('match_fixture_id').value+'&team_id='+document.getElementById('team_id').value+'&team_token_id='+document.getElementById('team_token_id').value+'&sport_game_id='+document.getElementById('match_fixture_token_id').value+'&sport_game_id='+document.getElementById('sport_game_id').value+'&sport_game_group_team_id='+document.getElementById('sport_game_group_team_id').value+'&sport_game_id='+document.getElementById('sport_game_id').value+'&gender_category_id='+document.getElementById('gender_category_id').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	 
	//*********************************/
	 
	
	$("#candidateTournamentMatchFixtureGroupModal").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("match_fixture_id").value = listArr[16];
			document.getElementById("match_fixture_token_id").value = listArr[17];  
			document.getElementById("tournament_match_fixture_group_id").value = listArr[0];  
			document.getElementById("tournament_match_fixture_token_group_id").value = listArr[1];  
			document.getElementById("match_fixture").value = listArr[7]+' - '+listArr[4]+' '+listArr[6]+' - '+listArr[8]+' ('+listArr[5]+')';    
			document.getElementById("tournament_sport_game_group_id").value = listArr[2];  
			document.getElementById("tournament_sport_game_group_token_id").value = listArr[3];  
			document.getElementById("gender_category_id").value = listArr[9];  
			document.getElementById("sport_game_id").value = listArr[11];  
			
			//$("#createTournamentMatchParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			//$("#cancelTournamentMatchParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			if(document.getElementById("match_participant_creation_mode").value == 2){
				$("#createBatchTournamentMatchFixtureParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			}
			$(".selectCandidateMatchFixtureParticipantTeam").removeAttr("disabled") ;
			$('#candidateTournamentMatchFixtureGroupModal').modal('hide');
		return e.preventDefault();
	});
	
	//*********************************/
	
	$("#candidateMatchFixtureParticipantTeamModal").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			  
			document.getElementById("participant_team_id").value = listArr[0];
			document.getElementById("participant_team_token_id").value = listArr[1];  
			document.getElementById("sport_game_group_team_id").value = listArr[2];
			document.getElementById("sport_game_group_team_token_id").value = listArr[3];
			document.getElementById("team_id").value = listArr[7];
			document.getElementById("team_token_id").value = listArr[8];
			document.getElementById("participant_team_name").value = listArr[4]+' ('+listArr[5]+')'+' - '+listArr[6];    
						
			//$("#createTournamentMatchParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			//$("#cancelTournamentMatchParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$(".selectCandidateMatchParticipantTeamMember").removeAttr("disabled") ;
			$('#candidateMatchFixtureParticipantTeamModal').modal('hide');
		return e.preventDefault();
	});
	
	//*********************************/
	
	$("#candidateMatchParticipantTeamMemberModal").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("participant_id").value = listArr[0];
			document.getElementById("participant_token_id").value = listArr[1];  
			document.getElementById("participant_name").value = listArr[2]+' ( '+listArr[4]+' )';    
			
			$("#createTournamentMatchParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentMatchParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateMatchParticipantTeamMemberModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
 
</script>
