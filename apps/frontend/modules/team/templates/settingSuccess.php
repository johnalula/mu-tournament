<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->isAuthenticated()): 	 
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('setting', array( '_team' => $_team, '_countTeams' => $_countTeams, '_teamGameParticipations' => $_teamGameParticipations )) ?> 
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
									<?php include_partial('partials/insert_toolbar', array('_object' => $_team)) ?> 
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
		var idName = 'candidate-sport-games';   
		var data = 'sport_game_category='+document.getElementById('sport_game_type_id').value;
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
	 
	 
	 
 
</script>
