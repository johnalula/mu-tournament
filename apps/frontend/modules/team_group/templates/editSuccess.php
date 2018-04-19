<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TEAM_GROUP)):
	
	//member_team_name=Mekelle University (MU-ET)&member_team_id=4&member_team_token_id=6e60f180ecab6683ae00640e0d847c1607cb050d&team_group_id=1&team_group_token_id=9d176ba04ea12657aa08fa28619ef937e3ae9e91&sport_game_id=7&sport_game_token_id=82dcbbb47c5fec8c2902f76c22f43a12f93f2f05&gender_category_id=1&team_status=1&start_date=04/26/2018&description=sfsf gsdf sdfgsdfg
	
	//$_flag =  SportGameTeamGroupTable::processNew ( $_orgID, $_orgTokenID, 4, '6e60f180ecab6683ae00640e0d847c1607cb050d', 1, '9d176ba04ea12657aa08fa28619ef937e3ae9e91', 'Mekelle University (MU-ET)', '04/26/2018', 1, 'sdfgsdfgsdf sdfgsdfg', $_userID, $_userTokenID );  
	
	//$_teamGroup =  GroupTypeTable::makeObject ( $_orgID, 1);
	//echo count($_candidateTeams).' = '; 
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('edit', array( '_sportGameTeamGroup' => $_sportGameTeamGroup, '_activeTournament' => $_activeTournament, '_candidateGroups' => $_candidateGroups, '_candidateGameCategorys' => $_candidateGameCategorys )) ?> 
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
		//alert(datas);
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
	
	//*********************************/
	
	$("#candidateSportGameModal").submit(function(e) { 
		if($("input[name=selectSportGameModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("sport_game_id").value = listArr[0];
			document.getElementById("sport_game_token_id").value = listArr[1];  
			document.getElementById("sport_game_full_name").value = listArr[2]+' ('+listArr[3]+')'+(listArr[4]? (' - '+listArr[5]+' '+listArr[4]):'');    
			document.getElementById("sport_game_category_name").value = listArr[3];    
			document.getElementById("sport_game_contestant_team_mode").value = listArr[6];    
			$("#createTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateSportGameModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
 
</script>
