<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TOURNAMENT_MATCH)):
	 
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
	
	function updateTournamentMatchFixtureParticipantResultFunction (matchFixtureParticipantID) {
		var url = '<?php echo url_for('tournament_fixture/updateTournamentMatchFixtureGroupParticipantResult')?>'; 
		var matchFixtureParticipantTokenID = $('#updateTournamentMatchParticipantMedalAward-'+matchFixtureParticipantID).attr('rel'); 
		
		var datas = 'fixture_group_participant_id='+matchFixtureParticipantID+'&fixture_group_participant_token_id='+matchFixtureParticipantTokenID+'&match_fixture_group_id='+document.getElementById('match_fixture_group_id').value+'&match_fixture_group_token_id='+document.getElementById('match_fixture_group_token_id').value+'&fixture_group_participant_rank_number='+document.getElementById('matchFixtureGroupParticipantRankNumber_'+matchFixtureParticipantID).value+'&fixture_group_participant_position_number='+document.getElementById('matchFixtureGroupParticipantPositionNumber_'+matchFixtureParticipantID).value+'&fixture_group_participant_number='+document.getElementById('matchFixtureGroupParticipantNumber_'+matchFixtureParticipantID).value+'&fixture_group_participant_time_result='+document.getElementById('matchFixtureGroupParticipantTimeResult_'+matchFixtureParticipantID).value+'&fixture_group_participant_qualification_status='+document.getElementById('matchFixtureGroupParticipantResultStatus_'+matchFixtureParticipantID).value+'&fixture_group_participant_medal_award='+document.getElementById('matchFixtureGroupParticipantMedalAward_'+matchFixtureParticipantID).value;
		processEntry(datas, url )
		//alert(datas);
		return true; 
	}
	 
	 
	//var datas = 'fixture_group_participant_id='+matchFixtureParticipantID+'&fixture_group_participant_token_id='+matchFixtureParticipantTokenID+'&gold_medal_award='+document.getElementById('participantTeamGoldMedalAward_'+matchFixtureParticipantID).value+'&silver_medal_award='+document.getElementById('matchFixtureGroupParticipantPositionNumber_'+matchFixtureParticipantID).value+'&bronze_medal_award='+document.getElementById('matchFixtureGroupParticipantParticipantNumber_'+matchFixtureParticipantID).value+'&gold_medal_award='+document.getElementById('matchFixtureGroupParticipantTimeResult_'+matchFixtureParticipantID).value+'&silver_medal_award='+document.getElementById('matchFixtureGroupParticipantResultStatus_'+matchFixtureParticipantID).value+'&bronze_medal_award='+document.getElementById('matchFixtureGroupParticipantMedalAward_'+matchFixtureParticipantID).value;
	 
 
</script>
