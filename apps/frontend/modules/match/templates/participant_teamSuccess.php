<?php
	//math_game_type_name=Athletics (Athletics ) - Athletics&math_game_type_id=1&math_game_type_token_id=67a74306b06d0c01624fe0d0249a570f4d093747&tournament_id=1&tournament_token_id=67a74306b06d0c01624fe0d0249a570f4d093747&sport_game_name=5000M (Athletics)&sport_game_id=8&sport_game_token_id=0fda36569b6459978333d67c82e4ccad83950d3f&match_venue=Mekelle Tigray Stadium&event_type=1&gender_category=1&player_mode=3&match_round=13&match_status=1&match_date=03/07/2018&match_group=1&description=sdfa sdfasdf asdf asdf as;
	
	//$_flag =  MatchFixtureTable::processNew ( $_orgID, $_orgTokenID, 1, '67a74306b06d0c01624fe0d0249a570f4d093747', 8, '0fda36569b6459978333d67c82e4ccad83950d3f', '5000M (Athletics)', $_matchRoundID, 1, 1, 3, 'Mekelle Tigray Stadium', 1, '03/07/2018', 1, 'dfa dfasdfa sdfasdf', $_userID, $_userTokenID  );  
?>
<div class="ui-content-page">
	<?php include_partial('participant_team', array( '_tournamentMatch' => $_tournamentMatch,'_activeTournament' => $_activeTournament, '_candidateRounds' => $_candidateRounds, '_matchFixtures' => $_matchFixtures )) ?> 
</div>		  
<!--- ************************  -->


<!-- Modal -->
<div class="modal fade" id="candidateSportGameModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-content-container">
				<div class="modal-header modal-header-info">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">
						<?php echo __('Candidate Categories') ?>
					</h4>
				</div>
				<div class="modal-content-body">
					<div class="ui-toolbar-menu-box">
						<div class="ui-toolbar-menu">
							<div id="" class="navbar-collapse ui-toolbar">
								<div class="">
									<?php include_partial('partials/insert_toolbar', array('_object' => $_task)) ?> 
								</div>
								<div class="">
									<?php include_partial('partials/modal_filter', array( )) ?> 
								</div><!-- end of ui-filter-list -->
							</div><!-- end of ui-filter-list -->
						</div>
					</div>
					<div class="modal-body">
						<div class="ui-panel-content-box ">
							<div class="ui-panel-grid-list">
								<?php include_partial('sport_games/candidate_sport_game', array( '_candidateSportGames' => $_candidateSportGames )) ?> 
							</div>
						</div>  
					</div> 	
				</div>
				
				<div class="modal-footer-container">
					<div class="ui-panel-footer-default-box-top-border">
						<div class="modal-footer">
							&nbsp;
						</div>  
					</div><!-- ui-panel-footer-default -->			
				</div><!-- /.modal-content -->
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
	$('#createTournamentMatchFixture').click(function(){
		var url = '<?php echo url_for('match/createTournamentMatchFixture')?>'; 
		var formName = 'createTournamentMatchFixtureForm';
		var data = $("form#createTournamentMatchFixtureForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	}); 
	$('#createTournamentMatchFooter').click(function(){
		var url = '<?php echo url_for('team/createTeam')?>'; 
		var formName = 'createTournamentMatchForm';
		var data = $("form#createTournamentMatchForm").serialize();
		var datas = generateValidData (formName);
		//processEntry(datas, url )
		alert(datas);
		return true; 
	}); 
	
	$('.selectCandidateSportGame').click(function() {   
		var url = '<?php echo url_for('match/candidateSportGames')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-sport-games';   
		var data = 'sport_game_category='+document.getElementById('math_game_type_id').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	
	
	//*********************************/
	
	$("#candidateSportGameModal").submit(function(e) { 
		if($("input[name=selectSportGameModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("sport_game_id").value = listArr[0];
			document.getElementById("sport_game_token_id").value = listArr[1];  
			document.getElementById("sport_game_name").value = listArr[2]+' ('+listArr[3]+')';    
			
			$("#createTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentMatchFixture").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$("#createTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentMatchFixtureFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateSportGameModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
 
</script>
