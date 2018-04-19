<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_SPORT_GAME)):
	
	//$_candidateSportGames = TeamTable::processCandidateSportGameParticipation ( 1, 1, 4, sha1(md5('6e60f180ecab6683ae00640e0d847c1607cb050d')), $_gameTypeID, 0, 30 );
	//$_candidateSportGames = TeamGameParticipationTable::processSelection ( $_orgID, 1, 4, sha1(md5('6e60f180ecab6683ae00640e0d847c1607cb050d')), $_gameTypeID, $_keyword, $_exclusion, 0, 30  ) ;;
	//echo count($_teamGameParticipations).'==';
	
	//first_name=Getachew&middle_name=Berhe&last_name=Hdush&member_gender=1&date_of_birth=&description=ssfdgsfdgsdfg&member_sport_game_name=Mekelle University (MU-ET)&member_sport_game_id=1&member_sport_game_token_id=f94a6e7c7cd99f059dd6298ec64d966bf42ec991&member_tournament_id=1&member_team_id=4&member_team_token_id=6e60f180ecab6683ae00640e0d847c1607cb050d&team_member_role=2&team_member_number=&member_status=1&remark=sdf gsdfg sdfg
	
	//$_flag =  TeamMemberParticipantTable::processNew ( 1, '94f12f125643718e20d329aef595bc3e', 4, '6e60f180ecab6683ae00640e0d847c1607cb050d', 1, 'a87eb71dcf9bc50b40650e313e122d936a4818b9', 'Robel', 'Hailu', 'Kahsay', '5000M (Athletics)', 2, 1, $_dateOfBirth, $_memberNumber, $_memberStatus, $_remark, 'asdfasdfaf', $_userID, $_userTokenID  );  
	
	//$_flag =  TeamMemberParticipantTable::processNew ( 1, '94f12f125643718e20d329aef595bc3e', 4, '6e60f180ecab6683ae00640e0d847c1607cb050d', 1, 'f94a6e7c7cd99f059dd6298ec64d966bf42ec991', 'Robel', 'Hailu', 'Kahsay', '5000M (Athletics)', 2, 1, $_dateOfBirth, $_memberNumber, $_memberStatus, 'sdfgsdfg sdfgsfgsfgsfg', 'asdfa asdfasd adaadfafa adaf', $_userID, $_userTokenID  ); 
	
	//$_flag =  TeamMemberParticipantTable::processNew ( 1, '94f12f125643718e20d329aef595bc3e', 14, '6e60f180ecab6683ae00640e0d847c1607cb050d', 35, '69a7d725a1d4bb6945539d08e7fabaa3d78a8ab1', 'Getachew', 'Bezabih', 'Nigusse', '5000M (Athletics)', 2, 1, $_dateOfBirth, $_memberNumber, $_memberStatus, $_remark, 'asdfasdf asdfa', $_userID, $_userTokenID  );  
 
	///echo count($_candidateParticipantTeams).' == ';
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('view', array( '_sportGame' => $_sportGame, '_candidateParticipantTeams' => $_candidateParticipantTeams, '_countCandidateParticipantTeams' => $_countCandidateParticipantTeams )) ?> 
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
