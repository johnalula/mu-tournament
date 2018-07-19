
<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TOURNAMENT_MATCH)): 
	
	//$_teams = TeamTable::processAll ( $_orgID, $_orgTokenID, $_tournamentID, true, $_keyword); participant_team_id=4&participant_team_token_id=d0906d18ede8bb050493862e38e3ca4dfde4b1c4
	//echo count($_teams).' == ';
	
	//$_participantStanding = TournamentParticipantTeamMedalStandingTable::makeObject ( 1, 4, 'd0906d18ede8bb050493862e38e3ca4dfde4b1c4' );
	
	//echo $_participantStanding->participantTeamName.' == ';
	//$_participantStanding->makeMatchMedalAward (2, 0, 3);
	
	
	//$_team = TeamTable::makeCandidateObject ( $_teamID, $_tokenID );
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('edit_medal_award', array( '_participantTeams' => $_participantTeams )) ?> 
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
	//*********************************/
	
	$("#candidateParentMatchFixtureModal").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("parent_match_fixture_id").value = listArr[0];
			document.getElementById("parent_match_fixture_token_id").value = listArr[1];  
			document.getElementById("parent_match_fixture_name").value = listArr[2]+' ('+listArr[3]+')';    
			
			$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateParentMatchFixtureModal').modal('hide');
		return e.preventDefault();
	});
	$("#candidateSportGameTournamentGroupModal").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("tournament_sport_game_group_id").value = listArr[0];
			document.getElementById("tournament_sport_game_group_token_id").value = listArr[1];  
			document.getElementById("sport_game_id").value = listArr[2];  
			document.getElementById("sport_game_token_id").value = listArr[3]; 
			document.getElementById("gender_category_id").value = listArr[9];  
			document.getElementById("contestant_team_mode").value = listArr[11];  
			document.getElementById("contestant_mode").value = listArr[12];  
			document.getElementById("tournament_sport_game_group_name").value = listArr[4]+' - '+listArr[5]+' ('+listArr[10]+') - '+listArr[8]+' - '+listArr[6];  
			
			$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$(".selectCandidateRoundType").removeAttr("disabled") ;
			$('#candidateSportGameTournamentGroupModal').modal('hide');
		return e.preventDefault();
	});
	 
 
</script>
