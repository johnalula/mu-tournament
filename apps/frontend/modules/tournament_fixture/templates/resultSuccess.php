<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TOURNAMENT_MATCH)):
	
	
	//match_fixture_participant_id=15&match_fixture_participant_token_id=0b8ca977dadd6206136b1e6b5b58f6e501dcc843&match_fixture_group_id=4&match_fixture_group_token_id=8154352b63816f94f26ee8bd2a30260c08ddd74e&match_fixture_id=4&match_fixture_token_id=456e5766400c40899a9802329be10f8e1a54ccd0&fixture_group_participant_rank_number=&fixture_group_participant_position_number=&fixture_group_participant_number=&fixture_group_participant_time_result=1:58 &fixture_group_participant_qualification_status=2&fixture_group_participant_status=8&member_participant_id=3&member_participant_token_id=3489b12c132650fb0266cc9b76cb56365cdbeb0d&participant_team_id=1&participant_team_token_id=eed0457df32e4186c7c8268bd1077e5d48fb7c0e
	
	//$_flag =  TournamentMatchFixtureTable::processTournamentMatchFixtureResult ( $_orgID, $_orgTokenID, 4, "456e5766400c40899a9802329be10f8e1a54ccd0", 4, "8154352b63816f94f26ee8bd2a30260c08ddd74e", 15, "0b8ca977dadd6206136b1e6b5b58f6e501dcc843", $_participantTeamID, $_participantTeamTokenID, $_memberParticipantID, $_memberParticipantTokenID, $_participantRankNumber, $_participantPositionNumber, $_participantBIBNumber, "1:58", 2, 8, $_userID, $_userTokenID );  
	
	//$_fixtureParticipant = TournamentMatchTeamMemberParticipantTable::makeCandidateObject ( 15, "0b8ca977dadd6206136b1e6b5b58f6e501dcc843" ); 
	//$_fixtureParticipant = TournamentMatchFixtureTable::processObject (null, null, 4, "456e5766400c40899a9802329be10f8e1a54ccd0" ); 
	//echo $_fixtureParticipant->id;
	
	//echo $_tournamentMatchFixtureGroup->selectCandidateParticipantTeam(0);
	
	//match_fixture_group_id=13&match_fixture_group_token_id=86a1235bad84e5f0b1a2a640e042fcd54d830672&fixture_participant_team_id=1&fixture_participant_team_token_id=c02614d670570553718e3c12b1086fde93760fe2&fixture_participant_opponent_team_id=2&fixture_participant_opponent_team_token_id=d550d2593ffb687b2cb75e7045ed0484debaebd1&fixture_participant_team_result=4&fixture_participant_opponent_team_result=2
	
	//$_fixtureParticipantTeam = TournamentMatchParticipantTeamTable::makeObject ( 2, 'd550d2593ffb687b2cb75e7045ed0484debaebd1');
	//echo $_fixtureParticipantTeam->matchResultScore;
	
	//$_flag =  TournamentMatchFixtureGroupTable::makeMatchFixtureGroupResult ($_orgID, $_orgTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, 1, 'c02614d670570553718e3c12b1086fde93760fe2', 2, 'd550d2593ffb687b2cb75e7045ed0484debaebd1', 4, 2, $_userID, $_userTokenID );  
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('result', array( '_tournamentMatchFixtureGroup' => $_tournamentMatchFixtureGroup, '_candidateMatchFixtureParticipants' => $_candidateMatchFixtureParticipants )) ?> 
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
	
	$('#updateTournamentMatchFixtureResult').click(function(){
		var url = '<?php echo url_for('tournament_fixture/updateMatchFixtureGroupParticipantResult')?>'; 
		var matchFixtureGroupID = $(this).attr('rel'); 
		var matchFixtureGroupTokenID = $(this).attr('data'); 
		var matchFixtureParticipantTeamID = $('#matchFixtureParticipantTeamID_'+matchFixtureGroupID).attr('rel'); 
		var matchFixtureParticipantTeamTokenID = $('#matchFixtureParticipantTeamID_'+matchFixtureGroupID).val(); 
		var matchFixtureParticipantOpponentTeamID = $('#matchFixtureParticipantOpponentTeamID_'+matchFixtureGroupID).attr('rel'); 
		var matchFixtureParticipantOpponentTeamTokenID = $('#matchFixtureParticipantOpponentTeamID_'+matchFixtureGroupID).val(); 
		var matchFixtureParticipantTeamResult = $('#matchFixtureParticipantTeamResult_'+matchFixtureGroupID).val(); 
		var matchFixtureParticipantOpponentTeamResult = $('#matchFixtureParticipantOpponentTeamResult_'+matchFixtureGroupID).val(); 
		 
		
		var datas = 'match_fixture_group_id='+matchFixtureGroupID+'&match_fixture_group_token_id='+matchFixtureGroupTokenID+'&fixture_participant_team_id='+matchFixtureParticipantTeamID+'&fixture_participant_team_token_id='+matchFixtureParticipantTeamTokenID+'&fixture_participant_opponent_team_id='+matchFixtureParticipantOpponentTeamID+'&fixture_participant_opponent_team_token_id='+matchFixtureParticipantOpponentTeamTokenID+'&fixture_participant_team_result='+matchFixtureParticipantTeamResult+'&fixture_participant_opponent_team_result='+matchFixtureParticipantOpponentTeamResult;
		processEntry(datas, url );
		
		//alert(datas);
		return true; 
	});  
	
	function updateTournamentMatchFixtureParticipantResult (matchFixtureParticipantID) {
		var url = '<?php echo url_for('tournament_fixture/updateTournamentMatchFixtureGroupParticipantResult')?>'; 
		var matchFixtureParticipantTokenID = $('#tournamentMatchFixtureParticipantResult-'+matchFixtureParticipantID).attr('rel'); 
		var participantTeamTokenID = $('#matchFixtureGroupParticipantTeam_'+matchFixtureParticipantID).attr('rel'); 
		var memberParticipantTokenID = $('#matchFixtureGroupMemberParticipant_'+matchFixtureParticipantID).attr('rel'); 
		
		var datas = 'match_fixture_participant_id='+matchFixtureParticipantID+'&match_fixture_participant_token_id='+matchFixtureParticipantTokenID+'&match_fixture_group_id='+document.getElementById('tournament_match_fixture_group_id').value+'&match_fixture_group_token_id='+document.getElementById('tournament_match_fixture_group_token_id').value+'&match_fixture_id='+document.getElementById('tournament_match_fixture_id').value+'&match_fixture_token_id='+document.getElementById('tournament_match_fixture_token_id').value+'&fixture_group_participant_rank_number='+document.getElementById('matchFixtureGroupParticipantRankNumber_'+matchFixtureParticipantID).value+'&fixture_group_participant_position_number='+document.getElementById('matchFixtureGroupParticipantPositionNumber_'+matchFixtureParticipantID).value+'&fixture_group_participant_number='+document.getElementById('matchFixtureGroupParticipantNumber_'+matchFixtureParticipantID).value+'&fixture_group_participant_time_result='+document.getElementById('matchFixtureGroupParticipantTimeResult_'+matchFixtureParticipantID).value+'&fixture_group_participant_qualification_status='+document.getElementById('matchFixtureGroupParticipantResultStatus_'+matchFixtureParticipantID).value+'&fixture_group_participant_status='+document.getElementById('matchFixtureGroupParticipantStatus_'+matchFixtureParticipantID).value+'&member_participant_id='+document.getElementById('matchFixtureGroupMemberParticipant_'+matchFixtureParticipantID).value+'&member_participant_token_id='+memberParticipantTokenID+'&participant_team_id='+document.getElementById('matchFixtureGroupParticipantTeam_'+matchFixtureParticipantID).value+'&participant_team_token_id='+participantTeamTokenID;
		processEntry(datas, url )
		//alert(datas);
		return true; 
	}
	 
	 
	 function updateTournamentMatchMedalAwardFunction (participantTeamID) {
		var url = '<?php echo url_for('tournament_award/updateTournamentMedalAward')?>'; 
		var participantTeamTokenID = $('#updateTournamentMatchMedalAward-'+participantTeamID).attr('rel'); 
		var datas = 'participant_team_id='+participantTeamID+'&participant_team_token_id='+participantTeamTokenID+'&gold_medal_award='+document.getElementById('participantTeamGoldMedalAward_'+participantTeamID).value+'&silver_medal_award='+document.getElementById('participantTeamSilverMedalAward_'+participantTeamID).value+'&bronze_medal_award='+document.getElementById('participantTeamBronzMedalAward_'+participantTeamID).value;
		processEntry(datas, url )
		//alert(datas);
		return true; 
	}
	
	//var datas = 'fixture_group_participant_id='+matchFixtureParticipantID+'&fixture_group_participant_token_id='+matchFixtureParticipantTokenID+'&match_fixture_group_id='+document.getElementById('match_fixture_group_id').value+'&match_fixture_group_token_id='+document.getElementById('match_fixture_group_token_id').value+'&fixture_group_participant_rank_number='+document.getElementById('matchFixtureGroupParticipantRankNumber_'+matchFixtureParticipantID).value+'&fixture_group_participant_position_number='+document.getElementById('matchFixtureGroupParticipantPositionNumber_'+matchFixtureParticipantID).value+'&fixture_group_participant_number='+document.getElementById('matchFixtureGroupParticipantNumber_'+matchFixtureParticipantID).value+'&fixture_group_participant_time_result='+document.getElementById('matchFixtureGroupParticipantTimeResult_'+matchFixtureParticipantID).value+'&fixture_group_participant_qualification_status='+document.getElementById('matchFixtureGroupParticipantResultStatus_'+matchFixtureParticipantID).value+'&fixture_group_participant_medal_award='+document.getElementById('matchFixtureGroupParticipantMedalAward_'+matchFixtureParticipantID).value;
	
	
	//var datas = 'fixture_group_participant_id='+matchFixtureParticipantID+'&fixture_group_participant_token_id='+matchFixtureParticipantTokenID+'&gold_medal_award='+document.getElementById('participantTeamGoldMedalAward_'+matchFixtureParticipantID).value+'&silver_medal_award='+document.getElementById('matchFixtureGroupParticipantPositionNumber_'+matchFixtureParticipantID).value+'&bronze_medal_award='+document.getElementById('matchFixtureGroupParticipantParticipantNumber_'+matchFixtureParticipantID).value+'&gold_medal_award='+document.getElementById('matchFixtureGroupParticipantTimeResult_'+matchFixtureParticipantID).value+'&silver_medal_award='+document.getElementById('matchFixtureGroupParticipantResultStatus_'+matchFixtureParticipantID).value+'&bronze_medal_award='+document.getElementById('matchFixtureGroupParticipantMedalAward_'+matchFixtureParticipantID).value;
	 
 
</script>
