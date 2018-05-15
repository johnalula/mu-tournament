
<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TOURNAMENT_MATCH)):
	//match_fixture=Group One - Football  - Men (Football)&match_fixture_id=1&match_fixture_token_id=d9b5944542c5968c4208146358a17eaf3a12a311&tournament_sport_game_group_id=7&tournament_sport_game_group_token_id=33be6f8c405591ad67cbc478e81a9fcfd53067fa&gender_category_id=1&tournament_contestant_team_mode=1&tournament_match_id=1&tournament_match_token_id=fb0865d7639631402465bce422a3fa93df3aaa18&tournament_match_game_category_id=5&participant_team_name=Kombolcha University (KU-ET) - ETHIOPIA&participant_team_id=10&participant_team_token_id=6e60f180ecab6683ae00640e0d847c1607cb050d&sport_game_group_team_id=29&sport_game_group_team_token_id=5879e8be4b556e4e8c94009cc61fc85abdbeab17&opponent_participant_team_name=Harare University (HU) - ETHIOPIA&opponent_participant_team_id=2&opponent_participant_team_token_id=78d046156b9c88cb068883876c2f7b3781937431&opponent_sport_game_group_team_id=27&opponent_sport_game_group_team_token_id=44a11a4daeba0e68f22663fc4c2daa757355282b&sport_game_venue_name=Mekelle Tigray Stadium&sport_game_group_type_id=&match_date=05/24/2018&match_time=3:00 PM&description=sfgsfgsdfg sdfgs dfg
	
	//tournament_match_id=1&tournament_match_token_id=b6dbb51e7372fe13e99ce23e813a8cbe31a59add&match_fixture_id=2&match_fixture_token_id=dbfa3cbd3eff7570b075cf6507527030ac78f2c7&tournament_match_fixture_group_id=2&tournament_match_fixture_token_group_id=cc67ff9ad5c8aecc19cea07fc318d978a1c83e19&tournament_sport_game_group_id=2&tournament_sport_game_group_token_id=8427b172ea073c090e16aa52708c77ba0afc57ed&sport_game_group_team_id=&sport_game_group_team_token_id=&match_fixture=Group One - 5000M Running - Women (Athletics)&participant_team_name=&gender_category_id=2&description=
	
	//$_groupParticipantTeam = TournamentGroupParticipantTeamTable::processObject ( $_orgID, $_orgTokenID, $_participantTeamGroupTokenID, $_participantTeamGroupTokenID ) ; //5 21054315fadfa7172ef46b8f49f6ce7c9e4148d7
	
	
	//$_flag =  TournamentMatchParticipantTeamTable::processNew ( 1, 'afccda09e18b3ebfd6734f446fd6e2a4e91f95c1', 1, 'b6dbb51e7372fe13e99ce23e813a8cbe31a59add', 2, 'dbfa3cbd3eff7570b075cf6507527030ac78f2c7', 2, 'cc67ff9ad5c8aecc19cea07fc318d978a1c83e19', 2, '8427b172ea073c090e16aa52708c77ba0afc57ed', $_participantTeamGroupID, $_participantTeamGroupTokenID, $_opponentParticipantTeamGroupID, $_opponentParticipantTeamGroupTokenID, 'fadfasdfasdfadf', $_participantTeamName, $_matchStatus, $_description,  TournamentCore::$_MULTIPLE_TEAM, SystemCore::$_MULTIPLE_DATA, $_userID, $_userTokenID );  
	
	
	//$_flag =  TournamentMatchParticipantTeamTable::processNew ( 1, 'afccda09e18b3ebfd6734f446fd6e2a4e91f95c1', 1, 'fb0865d7639631402465bce422a3fa93df3aaa18', 1, 'd9b5944542c5968c4208146358a17eaf3a12a311', 7, '33be6f8c405591ad67cbc478e81a9fcfd53067fa', 29, '5879e8be4b556e4e8c94009cc61fc85abdbeab17', 27, '44a11a4daeba0e68f22663fc4c2daa757355282b', 'Group One - Football  - Men (Football)', 'Kombolcha University (KU-ET)', 'Harare University (HU) - ETHIOPIA', 'asdf asdf asdfasdf', '05/24/2018', '2:30 PM', $_matchStatus, 'asdf asdfasdf', TournamentCore::$_PAIR_TEAM, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );
	
	//$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_opponentParticipantTeamGroupID, $_opponentParticipantTeamGroupTokenID, $_matchFixtureName, $_participantTeamName, $_opponentParticipantTeamName, $_tournamentMatchVenu, $_matchDate, $_matchTime, $_matchStatus, $_description, $_contestantTeamMode, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );
	
	//$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, 1, 'c14cde52da7dbba0b3fb2b418a9c9a35962411b9', 1, '81f85a62f6e4419c4bb3430b3ad4d5fd1af83a9d', 1, 'e3c1cac992933bbb99ce3ca296ea0a175e8db7cd', 17, '56234234514997b1df19ac78f1c72ceade49ee75', 'Group One - 5000M Running - Men (Athletics)', 'Arba Minch University (AMU-ET) - ETHIOPIA', $_matchStatus, 'asdf asdfa sdfasdf', SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );
	
	//$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, 1, '6a8581a1937238fb72d922b895e2fe5230ebaff8', 1, 'f81060b245f3fbad609cf00e88c492eb6e4810fa', 3, '167cd35df8db69947d34ddec0267fd251bf27f9f', 1, 'b993e8abe55e6b9ef269f60fe22fc956fa8217e4', 'Group One - 5000M Running - Men (Athletics)', 'Mekelle University (MU-ET) - ETHIOPIA', $_matchStatus, 'adfafa adfadf', 2, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID ); 
	
	//$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_sportGameTeamGroupID, $_sportGameTeamGroupTokenID, $_matchFixtureName, $_participantTeamName, $_matchStatus, $_description, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );
	
	//$_tournamentMatchFixture = TournamentMatchFixtureTable::processObject ( 1, 'afccda09e18b3ebfd6734f446fd6e2a4e91f95c1', 1, 'f81060b245f3fbad609cf00e88c492eb6e4810fa' );
	//echo $_tournamentMatchFixture->id.' == '.$_tournamentMatchFixture->tournamentMatchFixtureNumber.' == '.$sf_user->getAttribute('orgTokenID');
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
		
		//echo count($_matchParticipantGroupTeams);
		/*$array1 = array("red","blue");
		$array2 = array("green","yellow");
		$bigArrays = array_merge($array1,$array2);

		foreach($bigArrays as $bigArray) {
				echo $bigArray.' => ';
		} */
	//echo count($_allTournamentMatchFixtureGroups);
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('participant_team', array( '_tournamentMatch' => $_tournamentMatch,'_activeTournament' => $_activeTournament, '_tournamentMatchFixtureGroups' => $_tournamentMatchFixtureGroups, '_matchParticipantTeams' => $_matchParticipantTeams )) ?> 
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
									<?php echo __('Candidate Participant Teams').' ( Sport Game: '.$_tournamentMatch->gameCategoryName.' - Code #: '.$_tournamentMatch->matchNumber.' )'  ?>
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
										<?php if($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM): ?>
											<?php include_partial('partials/insert_toolbar', array('_object' => $_sportGameTeamGroup)) ?> 
										<?php else: ?>
											<?php include_partial('partials/modal_action_toolbar', array('_object' => $_sportGameTeamGroup)) ?> 
										<?php endif; ?>
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('team_group/candidate_group_member_team', array('_candidateMemberTeams' => $_candidateParticipantTeams)) ?> 
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
<div class="modal fade" id="candidateOpponentParticipantTeamModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
									<?php echo __('Candidate Participant Teams').' ( Sport Game: '.$_tournamentMatch->gameCategoryName.' - Code #: '.$_tournamentMatch->matchNumber.' )'  ?>
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
										<?php include_partial('partials/insert_toolbar', array('_object' => $_sportGameTeamGroup)) ?> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('candidate_group_member_opponent_team', array('_candidateMemberTeams' => $_candidateParticipantTeams)) ?> 
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
		var formName = 'createTournamentMatchParticipantTeamForm';
		var data = $("form#createTournamentMatchParticipantTeamForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});  
	
	$('#createBatchCandidateTournamentMatchParticipantsData').click(function(){
		var url = '<?php echo url_for('match/createBatchTournamentMatchParticipantTeam')?>';  
		var data = 'tournament_match_id='+document.getElementById('tournament_match_id').value+'&tournament_match_token_id='+document.getElementById('tournament_match_token_id').value+'&match_fixture_id='+document.getElementById('match_fixture_id').value+'&match_fixture_token_id='+document.getElementById('match_fixture_token_id').value+'&tournament_match_fixture_group_id='+document.getElementById('tournament_match_fixture_group_id').value+'&tournament_match_fixture_token_group_id='+document.getElementById('tournament_match_fixture_token_group_id').value+'&tournament_sport_game_group_id='+document.getElementById('tournament_sport_game_group_id').value+'&tournament_sport_game_group_token_id='+document.getElementById('tournament_sport_game_group_token_id').value+'&sport_game_group_team_id='+document.getElementById('sport_game_group_team_id').value+'&sport_game_group_team_token_id='+document.getElementById('sport_game_group_team_token_id').value+'&match_fixture='+document.getElementById('match_fixture').value+'&participant_team_name='+document.getElementById('participant_team_name').value+'&tournament_contestant_team_mode='+document.getElementById('tournament_contestant_team_mode').value+'&gender_category_id='+document.getElementById('gender_category_id').value+'&description='+document.getElementById('description').value;
		//alert(data);
		$('#candidateParticipantTeamModal').modal('hide');
		processEntry(data, url )
		return false; 
	});  
	
	$('.selectSportGameMatchVenue').click(function() {   
		var thisIDNumber = $(this).attr('rel');   
		var thisIDName = $(this).attr('id');   
		document.getElementById("sport_game_venue_name").value = thisIDNumber;
		//document.getElementById("sport_game_group_type_id").value = thisIDNumber; 
		//$('#createSchoolGradePaymentFee').removeAttr("disabled").removeClass("ui-action-toolbar-disabled-menu").addClass("ui-action-toolbar-enabled-menu");
	}); 
	
	//*********************************/
	
	$('.selectCandidateTournamentMatchFixture').click(function() {   
		var url = '<?php echo url_for('match/candidateTournamentMatchFixtures')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-match-fixtures';   
		var data = 'tournament_match_id='+document.getElementById('tournament_match_id').value+'&tournament_match_token_id='+document.getElementById('tournament_match_token_id').value+'&tournament_match_game_category_id='+document.getElementById('tournament_match_game_category_id').value+'&tournament_contestant_team_mode='+document.getElementById('tournament_contestant_team_mode').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	
	$('.selectCandidateParticipantTeam').click(function() {   
		var url = '<?php echo url_for('match/candidateMatchParticipantTeams')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-group-member-teams';   
		var data = 'tournament_match_id='+document.getElementById('tournament_match_id').value+'&tournament_match_token_id='+document.getElementById('tournament_match_token_id').value+'&match_fixture_id='+document.getElementById('match_fixture_id').value+'&match_fixture_token_id='+document.getElementById('match_fixture_token_id').value+'&tournament_sport_game_group_id='+document.getElementById('tournament_sport_game_group_id').value+'&gender_category_id='+document.getElementById('gender_category_id').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	$('.selectCandidateOpponentParticipantTeam').click(function() {   
		var url = '<?php echo url_for('match/candidateMatchParticipantOpponentTeams')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-group-member-opponent_teams';   
		var data = 'tournament_match_id='+document.getElementById('tournament_match_id').value+'&tournament_match_token_id='+document.getElementById('tournament_match_token_id').value+'&match_fixture_id='+document.getElementById('match_fixture_id').value+'&match_fixture_token_id='+document.getElementById('match_fixture_token_id').value+'&tournament_sport_game_group_id='+document.getElementById('tournament_sport_game_group_id').value+'&sport_game_group_team_id='+document.getElementById('sport_game_group_team_id').value+'&gender_category_id='+document.getElementById('gender_category_id').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	//*********************************/
	 
	
	$("#candidateTournamentMatchFixtureModal").submit(function(e) { 
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
			document.getElementById("sport_game_venue_name").value = listArr[13];  
			document.getElementById("match_date").value = listArr[14];  
			document.getElementById("match_time").value = listArr[15];  
			
			//$("#createTournamentMatchParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			//$("#cancelTournamentMatchParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$(".selectCandidateParticipantTeam").removeAttr("disabled") ;
			$('#candidateTournamentMatchFixtureModal').modal('hide');
		return e.preventDefault();
	});
	$("#candidateParticipantTeamModal").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("sport_game_group_team_id").value = listArr[0];
			document.getElementById("sport_game_group_team_token_id").value = listArr[1];  
			document.getElementById("participant_team_id").value = listArr[2];
			document.getElementById("participant_team_token_id").value = listArr[3];  
			document.getElementById("participant_team_name").value = listArr[4]+' ('+listArr[5]+')'+' - '+listArr[6];    
						
			$("#createTournamentMatchParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentMatchParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$(".selectCandidateOpponentParticipantTeam").removeAttr("disabled") ;
			$('#candidateParticipantTeamModal').modal('hide');
		return e.preventDefault();
	});
	 
	$("#candidateOpponentParticipantTeamModal").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("opponent_sport_game_group_team_id").value = listArr[0];
			document.getElementById("opponent_sport_game_group_team_token_id").value = listArr[1];  
			document.getElementById("opponent_participant_team_id").value = listArr[2];
			document.getElementById("opponent_participant_team_token_id").value = listArr[3];  
			document.getElementById("opponent_participant_team_name").value = listArr[4]+' ('+listArr[5]+')'+' - '+listArr[6];    
						
			$("#createTournamentMatchParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentMatchParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateOpponentParticipantTeamModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
 
</script>
