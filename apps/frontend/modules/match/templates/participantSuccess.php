
<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TOURNAMENT_MATCH)):
	
	//echo count($_candidateParticipantTeams);
	//$_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processCandidateParticipantTeams ( 1, "881275b4bd93f934188c8483e17ad1357f5dd682", 1, $_sportGameID, $_exclusion, $_keyword, 0, 50 ) ;
	//$_candidateParticipantMembers = TournamentMatchTeamMemberParticipantTable::processCandidateSelection ( 1, "881275b4bd93f934188c8483e17ad1357f5dd682", $_matchFixtureGroupID, $_sportGameID, $_teamID, $_keyword);
	
	//11
	//24c1001f8768284f8b0a52656d9115497ea55c8e
	
	//15
	//ccc47a894df37044095e687bd63f2c51cb5ceb3c
	
	//$_tournamentMatchParticipant = TournamentMatchParticipantTeamTable::makeObject ( 9, 'c36a61412e886946efb96d8b682966074059c384' );
	//ccc47a894df37044095e687bd63f2c51cb5ceb3c
	//echo sha1(md5("ccc47a894df37044095e687bd63f2c51cb5ceb3c")); 992f3a318cf1b41c1c933fd74ffd805b4469032a
	//$_participantTeamMembers = TeamMemberParticipantRoleTable::makeCandidateParticipantRoleSelection ( 15, "ccc47a894df37044095e687bd63f2c51cb5ceb3c", $_teamID);
	//echo $_tournamentMatchParticipant->id;
	//echo count($_candidateMemeberParticipants);
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('participant', array( '_tournamentMatch' => $_tournamentMatch,'_candidateMemeberParticipants' => $_candidateMemeberParticipants, '_matchParticipantTeams' => $_matchParticipantTeams, '_matchFixtures' => $_matchFixtures )) ?> 
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
											<?php include_partial('candidate_participant_team', array('_candidateParticipantTeams' => $_candidateMatchParticipantTeams)) ?> 
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
	$('#createTournamentMatchParticipant').click(function(){
		var url = '<?php echo url_for('match/createTournamentMatchParticipantTeamMember')?>'; 
		var formName = 'createTournamentMatchFixtureGroupParticipantForm';
		var data = $("form#createTournamentMatchFixtureGroupParticipantForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});  
	  
	
	//*********************************/
	
	$('#createBatchTournamentMatchFixtureTeamMemberParticipant').click(function(){
		var url = '<?php echo url_for('match/createBatchMatchFixtureGroupParticipantTeamMembers')?>'; 
		var formName = 'createTournamentMatchFixtureGroupParticipantForm';
		var data = $("form#createTournamentMatchFixtureGroupParticipantForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
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
				$("#createBatchTournamentMatchFixtureTeamMemberParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			} else {
				$(".selectCandidateMatchFixtureParticipantTeam").removeAttr("disabled") ;
			}
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
			document.getElementById("participant_role_id").value = listArr[0];
			document.getElementById("participant_role_token_id").value = listArr[1];  
			document.getElementById("participant_member_id").value = listArr[2];
			document.getElementById("participant_member_token_id").value = listArr[3];  
			document.getElementById("participant_name").value = listArr[4]+' ( '+listArr[6]+' )  ';    
			
			$("#createTournamentMatchParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentMatchParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateMatchParticipantTeamMemberModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
 
</script>
