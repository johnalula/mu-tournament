<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_SPORT_GAME)): 
	
	//echo count($_candidateWomenParticipants).' -- ';
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('view', array( '_tournamentSportGame' => $_tournamentSportGame, '_candidateParticipantTeams' => $_candidateParticipantTeams, '_countCandidateParticipantTeams' => $_countCandidateParticipantTeams, '_candidateMenParticipants' => $_candidateMenParticipants, '_countCandidateMenParticipants' => $_countCandidateMenParticipants, '_candidateWomenParticipants' => $_candidateWomenParticipants,'_countCandidateWomenParticipants' => $_countCandidateWomenParticipants )) ?> 
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
	$('#createTeamSportGameParticipation').click(function(){
		var url = '<?php echo url_for('team/createTeamGamePartcipation')?>'; 
		var formName = 'createSportGameParticipationForm';
		var data = $("form#createSportGameParticipationForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});
	$('#createTeamMember').click(function(){
		var url = '<?php echo url_for('team/createTeamMember')?>'; 
		var formName = 'createTeamMemberForm';
		var data = $("form#createTeamMemberForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});
	$('.selectCandidateSportGameType').click(function() {   
		var url = '<?php echo url_for('team/candidateSportGameTypes')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-game-categorys';   
		var data = '';
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	$('.selectCandidateSportGame').click(function() {   
		var url = '<?php echo url_for('team/candidateSportGames')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-sport-game';   
		var data = 'sport_game_category='+document.getElementById('sport_game_type_id').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	$('.selectCandidateMemberSportGame').click(function() {   
		var url = '<?php echo url_for('team/candidateMemberSportGames')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-sport-game-participation';   
		var data = 'tournament_id='+document.getElementById('member_tournament_id').value+'&member_team_id='+document.getElementById('member_team_id').value+'&member_team_token_id='+document.getElementById('member_team_token_id').value+'&gender_category_id='+document.getElementById('member_gender').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	//*********************************/
	
	$("#candidateSportGameTypeModal").submit(function(e) { 
		if($("input[name=selectSportGameTypeModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("sport_game_type_id").value = listArr[0];
			document.getElementById("sport_game_type_token_id").value = listArr[1];  
			document.getElementById("sport_game_type_name").value = listArr[2]+' ('+listArr[3]+')';    
			$("#createTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('.selectCandidateSportGame').removeAttr("disabled");
			$('#candidateSportGameTypeModal').modal('hide');
		return e.preventDefault();
	});
	$("#candidateSportGameModal").submit(function(e) { 
		if($("input[name=selectSportGameModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("sport_game_id").value = listArr[0];
			document.getElementById("sport_game_token_id").value = listArr[1];  
			document.getElementById("sport_game_name").value = listArr[2]+' ('+listArr[3]+')';    
			
			$("#createTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateSportGameModal').modal('hide');
		return e.preventDefault();
	});
	$("#candidateMemberSportGameModal").submit(function(e) { 
		if($("input[name=selectCandidateMemberSportGame]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("member_sport_game_id").value = listArr[0];
			document.getElementById("member_sport_game_token_id").value = listArr[1];  
			document.getElementById("member_sport_game_name").value = listArr[2]+' ('+listArr[3]+')';    
			
			//$("#createTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		//	$("#cancelTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateMemberSportGameModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
	 
 
</script>
