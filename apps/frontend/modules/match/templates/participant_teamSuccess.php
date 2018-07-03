
<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TOURNAMENT_MATCH)):
	
	//echo count($_tournamentSportGameOpponentGroups).' = ';
	//echo sha1(md5("fasuadmin18"));
	
	//197085e1173adc58335847f14dc45cea443248df 
	//echo count($_tournamentSportGameOpponentGroups);
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('participant_team', array( '_tournamentMatch' => $_tournamentMatch,'_activeTournament' => $_activeTournament, '_tournamentMatchFixtureGroups' => $_tournamentMatchFixtureGroups, '_candidateTournamentMatchFixtureGroups' => $_candidateTournamentMatchFixtureGroups )) ?> 
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
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group Management') ?>">
									<span class="ui-header-status-icon">
										<img title="<?php echo $_tournamentMatch->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatch->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
										<img title="<?php echo $_tournamentMatch->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatch->activeFlag ? 'status/active':'status/other')  ?>"> 
									</span>
									<?php echo __('Candidate Sport Games').' ( Sport Game: '.$_tournamentMatch->gameCategoryName.' - Code #: '.$_tournamentMatch->matchNumber.' )'  ?>
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
<div class="modal fade" id="candidateTournamentSportGameGroupOpponentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog">
		<div class="modal-content"> 
			 <div class="ui-modal-panel-container1" id=""> 
				<div class="ui-panel-grid-box" id=""> 
					<!-- First panel -->  
						<div class="ui-panel-grid">
							<div class="ui-panel-header-default">
								<h2 class="ui-theme-panel-header">
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group Management') ?>">
									<span class="ui-header-status-icon">
										<img title="<?php echo $_tournamentMatch->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatch->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
										<img title="<?php echo $_tournamentMatch->gameCategoryName ?>" src="<?php echo image_path($_tournamentMatch->activeFlag ? 'status/active':'status/other')  ?>"> 
									</span>
									<?php echo __('Candidate Sport Games').' ( Sport Game: '.$_tournamentMatch->gameCategoryName.' - Code #: '.$_tournamentMatch->matchNumber.' )'  ?>
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
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('candidate_tournament_opponent_groups', array( '_tournamentSportGameOpponentGroups' => $_tournamentSportGameOpponentGroups )) ?> 
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
		var url = '<?php echo url_for('match/candidateTournamentMatchParticipantFixtures')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-match-fixtures';   
		var data = 'tournament_match_id='+document.getElementById('tournament_match_id').value+'&tournament_match_token_id='+document.getElementById('tournament_match_token_id').value+'&tournament_match_game_category_id='+document.getElementById('tournament_match_game_category_id').value+'&tournament_contestant_team_mode='+document.getElementById('match_fixture_contestant_team_mode').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	//*********************************/
	
	$('.selectCandidateTournamentSportGameGroup').click(function() {   
		var url = '<?php echo url_for('match/candidateTournamentFixtureSportGameGroup')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-tournament-groups';   
		var data = 'tournament_match_id='+document.getElementById('tournament_match_id').value+'&tournament_match_token_id='+document.getElementById('tournament_match_token_id').value+'&sport_game_id='+document.getElementById('sport_game_id').value+'&gender_category_id='+document.getElementById('gender_category_id').value;
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
	$('.selectCandidateTournamentSportGameGroupOpponent').click(function() {   
		var url = '<?php echo url_for('match/candidateTournamentFixtureSportGameOpponentGroup')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-tournament-opponent-groups';   
		var data = 'tournament_match_id='+document.getElementById('tournament_match_id').value+'&tournament_match_token_id='+document.getElementById('tournament_match_token_id').value+'&sport_game_id='+document.getElementById('sport_game_id').value+'&gender_category_id='+document.getElementById('gender_category_id').value;
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
			document.getElementById("gender_category_id").value = listArr[9];  
			document.getElementById("sport_game_id").value = listArr[11];  
			document.getElementById("sport_game_venue_name").value = listArr[13];  
			document.getElementById("match_date").value = listArr[14];  
			document.getElementById("match_time").value = listArr[15];  
			
			$(".selectCandidateTournamentSportGameGroup").removeAttr("disabled") ;
			$('#candidateTournamentMatchFixtureModal').modal('hide');
		return e.preventDefault();
	});
	$("#candidateTournamentSportGameGroupModal").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("tournament_sport_game_group_id").value = listArr[0];
			document.getElementById("tournament_sport_game_group_token_id").value = listArr[1];  
			document.getElementById("tournament_sport_game_group_name").value = listArr[4]+' - '+listArr[5]+' ('+listArr[10]+') - '+listArr[8]+' - '+listArr[6];  
			
			$(".selectCandidateParticipantTeam").removeAttr("disabled") ;
			$('#candidateTournamentSportGameGroupModal').modal('hide');
		return e.preventDefault();
	});
	$("#candidateTournamentSportGameGroupOpponentModal").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("tournament_sport_game_group_opponent_id").value = listArr[0];
			document.getElementById("tournament_sport_game_group_opponent_token_id").value = listArr[1];  
			document.getElementById("tournament_sport_game_group_opponent_name").value = listArr[4]+' - '+listArr[5]+' ('+listArr[10]+') - '+listArr[8]+' - '+listArr[6];  
			
			$(".selectCandidateOpponentParticipantTeam").removeAttr("disabled") ;
			$('#candidateTournamentSportGameGroupOpponentModal').modal('hide');
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
						
			//$("#createTournamentMatchParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			//$("#cancelTournamentMatchParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$(".selectCandidateTournamentSportGameGroupOpponent").removeAttr("disabled") ;
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
