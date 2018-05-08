<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_GROUP)):
	
	//member_team_name=Mekelle University (MU-ET)&group_member_team_id=1&group_member_team_token_id=a21ee120af7cc330164bada75865ba5cbaacd6e8&member_team_id=4&member_team_token_id=6e60f180ecab6683ae00640e0d847c1607cb050d&team_group_id=1&team_group_token_id=efdd4da200e1e3289c1a41d6197edb5dafedb31f&sport_game_id=5&sport_game_token_id=a5b16fbdda8b5c083be1d62b23ce2380ffcf6213&gender_category_id=1&member_participant_name=Kidane Gebrekidan Redaei&member_participant_id=1&member_participant_token_id=d5366cd71a87a8a912608ff27a33c4ab8a04f184&member_participant_role_id=2&member_participant_status=9&start_date=04/10/2018&description=sdfgsdfgsdfg
	
	//$_flag =  GroupTeamMemberParticipantTable::processNew ( 1, '94f12f125643718e20d329aef595bc3e', 1, 'a21ee120af7cc330164bada75865ba5cbaacd6e8', 1, 'd5366cd71a87a8a912608ff27a33c4ab8a04f184', $_memberTeamName, $_memberParticipantName, 2, $_entryDate, $_participantStatus, $_description, $_userID, $_userTokenID );  
	
	
	//$_flag =  GroupTeamMemberParticipantTable::processNew ( 1, '94f12f125643718e20d329aef595bc3e', 1, 'b5e4dcd8aebe55c68f287d671ed55b1689b8ffb3', 13, '16006815c534cf9e84f9b79d06f36fa3ca5b0efd', 'Raya University (RU-ET)', 'Bahta Hiluf Kebede', 2, $_entryDate, $_participantStatus, 'adfadfasdf adfaf', $_userID, $_userTokenID );  
	
	//$_flag =  SportGameTeamGroupTable::processNew ( $_orgID, $_orgTokenID, 4, '6e60f180ecab6683ae00640e0d847c1607cb050d', 1, '9d176ba04ea12657aa08fa28619ef937e3ae9e91', 'Mekelle University (MU-ET)', '04/26/2018', 1, 'sdfgsdfgsdf sdfgsdfg', $_userID, $_userTokenID );  
	
	//$_teamGroup =  GroupTypeTable::makeObject ( $_orgID, 1);
	
	//$_candidateParticipants = TeamMemberParticipantTable::processCandidateParticipants( $_tournamentID, 4, '6e60f180ecab6683ae00640e0d847c1607cb050d', $_sportGameID, $_sportGameTokenID, $_genderCategoryID, $_keyword, $_exclusion, 0, 10 ); 
	//echo count($_candidateParticipants).' = '; 
	//echo sha1(md5('6e60f180ecab6683ae00640e0d847c1607cb050d')).' = '; 
	//$_sportGameTeamGroup->makeActivation()
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('complete', array( '_tournamentMatch' => $_tournamentMatch, '_matchParticipantTeams' => $_matchParticipantTeams )) ?>
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
	$('#createTeamGroupMemberParticipant').click(function(){
		var url = '<?php echo url_for('team_group/createTeamGroupMemberParticipant')?>'; 
		var formName = 'createTeamGroupMemberParticipantForm';
		var data = $("form#createTeamGroupMemberParticipantForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		//$("#completeTeamGroupMemberParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		return false; 
	});  
	$('#footerApproveTeamGrouping').click(function(){
		var url = '<?php echo url_for('team_group/approveTeamGrouping')?>'; 
		var data = 'team_group_id='+document.getElementById('team_group_id').value+'&team_group_token_id='+document.getElementById('team_group_token_id').value;
		processEntry(data, url )
		//alert(data);
		return false; 
	});  
	$('#footerCompleteTeamGrouping').click(function(){
		var url = '<?php echo url_for('team_group/completeTeamGrouping')?>'; 
		var data = 'team_group_id='+document.getElementById('team_group_id').value+'&team_group_token_id='+document.getElementById('team_group_token_id').value;
		processEntry(data, url )
		//alert(data);
		return false; 
	});  
	
	$('.selectCandidateGroupMemberTeam').click(function() {   
		var url = '<?php echo url_for('team_group/candidateGroupMemberTeam')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-sport-game-participation';   
		//var data = 'tam_group_id='+document.getElementById('gender_category_id').value;
		var data = 'team_group_id='+document.getElementById('team_group_id').value+'&team_group_token_id='+document.getElementById('team_group_token_id').value+'&sport_game_id='+document.getElementById('sport_game_id').value+'&sport_game_token_id='+document.getElementById('sport_game_token_id').value+'&gender_category_id='+document.getElementById('gender_category_id').value;
		//alert(data);
		processDataSelection(data, idName, url );	
		return true;	 
	}); 
	$('.selectCandidateGroupMemberTeamParticipant').click(function() {   
		var url = '<?php echo url_for('team_group/candidateGroupMemberTeamParticipant')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-team-member-participant';   
		//var data = 'tam_group_id='+document.getElementById('gender_category_id').value;
		var data = 'member_team_id='+document.getElementById('member_team_id').value+'&member_team_token_id='+document.getElementById('member_team_token_id').value+'&sport_game_id='+document.getElementById('sport_game_id').value+'&sport_game_token_id='+document.getElementById('sport_game_token_id').value+'&team_group_id='+document.getElementById('team_group_id').value+'&team_group_token_id='+document.getElementById('team_group_token_id').value+'&gender_category_id='+parseInt(document.getElementById('gender_category_id').value);
		//alert(data);
		processDataSelection(data, idName, url );	
		return true;	 
	}); 
	
	
	//*********************************/
	
	$("#candidateGroupMemberTeamModal").submit(function(e) { 
		if($("input[name=selectSportGameModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("group_member_team_id").value = listArr[0];
			document.getElementById("group_member_team_token_id").value = listArr[1];  
			document.getElementById("member_team_id").value = listArr[2];
			document.getElementById("member_team_token_id").value = listArr[3];  
			document.getElementById("member_team_name").value = listArr[4]+' ('+listArr[5]+')';    
			$("#createTeamGroupMemberParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTeamGroupMember").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$(".selectCandidateGroupMemberTeamParticipant").removeAttr("disabled") ;
			$('#candidateGroupMemberTeamModal').modal('hide');
		return e.preventDefault();
	});
	$("#candidateGroupMemberTeamParticipantModal").submit(function(e) { 
		if($("input[name=selectSportGameModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("member_participant_id").value = listArr[0];
			document.getElementById("member_participant_token_id").value = listArr[1];  
			document.getElementById("member_participant_name").value = listArr[2];    
			document.getElementById("member_participant_role_id").value = listArr[3];    
			$("#createTeamGroupMemberParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTeamGroupMemberParticipant").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateGroupMemberTeamParticipantModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
 
</script>

