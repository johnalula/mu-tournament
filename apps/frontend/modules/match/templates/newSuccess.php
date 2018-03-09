<?php
	//ournament_name=asdfasdf&tournament_alias=asdfasdf&season=1&status=1&start_date=02/23/2018&end_date=02/28/2018&description=asdfasdfasdfad asdfasdf
	//processSave ( $_orgID, $_orgTokenID,  $_tournamentName, $_tournamentAlias, $_tournamentSeason, $_startDate, $_effectiveDate, $_endDate, $_description )
	
	//$_flag =  TournamentTable::processNew ( $_orgID, $_orgTokenID,  'asdfasdf', 'asdfasdf', '2018', '02/23/2018', $_effectiveDate, '02/28/2018', 1, $_description, $_userID, $_userTokenID  ); 
	//$_flag =  TournamentTable::processSave ( $_orgID, $_orgTokenID,  'asdfasdf', 'asdfasdf', '2018', '02/23/2018', $_effectiveDate, '02/28/2018', $_description ); 
	//$_flag =  TeamTable::processNew ( $_orgID, $_orgTokenID,  'Nirobi University', 'NU', 44, 'Nirobi', $_description, $_userID, $_userTokenID  );  
	//tournament_name=African Universities Sport Festival (AUSF ) - 2018&tournament_token_id=67a74306b06d0c01624fe0d0249a570f4d093747&tournament_id=1&sport_game_name=Football (Football)&sport_game_id=17&sport_game_token_id=0077401f137c4cfaa7bc58b3288df045a4237cb2&match_venue=sasasdf&event_type=2&gender_category=1&player_mode=2&match_round=0&match_status=2&match_date=03/05/2018&description=
	//$_flag =  MatchFixtureTable::processNew ( $_orgID, $_orgTokenID,  $_tournamentID, $_tournamentTokenID, $_sportGameID, $_sportGameTokenID, $_matchSportGameName, $_roundTypeID, $_genderCategoryID, $_eventType, $_playerMode, $_matchVenue, $_matchDate, $_status, $_description, $_userID, $_userTokenID  );  
	
	
	//$_user = UserTable::processLogin ( 'admin', 'admin' );
	//echo $_user->password.' == ';
	
?>
<form class="form-horizontal" role="form" action="<?php echo url_for('match/createTournamentMatch') ?>" id="createTournamentMatchForm" name="createTournamentMatchForm" method="post"> 
<div class="ui-content-page">
	<?php include_partial('new', array( '_activeTournament' => $_activeTournament, '_candidateRounds' => $_candidateRounds, '_productClasses' => $_productClasses )) ?> 
</div>		  
</form>
<!--- ************************  -->


<!-- Modal -->
<div class="modal fade" id="candidateSportGameCategoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
								<?php include_partial('game_category/candidate_game_category', array( '_candidateGameCategorys' => $_candidateGameCategorys )) ?> 
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
	/*$('#createTournamentMatch').click(function(){
		var url = '<?php echo url_for('match/reateTournamentMatch')?>'; 
		var formName = 'createTournamentMatchForm';
		var data = $("form#createTournamentMatchForm").serialize();
		var datas = generateValidData (formName);
		//processEntry(datas, url )
		alert(datas);
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
	}); */
	
	//*********************************/
	
	$("#candidateSportGameCategoryModal").submit(function(e) { 
		if($("input[name=selectSportGameCategoryModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("sport_game_category_id").value = listArr[0];
			document.getElementById("sport_game_category_token_id").value = listArr[1];  
			document.getElementById("sport_game_category_name").value = listArr[2]+' ('+listArr[3]+')';    
			$("#createTournamentMatch").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentMatch").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$("#createTournamentMatchFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentMatchFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateSportGameCategoryModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
 
</script>
