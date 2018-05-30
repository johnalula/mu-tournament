
<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TOURNAMENT_MATCH)):  
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('fixture', array( '_candidateMatchFixtures' => $_candidateMatchFixtures )) ?> 
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
	$('#generateTournamentMedalAwardStanding').click(function(){
		var url = '<?php echo url_for('tournament_match/generateTournamentMedalAwardStanding')?>'; 
		//var formName = 'createTournamentMatchFixtureForm';
		//var data = $("form#createTournamentMatchFixtureForm").serialize();
		var datas = '';
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});  
	
	//*********************************/
	
	$('.selectCandidateSportGameTournamentGroup').click(function() {   
		var url = '<?php echo url_for('match/candidateSportGameGroup')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-tournament-groups';   
		var data = 'tournament_match_id='+document.getElementById('tournament_match_id').value+'&tournament_match_token_id='+document.getElementById('tournament_match_token_id').value+'&sport_game_type_id='+document.getElementById('sport_game_type_id').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	});  
	
	
	function updateTournamentMatchMedalAwardFunction (participantTeamID) {
		var url = '<?php echo url_for('tournament_award/updateTournamentMedalAward')?>'; 
		var participantTeamTokenID = $('#updateTournamentMatchMedalAward-'+participantTeamID).attr('rel'); 
		var datas = 'participant_team_id='+participantTeamID+'&participant_team_token_id='+participantTeamTokenID+'&gold_medal_award='+document.getElementById('participantTeamGoldMedalAward_'+participantTeamID).value+'&silver_medal_award='+document.getElementById('participantTeamSilverMedalAward_'+participantTeamID).value+'&bronze_medal_award='+document.getElementById('participantTeamBronzMedalAward_'+participantTeamID).value;
		processEntry(datas, url )
		//alert(datas);
		return true; 
	}
	 
	 
 
</script>
