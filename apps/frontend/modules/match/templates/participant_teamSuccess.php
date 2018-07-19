
<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TOURNAMENT_MATCH)):
	
	//echo count($_tournamentSportGameOpponentGroups).' = ';
	//echo sha1(md5("fasuadmin18"));
	
	//197085e1173adc58335847f14dc45cea443248df 
	//echo count($_tournamentSportGameOpponentGroups);
	
	//match_fixture=Heat One - 10000 Meters Running - Men (Athletics)&match_fixture_id=6&match_fixture_token_id=c08c53ab0143bccb3b3f268413901ce3cf90ff8a&gender_category_id=1&tournament_match_fixture_group_id=36&tournament_match_fixture_token_group_id=c75a981d339dffb2fd5e333b5de760a6469a55bc&sport_game_id=29&contestant_team_mode=1&match_fixture_contestant_team_mode=2&tournament_contestant_team_mode=2&tournament_match_id=4&tournament_match_token_id=346b5501f220f346040c45a17e40244d64e2b415&tournament_match_game_category_id=1&tournament_sport_game_group_name=Group One - 10000 Meters (Men) - Running - Athletics&tournament_sport_game_group_id=14&tournament_sport_game_group_token_id=df0094cb234d3c7b0b9ac0148022223bd0bd174f&participant_team_name=Université Des Comores (UDC) - Comoros &participant_team_id=23&participant_team_token_id=08f2d7c86d34a89476cdf612b50eaa021ee80241&sport_game_group_team_id=29&sport_game_group_team_token_id=c986906dc7d6ba3b7ac8458e24f8809176dafe11&description=
	
	
	//$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, 4, '346b5501f220f346040c45a17e40244d64e2b415', 6, 'c08c53ab0143bccb3b3f268413901ce3cf90ff8a', 36, 'c75a981d339dffb2fd5e333b5de760a6469a55bc', 14, 'df0094cb234d3c7b0b9ac0148022223bd0bd174f', 29, 'c986906dc7d6ba3b7ac8458e24f8809176dafe11', $_sportGameOpponentGroupID, $_sportGameOpponentGroupTokenID, $_opponentParticipantTeamGroupID, $_opponentParticipantTeamGroupTokenID, $_opponentParticipantTeamID, $_opponentParticipantTeamTokenID, 'Heat One - 10000 Meters Running - Men (Athletics)', 'Université Des Comores (UDC) - Comoros', 'Group One - 10000 Meters (Men) - Running - Athletics', $_sportGameOpponentGroupName, $_opponentParticipantTeamName, $_description, 2, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );
	
	
	//$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_sportGameOpponentGroupID, $_sportGameOpponentGroupTokenID, $_opponentParticipantTeamGroupID, $_opponentParticipantTeamGroupTokenID, $_opponentParticipantTeamID, $_opponentParticipantTeamTokenID, $_matchFixtureName, $_participantTeamName, $_sportGameGroupName, $_sportGameOpponentGroupName, $_opponentParticipantTeamName, $_description, $_contestantTeamMode, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );
	
	//$_groupParticipantTeam = TournamentGroupParticipantTeamTable::makeObject ( 29, 'c986906dc7d6ba3b7ac8458e24f8809176dafe11'  );
	//echo $_groupParticipantTeam->id;
	
	//$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, 1, '1823478c831a03403d922373feb04f578e3ce4c2', 1, 'a90d585ad1da0c0dd714912740ef5e51745c8d4e', 1, '34bcd0dddecf6761dc6460017f3abdf699cadcda', 1, '1a2177208e4f072db768f63d20f327ddab8ae56b', 4, 'b03a7b37a6054c598fc66c7f7fc0340977bb64f3', 1, '1a2177208e4f072db768f63d20f327ddab8ae56b', 1, 'a2f68785f56d6fc270c25f4950b7f4861dbe9073', 2, '2f6e72bdaf446d6dc8cd78db58dc76d7b2f860c4', 'Heat One - Basketball  - Men (Basketball)', 'Addis ababa Science and Technology University (AASTU)', 'Group One - Basketball (Men) -  - Basketball', 'Group One - Basketball (Men) -  - Basketball', 'Adigrat University (ADU) - Ethiopia', $_description, 1, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );
	
	//$_candidateParticipantTeamss = TournamentMatchTable::selectCandidateMatchFixtureGroups ( 1, '1823478c831a03403d922373feb04f578e3ce4c2', 2, $_keyword, 0, 10 ) ;
	//$_candidateParticipantTeamss = TournamentMatchParticipantTeamTable::makeAllCandidateSelection ( 1, '1823478c831a03403d922373feb04f578e3ce4c2', $_matchFixtureID, 2, $_sportGameID) ;
	//echo count($_candidateParticipantTeamss);
	
	//$_tournamentSportGameGroups =  TournamentMatchTable::selectCandidateTournamentFixtureSportGameGroups ( 4, '346b5501f220f346040c45a17e40244d64e2b415', $_sportGameID, $_genderCategory, $_keyword, 0, 100); 
	
	//$_tournamentSportGameGroups = TournamentSportGameGroupTable::selectCandidateTournamentSportGameGroups ( $_tournamentGroupID, $_sportGameID, $_genderCategory, $_approvalStatus, $_status, $_keyword, $_exclusion, 0, 100); 
	
	//$_tournamentSportGameGroupsss = TournamentGroupParticipantTeamTable::makeCandidateParticipantTeamSelection ($_sportGameGroupID, $_sportGameID, $_genderCategoryID, $_qual, $_qual, $_keyword, $_exclusion, 0, 100); 
	//$_tournamentSportGameGroupsss = TournamentMatchParticipantTeamTable::selectCandidates ( 4, '346b5501f220f346040c45a17e40244d64e2b415', $_matchFixtureID, $_matchFixtureGroupID, $_sportGameID ); 
	
	//tournament_match_id=4&tournament_match_token_id=346b5501f220f346040c45a17e40244d64e2b415&match_fixture_id=6&match_fixture_token_id=c08c53ab0143bccb3b3f268413901ce3cf90ff8a&tournament_sport_game_group_id=14&gender_category_id=1
	
	//$_candidateParticipantTeams = TournamentMatchTable::selectCandidateParticipantTeams (  4, '346b5501f220f346040c45a17e40244d64e2b415', $_matchFixtureID, 14, $_sportGameID, 1, $_keyword, 0, 20 );
	
	//echo count($_tournamentSportGameGroupsss);
	
	/*foreach($_tournamentSportGameGroupsss as $_tournamentSportGameGroup) {
		
			$_tournamentSportGameGroup->makeConfirmation();
	}*/
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
		var data = 'tournament_match_id='+document.getElementById('tournament_match_id').value+'&tournament_match_token_id='+document.getElementById('tournament_match_token_id').value+'&match_fixture_id='+document.getElementById('match_fixture_id').value+'&match_fixture_token_id='+document.getElementById('match_fixture_token_id').value+'&tournament_sport_game_group_id='+document.getElementById('tournament_sport_game_group_opponent_id').value+'&sport_game_group_team_id='+document.getElementById('opponent_sport_game_group_team_id').value+'&gender_category_id='+document.getElementById('gender_category_id').value;
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
			 
			if(document.getElementById("tournament_contestant_team_mode").value == 2 ) {
				$("#createTournamentMatchParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
				$("#cancelTournamentMatchParticipantTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			}
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
