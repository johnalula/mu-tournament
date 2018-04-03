<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_GROUP)):
	
	//test_id=&tournament_name=African Universities Sport Festival (AUSF ) - 2018&tournament_token_id=67a74306b06d0c01624fe0d0249a570f4d093747&tournament_id=1&match_season=2018&game_category=1&sport_game_name=800M (Athletics)&sport_game_id=4&sport_game_token_id=dedad721e93b877cecb6306b76ed9ec9c76192cf&team_group_id=1&description=dfasdfasdfasdf&all-list-check-boxs=0&ui-total-data-list-product=0
	
	//$_teamGroup =  SportGameGroupTable::processNew ( $_orgID, $_orgTokenID, 1, 4, 'dedad721e93b877cecb6306b76ed9ec9c76192cf', 1, '800M (Athletics)', 'afasdf asdfa fasdf', $_userID, $_userTokenID );
	
	//$_teamGroup =  GroupTypeTable::makeObject ( $_orgID, 1);
	//test_id=&tournament_name=African Universities Sport Festival (AUSF ) - 2018&tournament_token_id=67a74306b06d0c01624fe0d0249a570f4d093747&tournament_id=1&match_season=2018&game_category=1&sport_game_name=5000M (Athletics)&sport_game_id=7&sport_game_token_id=82dcbbb47c5fec8c2902f76c22f43a12f93f2f05&team_group_id=1&contestant_team_mode=2&description=asdfasd fasdf&all-list-check-boxs=0&ui-total-data-list-product=0
	
	//$_teamGroup =  SportGameGroupTable::processNew ( $_orgID, $_orgTokenID, 1, 7, '82dcbbb47c5fec8c2902f76c22f43a12f93f2f05', 1, '5000M (Athletics)', 2, 'sfgsfgs', $_userID, $_userTokenID );  
	//echo $_teamGroup->id.' == ';
?> 

<form class="form-horizontal" role="form" action="<?php echo url_for('team_group/createTournamentTeamGroup') ?>" id="createTournamentTeamGroupForm" name="createTournamentTeamGroupForm" method="post"> 
	<div class="ui-page-box">
		<div class="ui-main-content-box" >
			<div class="ui-detail-tab-list ui-grid-content-container-box" >
				<div id="ui-tab-three" class="ui-tab" style="">
					<?php include_partial('new', array( '_activeTournament' => $_activeTournament, '_candidateGroups' => $_candidateGroups, '_candidateGameCategorys' => $_candidateGameCategorys )) ?> 
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
		var idName = 'candidate-sport-games';   
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
			document.getElementById("sport_game_full_name").value = listArr[2]+' ('+listArr[3]+')';    
			document.getElementById("sport_game_category_name").value = listArr[3];    
			$("#createTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTeamGroup").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateSportGameModal').modal('hide');
		return e.preventDefault();
	});
	 
	 
 
</script>
