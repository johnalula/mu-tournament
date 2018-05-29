
<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TOURNAMENT_MATCH)): 
	
	//parent_match_fixture_name=&parent_match_fixture_id=&parent_match_fixture_token_id=&sport_game_type_id=1&tournament_match_id=1&tournament_match_token_id=fcc996646e7e664266cdce91a82f69c0211aef87&tournament_match_number=MTCH-001&tournament_match_round_mode=1&tournament_sport_game_group_name=Group One - 5000M (Women) - Running - Athletics&tournament_sport_game_group_id=2&tournament_sport_game_group_token_id=927b2b9fbbc5a6da68d82c646ffd661d32e00296&gender_category_id=2&contestant_team_mode=2&contestant_mode=4&sport_game_id=5&sport_game_token_id=a5b16fbdda8b5c083be1d62b23ce2380ffcf6213&number_of_heats_per_group=&event_type=1&tournament_match_round_mode=4&qualifying_status=4&description=sdf gsdfg sdfg sdfg sdfgsdfgsdfg
	
	//$_flag =  TournamentMatchFixtureTable::processNew ( $_orgID, $_orgTokenID, $_parentMatchID, $_parentMatchTokenID, 1, 'fcc996646e7e664266cdce91a82f69c0211aef87', 2, '927b2b9fbbc5a6da68d82c646ffd661d32e00296', 5, 'a5b16fbdda8b5c083be1d62b23ce2380ffcf6213', 'Group One - 5000M (Women) - Running - Athletics', 1, 2, 1, 2, 4, 'MTCH-001', 3, 1, 1, $_description, $_userID, $_userTokenID  );  
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('result', array( '_tournamentMatch' => $_tournamentMatch,'_tournamentFixtureGroups' => $_tournamentFixtureGroups, '_matchFixtures' => $_matchFixtures )) ?> 
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
	$('#createTournamentMatchFixture').click(function(){
		var url = '<?php echo url_for('match/createTournamentMatchFixture')?>'; 
		var formName = 'createTournamentMatchFixtureForm';
		var data = $("form#createTournamentMatchFixtureForm").serialize();
		var datas = generateValidData (formName);
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
