<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_SPORT_GAME)):
	
	//sport_game_category_name=Athletics (ATHLETICS)&sport_game_category_id=1&sport_game_category_token_id=fea2553fcd57307b5e9907b2350cd52ed542bb41&contestant_team_mode=2&sport_game_category=&sport_game_type=1&sport_game_type_mode=1&sport_game_measurement=1&sport_game_distance=400&sport_game_type_name=400M&sport_game_throw_type=&sport_game_jump_type_mode=&sport_game_player_mode=4&sport_game_status=2&description=asdfas dfasdf asdf
	
	//$_flag =  SportGameTable::processNew ( 1, '94f12f125643718e20d329aef595bc3e', 1, 'fea2553fcd57307b5e9907b2350cd52ed542bb41', 'Athletics (ATHLETICS)', '400M', $_sportGameAlias, 1, 400, 1, 1, $_throwTypeMode, $_jumpTypeMode, 4, 2, 2, 'asdfas dfasdf asdf', $_userID, $_userTokenID  );  
	 
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('new', array( '_sportGames' => $_sportGames, '_gameCategorys' => $_gameCategorys)) ?> 
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



<script>
	$('#createTournamentSportGame').click(function(){
		var url = '<?php echo url_for('sport_games/createTournamentSportGame')?>'; 
		var formName = 'createTournamentSportGameForm';
		var data = $("form#createTournamentSportGameForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});
	$('.selectCandidateSportGameCategory').click(function() {   
		var url = '<?php echo url_for('sport_games/candidateSportGameCategorys')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-parent-categorys';   
		var data = '';
		processDataSelection(data, idName, url );		 
	});  
	
	//*********************************/
	
	$("#candidateSportGameCategoryModal").submit(function(e) { 
		if($("input[name=selectSportGameCategoryModal]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("sport_game_category_id").value = listArr[0];
			document.getElementById("sport_game_category_token_id").value = listArr[1];  
			document.getElementById("sport_game_category_name").value = listArr[2]+' ('+listArr[3]+')';    
			document.getElementById("contestant_team_mode").value = listArr[4];    
			$("#createTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelTournamentSportGame").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#candidateSportGameCategoryModal').modal('hide');
		return e.preventDefault();
	});
	
	$("#insertModalTwoData").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("parent_product_id").value = listArr[0];
			document.getElementById("parent_product_token_id").value = listArr[1];  
			document.getElementById("parent_product_name").value = listArr[2]+' ( '+listArr[3]+' )';  
			document.getElementById("product_name").value = listArr[2];  
			$("#createProduct").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelProduct").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#parentProductModal').modal('hide');
		return e.preventDefault();
	});
	
	$("#insertModalThreeData").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("gl_sales_account_id").value = listArr[0];
			document.getElementById("gl_sales_account_name").value = listArr[2]+' ( '+listArr[3]+' )';  
			$("#createProduct").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelProduct").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#glSalesAccountModal').modal('hide');
		return e.preventDefault();
	});
	$("#insertModalFourData").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("gl_inventory_account_id").value = listArr[0];
			document.getElementById("gl_inventory_account_name").value = listArr[2]+' ( '+listArr[3]+' )';  
			$("#createProduct").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelProduct").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#glInventoryAccountModal').modal('hide');
		return e.preventDefault();
	});
	$("#insertModalFiveData").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("gl_cos_account_id").value = listArr[0];
			document.getElementById("gl_cos_account_name").value = listArr[2]+' ( '+listArr[3]+' )';  
			$("#createProduct").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelProduct").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#glCoSAccountModal').modal('hide');
		return e.preventDefault();
	});
	$("#insertModalSixData").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("gl_sales_account_id").value = listArr[0];
			document.getElementById("gl_sales_account_name").value = listArr[2]+' ( '+listArr[3]+' )';  
			$("#createProduct").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelProduct").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#productLocationModal').modal('hide');
		return e.preventDefault();
	});
	
	 
 
</script>
