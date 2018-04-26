<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TEAM_GROUP)):
	
	//test_id=&tournament_name=African Universities Sport Festival (AUSF ) - 2018&tournament_token_id=67a74306b06d0c01624fe0d0249a570f4d093747&tournament_id=1&match_season=2018&game_category=1&sport_game_name=800M (Athletics)&sport_game_id=4&sport_game_token_id=dedad721e93b877cecb6306b76ed9ec9c76192cf&team_group_id=1&description=dfasdfasdfasdf&all-list-check-boxs=0&ui-total-data-list-product=0
	
	//$_teamGroup =  SportGameGroupTable::processNew ( $_orgID, $_orgTokenID, 1, 4, 'dedad721e93b877cecb6306b76ed9ec9c76192cf', 1, '800M (Athletics)', 'afasdf asdfa fasdf', $_userID, $_userTokenID );
	
	//$_teamGroup =  GroupTypeTable::makeObject ( $_orgID, 1);
	//test_id=&tournament_name=African Universities Sport Festival (AUSF ) - 2018&tournament_token_id=67a74306b06d0c01624fe0d0249a570f4d093747&tournament_id=1&match_season=2018&game_category=1&sport_game_name=5000M (Athletics)&sport_game_id=7&sport_game_token_id=82dcbbb47c5fec8c2902f76c22f43a12f93f2f05&team_group_id=1&contestant_team_mode=2&description=asdfasd fasdf&all-list-check-boxs=0&ui-total-data-list-product=0
	
	//$_teamGroup =  SportGameGroupTable::processNew ( $_orgID, $_orgTokenID, 1, 7, '82dcbbb47c5fec8c2902f76c22f43a12f93f2f05', 1, '5000M (Athletics)', 2, 'sfgsfgs', $_userID, $_userTokenID );  
	//echo $_teamGroup->id.' == ';
	
	//$_candidateTeamGroups = SportGameGroupTable::processCandidateSelection ( 1, sha1(md5('94f12f125643718e20d329aef595bc3e')), 1, 5, sha1(md5('a5b16fbdda8b5c083be1d62b23ce2380ffcf6213')), $_genderCategoryID, $_keyword);
	//$_candidateTeamGroups = SportGameGroupTable::processCandidateGroupTypes ( 1, 1, 5, sha1(md5('a5b16fbdda8b5c083be1d62b23ce2380ffcf6213')), $_keyword, $_activeFlag, 0, 10 );
	//echo count($_candidateTeamGroups).' == ';
?> 

<form class="form-horizontal" role="form" action="<?php echo url_for('team_group/createTournamentSportGameGroup') ?>" id="createTournamentSportGameGroup" name="createTournamentSportGameGroupForm" method="post"> 
	<div class="ui-page-box">
		<div class="ui-main-content-box" >
			<div class="ui-detail-tab-list ui-grid-content-container-box" >
				<div id="ui-tab-three" class="ui-tab" style="">
					<?php include_partial('new', array( '_activeTournament' => $_activeTournament, '_candidateGroupTypes' => $_candidateGroupTypes, '_candidateGameCategorys' => $_candidateGameCategorys )) ?> 
				</div><!-- end of ui-tab-three-->
			</div> <!-- end of ui-detail-tab-list -->
			<div class="ui-clear-fix"></div>
		</div> <!-- end of ui-main-list-default -->
	</div>		  
</form>
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
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Tournament Team Group Management') ?>">
									<span class="ui-header-status-icon"> 
									</span>
									<?php echo __('Candidate Sport Game Types')   ?>
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
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group Management') ?>">
									<span class="ui-header-status-icon"> 
									</span>
									<?php echo __('Candidate Sport Games')   ?>
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
										<?php include_partial('partials/modal_action_toolbar', array('_object' => $_candidateSportGames)) ?> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('sport_games/candidate_sport_game', array( '_candidateSportGames' => $_candidateSportGames )) ?> 
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
<div class="modal fade" id="candidateGroupTypeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog">
		<div class="modal-content"> 
			 <div class="ui-modal-panel-container1" id=""> 
				<div class="ui-panel-grid-box" id=""> 
					<!-- First panel -->  
						<div class="ui-panel-grid">
							<div class="ui-panel-header-default">
								<h2 class="ui-theme-panel-header">
									<img src="<?php echo image_path('settings/team_group') ?>" title="<?php echo __('Team Group Management') ?>">
									<span class="ui-header-status-icon"> 
									</span>
									<?php echo __('Candidate Sport Games')   ?>
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
										<?php include_partial('partials/modal_action_toolbar', array('_object' => $_candidateSportGames)) ?> 
									</div>
								</div>
								<!--    End of toolbar      -->
								<div class="ui-panel-content-box">
									<div class="ui-panel-content-box ">
										<div class="ui-panel-grid-list"> 
											<?php include_partial('tournament_setup/candidate_group_type', array( '_candidateGroupTypes' => $_candidateGroupTypes )) ?> 
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
	/*$('#createTeamGroup').click(function(){
		var url = '<?php echo url_for('team_group/createTournamentTeamGroup')?>'; 
		var formName = 'createTournamentTeamGroupForm';
		var data = $("form#createTournamentTeamGroupForm").serialize();
		var datas = generateValidData (formName);
		//processEntry(datas, url )
		alert(datas);
		return false; 
	});*/
	
	$('.selectCandidateSportGame').click(function() {   
		var url = '<?php echo url_for('team_group/candidateSportGames')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-sport-game';   
		var data = 'game_category='+document.getElementById('game_category').value;
		//alert(data);
		processDataSelection(data, idName, url );		 
	}); 
	
	$('.selectSportGameGroupType').click(function() {   
		var thisIDNumber = $(this).attr('rel');   
		var thisIDName = $(this).attr('id');   
		document.getElementById("sport_game_group_type_name").value = thisIDName;
		document.getElementById("sport_game_group_type_id").value = thisIDNumber; 
		//$('#createSchoolGradePaymentFee').removeAttr("disabled").removeClass("ui-action-toolbar-disabled-menu").addClass("ui-action-toolbar-enabled-menu");
	}); 
	
	$('.selectCandidateGroupType').click(function() {   
		var url = '<?php echo url_for('team_group/candidateGroupTypes')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-group-type';   
		//var data = 'tam_group_id='+document.getElementById('gender_category_id').value;
		var data = 'sport_game_id='+document.getElementById('sport_game_id').value+'&sport_game_token_id='+document.getElementById('sport_game_token_id').value+'&gender_category_id='+document.getElementById('gender_category').value;
		//alert(data);
		processDataSelection(data, idName, url );	
		return true;	 
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
			  
			$("#createTournamentTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateSportGameTypeModal').modal('hide');
		return e.preventDefault();
	});
	
	 
 
</script>
