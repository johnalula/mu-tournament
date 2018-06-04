<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TEAM)):
	
	//tournament_id=1&member_team_id=4&member_team_token_id=6e60f180ecab6683ae00640e0d847c1607cb050d&member_participant_id=3&member_participant_gender_id=2&sport_game_category_id=1
	
	//$_participantRoles = TeamMemberParticipantRoleTable::processCandidateMemberRoles ( 1, 1, 4, sha1(md5('6e60f180ecab6683ae00640e0d847c1607cb050d')), $_sportGameID, 3, $_keyword);
	 
	//echo count($_participantRoles).' == ';
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('setting', array( '_team' => $_team, '_countTeams' => $_countTeams, '_gameParticipations' => $_gameParticipations, '_memberParticipants' => $_memberParticipants, '_memberParticipantRoles' => $_memberParticipantRoles )) ?> 
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
<div class="modal fade" id="candidateSportGameTypeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog">
		<div class="modal-content"> 
			 <div class="ui-modal-panel-container1" id=""> 
				<div class="ui-panel-grid-box" id=""> 
					<!-- First panel -->  
						<div class="ui-panel-grid">
							<div class="ui-panel-header-default">
								<h2 class="ui-theme-panel-header">
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group management') ?>">
									<span class="ui-header-status-icon">
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->confirmFlag ? 'status/approved':'status/disabled')  ?>"> 
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->activeFlag ? 'status/active':'status/other')  ?>"> 
									</span>
									<?php echo __('Candidate Sport Game Types').' ( Name: '.$_team->teamName.' ID #:'.$_team->teamNumber.' )'  ?>
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
										<div id="" class="navbar-collapse ui-toolbar">
											<div class="">
												<?php include_partial('partials/insert_toolbar', array('_object' => $_team)) ?> 
											</div>
											<div class="">
												<?php include_partial('partials/modal_filter', array( )) ?> 
											</div><!-- end of ui-filter-list -->
										</div><!-- end of ui-filter-list --> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('game_category/candidate_game_category', array( '_candidateGameCategorys' => $_candidateGameCategorys )) ?> 
										</div>
									</div> 
									
									<div class="ui-panel-footer-default">
										<div class="ui-panel-list-pagination-default">
											<div class="ui-panel-list-pagination">
												<?php include_partial('global/pagination', array('_totalRecords' => $_countProducts , '_pager'=> 'sport_game')) ?>
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
<div class="modal fade" id="candidateSportGameCategoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog">
		<div class="modal-content"> 
			 <div class="ui-modal-panel-container1" id=""> 
				<div class="ui-panel-grid-box" id=""> 
					<!-- First panel -->  
						<div class="ui-panel-grid">
							<div class="ui-panel-header-default">
								<h2 class="ui-theme-panel-header">
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group management') ?>">
									<span class="ui-header-status-icon">
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->confirmFlag ? 'status/approved':'status/disabled')  ?>"> 
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->activeFlag ? 'status/active':'status/other')  ?>"> 
									</span>
									<?php echo __('Candidate Sport Game Types').' ( Name: '.$_team->teamName.' ID #:'.$_team->teamNumber.' )'  ?>
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
										<div id="" class="navbar-collapse ui-toolbar">
											<div class="">
												<?php include_partial('partials/insert_toolbar', array('_object' => $_team)) ?> 
											</div>
											<div class="">
												<?php include_partial('partials/modal_filter', array( )) ?> 
											</div><!-- end of ui-filter-list -->
										</div><!-- end of ui-filter-list --> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('game_category/candidate_game_category', array( '_candidateGameCategorys' => $_candidateGameCategorys )) ?> 
										</div>
									</div> 
									
									<div class="ui-panel-footer-default">
										<div class="ui-panel-list-pagination-default">
											<div class="ui-panel-list-pagination">
												<?php include_partial('global/pagination', array('_totalRecords' => $_countProducts , '_pager'=> 'sport_game')) ?>
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
<div class="modal fade" id="candidateSportGameModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog">
		<div class="modal-content"> 
			 <div class="ui-modal-panel-container1" id=""> 
				<div class="ui-panel-grid-box" id=""> 
					<!-- First panel -->  
						<div class="ui-panel-grid">
							<div class="ui-panel-header-default">
								<h2 class="ui-theme-panel-header">
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group management') ?>">
									<span class="ui-header-status-icon">
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->confirmFlag ? 'status/approved':'status/disabled')  ?>"> 
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->activeFlag ? 'status/active':'status/other')  ?>"> 
									</span>
									<?php echo __('Candidate Sport Games').' ( Name: '.$_team->teamName.' ID #:'.$_team->teamNumber.' )'  ?>
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
										<div id="" class="navbar-collapse ui-toolbar">
											<div class="">
												<?php include_partial('partials/insert_toolbar', array('_object' => $_team)) ?> 
											</div>
											<div class="">
												<?php include_partial('partials/modal_filter', array( )) ?> 
											</div><!-- end of ui-filter-list -->
										</div><!-- end of ui-filter-list --> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('candidate_sport_game', array( '_candidateSportGames' => $_candidateSportGames )) ?>  
										</div>
									</div> 
									
									<div class="ui-panel-footer-default">
										<div class="ui-panel-list-pagination-default">
											<div class="ui-panel-list-pagination">
												<?php include_partial('global/pagination', array('_totalRecords' => $_countProducts , '_pager'=> 'sport_game')) ?>
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
<div class="modal fade" id="candidateMemberSportGameModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog">
		<div class="modal-content"> 
			 <div class="ui-modal-panel-container1" id=""> 
				<div class="ui-panel-grid-box" id=""> 
					<!-- First panel -->  
						<div class="ui-panel-grid">
							<div class="ui-panel-header-default">
								<h2 class="ui-theme-panel-header">
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group management') ?>">
									<span class="ui-header-status-icon">
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->confirmFlag ? 'status/approved':'status/disabled')  ?>"> 
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->activeFlag ? 'status/active':'status/other')  ?>"> 
									</span>
									<?php echo __('Candidate Sport Games').' ( Name: '.$_team->teamName.' ID #:'.$_team->teamNumber.' )'  ?>
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
										<div id="" class="navbar-collapse ui-toolbar">
											<div class="">
												<?php include_partial('partials/insert_toolbar', array('_object' => $_team)) ?> 
											</div>
											<div class="">
												<?php include_partial('partials/modal_filter', array( )) ?> 
											</div><!-- end of ui-filter-list -->
										</div><!-- end of ui-filter-list --> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('candidate_game_participation_list', array( '_candidateTeams' => $_teamGameParticipations )) ?>
										</div>
									</div> 
									
									<div class="ui-panel-footer-default">
										<div class="ui-panel-list-pagination-default">
											<div class="ui-panel-list-pagination">
												<?php include_partial('global/pagination', array('_totalRecords' => $_countProducts , '_pager'=> 'sport_game')) ?>
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
<div class="modal fade" id="candidateMemberParticipantModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog">
		<div class="modal-content"> 
			 <div class="ui-modal-panel-container1" id=""> 
				<div class="ui-panel-grid-box" id=""> 
					<!-- First panel -->  
						<div class="ui-panel-grid">
							<div class="ui-panel-header-default">
								<h2 class="ui-theme-panel-header">
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group management') ?>">
									<span class="ui-header-status-icon">
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->confirmFlag ? 'status/approved':'status/disabled')  ?>"> 
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->activeFlag ? 'status/active':'status/other')  ?>"> 
									</span>
									<?php echo __('Candidate Sport Games').' ( Name: '.$_team->teamName.' ID #:'.$_team->teamNumber.' )'  ?>
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
										<div id="" class="navbar-collapse ui-toolbar">
											<div class="">
												<?php include_partial('partials/insert_toolbar', array('_object' => $_team)) ?> 
											</div>
											<div class="">
												<?php include_partial('partials/modal_filter', array( )) ?> 
											</div><!-- end of ui-filter-list -->
										</div><!-- end of ui-filter-list --> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('candidate_member_participant', array( '_candidateMemberParticipants' => $_candidateMemberParticipants )) ?>
										</div>
									</div> 
									
									<div class="ui-panel-footer-default">
										<div class="ui-panel-list-pagination-default">
											<div class="ui-panel-list-pagination">
												<?php include_partial('global/pagination', array('_totalRecords' => $_countProducts , '_pager'=> 'sport_game')) ?>
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
<div class="modal fade" id="candidateTeamLogoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog-msm">
		<div class="modal-content"> 
			 <div class="ui-modal-panel-container1" id=""> 
				<div class="ui-panel-grid-box" id=""> 
					<!-- First panel -->  
						<div class="ui-panel-grid">
							<div class="ui-panel-header-default">
								<h2 class="ui-theme-panel-header">
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group management') ?>">
									<span class="ui-header-status-icon">
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->status == TournamentCore::$_ACTIVE ? 'status/enabled':'status/pending')  ?>"> 
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->confirmFlag ? 'status/approved':'status/disabled')  ?>"> 
										<img title="<?php echo $_team->teamName ?>" src="<?php echo image_path($_team->activeFlag ? 'status/active':'status/other')  ?>"> 
									</span>
									<?php echo __('Candidate Sport Games').' ( Name: '.$_team->teamName.' ID #:'.$_team->teamNumber.' )'  ?>
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
										<div id="" class="navbar-collapse ui-toolbar">
											<div class="">
												<?php include_partial('partials/insert_toolbar', array('_object' => $_team)) ?> 
											</div>
											<div class="">
												<?php include_partial('partials/modal_filter', array( )) ?> 
											</div><!-- end of ui-filter-list -->
										</div><!-- end of ui-filter-list --> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('team_logo_form', array( '_team' => $_team )) ?> 
										</div>
									</div> 
									
									<div class="ui-panel-footer-default">
										<div class="ui-panel-list-pagination-default">
											<div class="ui-panel-list-pagination">
												<?php include_partial('global/pagination', array('_totalRecords' => $_countProducts , '_pager'=> 'sport_game')) ?>
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
	$('#createTeamMemberRole').click(function(){
		var url = '<?php echo url_for('team/createTeamMemberRole')?>'; 
		var formName = 'createTeamMemberRoleForm';
		var data = $("form#createTeamMemberRoleForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});
	
	//*********************************/
	
	$('.selectCandidateSportGameType').click(function() {   
		var url = '<?php echo url_for('team/candidateSportGameTypes')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-game-categorys';   
		var data = '';
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	$('.selectCandidateSportGameCategory').click(function() {   
		var url = '<?php echo url_for('team/candidateTeamSportGameCategorys')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-game-categorys';   
		var data = 'member_team_id='+document.getElementById('member_team_id').value+'&member_team_token_id='+document.getElementById('member_team_token_id').value;
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
		var data = 'tournament_id='+document.getElementById('member_tournament_id').value+'&member_team_id='+document.getElementById('member_team_id').value+'&member_team_token_id='+document.getElementById('member_team_token_id').value+'&member_participant_id='+document.getElementById('member_participant_id').value+'&member_participant_gender_id='+document.getElementById('member_participant_gender_id').value+'&sport_game_category_id='+document.getElementById('sport_game_category_id').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	$('.selectCandidateMemberParticipant').click(function() {   
		var url = '<?php echo url_for('team/candidateMemberParticipant')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-member-participant';   
		var data = 'tournament_id='+document.getElementById('member_tournament_id').value+'&member_team_id='+document.getElementById('member_team_id').value+'&member_team_token_id='+document.getElementById('member_team_token_id').value+'&member_participant_gender_id='+document.getElementById('member_participant_gender_id').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	//*********************************/
	
	$("#candidateSportGameTypeModal").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("sport_game_type_id").value = listArr[0];
			document.getElementById("sport_game_type_token_id").value = listArr[1];  
			document.getElementById("sport_game_type_name").value = listArr[2]+' ('+listArr[3]+')';  
			  
			//$("#createTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			//$("#cancelTeamSportGameParticipation").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('.selectCandidateSportGame').removeAttr("disabled");
			$('#candidateSportGameTypeModal').modal('hide');
		return e.preventDefault();
	});
	$("#candidateSportGameModal").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
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
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("member_sport_game_id").value = listArr[0];
			document.getElementById("member_sport_game_token_id").value = listArr[1];  
			document.getElementById("member_sport_game_name").value = listArr[2]+' ('+listArr[3]+')';    
			
			$("#createTeamMemberRole").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTeamMemberRole").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateMemberSportGameModal').modal('hide');
		return e.preventDefault();
	});
	
	$("#candidateSportGameCategoryModal").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("sport_game_category_id").value = listArr[0];
			document.getElementById("sport_game_category_token_id").value = listArr[1];  
			document.getElementById("sport_game_category_name").value = listArr[2]+' ('+listArr[3]+')';    
						
			//$("#createTeamMemberRole").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			//$("#cancelTeamMemberRole").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('.selectCandidateMemberSportGame').removeAttr("disabled");
			$('#candidateSportGameCategoryModal').modal('hide');
		return e.preventDefault();
	});
	
	$("#candidateMemberParticipantModal").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("member_participant_id").value = listArr[0];
			document.getElementById("member_participant_token_id").value = listArr[1];  
			document.getElementById("member_participant_name").value = listArr[2]+' ('+listArr[4]+')';    
			document.getElementById("member_participant_gender_id").value = listArr[5];  
			
			//$("#createTeamMemberRole").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			//$("#cancelTeamMemberRole").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('.selectCandidateSportGameCategory').removeAttr("disabled");
			$('#candidateMemberParticipantModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
	 
 
</script>
