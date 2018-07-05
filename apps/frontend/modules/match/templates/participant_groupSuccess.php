
<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TOURNAMENT_MATCH)):
	
	//echo count($_tournamentSportGameOpponentGroups).' = ';
	//echo sha1(md5("fasuadmin18"));
	
	//197085e1173adc58335847f14dc45cea443248df 
	//echo count($_candidateMatchFixtures);
	
	//match_fixture=Heat One - Basketball  - Men (Basketball)&match_fixture_id=1&match_fixture_token_id=a90d585ad1da0c0dd714912740ef5e51745c8d4e&tournament_match_fixture_group_id=1&tournament_match_fixture_token_group_id=34bcd0dddecf6761dc6460017f3abdf699cadcda&tournament_match_id=1&tournament_match_token_id=1823478c831a03403d922373feb04f578e3ce4c2&tournament_match_game_category_id=2&sport_game_venue_name=Tigray Stadium ( City )&sport_game_group_type_id=&match_date=07/02/2018&match_time=8:00 AM&tournament_match_time_value=8:00&tournament_match_session=1&description=
	
	//$_flag =  TournamentMatchFixtureGroupTable::makeUpdate ( $_orgID, $_orgTokenID, 1, 'a90d585ad1da0c0dd714912740ef5e51745c8d4e', 1, '34bcd0dddecf6761dc6460017f3abdf699cadcda', 'Tigray Stadium ( City )', '07/02/2018', '8:00 AM', 1, $_userID, $_userTokenID );
	
	//$_matchFixtureGroupObj = TournamentMatchFixtureTable::makeCandidateObject ( 1, 'a90d585ad1da0c0dd714912740ef5e51745c8d4e');
	
	//echo $_matchFixtureGroupObj->token_id;
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('participant_group', array( '_tournamentMatch' => $_tournamentMatch,'_activeTournament' => $_activeTournament, '_tournamentFixtureGroups' => $_tournamentFixtureGroups, '_candidateTournamentMatchFixtureGroups' => $_candidateTournamentMatchFixtureGroups )) ?> 
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
	$('#createTournamentMatchParticipantGroup').click(function(){
		var url = '<?php echo url_for('match/updateTournamentMatchFixtureVenue')?>'; 
		var formName = 'createTournamentMatchParticipantGroupForm';
		var data = $("form#createTournamentMatchParticipantGroupForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
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
		var url = '<?php echo url_for('match/candidateTournamentMatchFixtureGroups')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-match-fixtures';   
		var data = 'tournament_match_id='+document.getElementById('tournament_match_id').value+'&tournament_match_token_id='+document.getElementById('tournament_match_token_id').value+'&tournament_match_game_category_id='+document.getElementById('tournament_match_game_category_id').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	//*********************************/
	 
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
			
			$(".selectCandidateTournamentSportGameGroup").removeAttr("disabled") ;
			
			$("#createTournamentMatchParticipantGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentMatchParticipantGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn"); 
			$('#candidateTournamentMatchFixtureModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
 
</script>
