<?php
	//math_game_type_name=Athletics (Athletics ) - Athletics&math_game_type_id=1&math_game_type_token_id=67a74306b06d0c01624fe0d0249a570f4d093747&tournament_id=1&tournament_token_id=67a74306b06d0c01624fe0d0249a570f4d093747&sport_game_name=5000M (Athletics)&sport_game_id=8&sport_game_token_id=0fda36569b6459978333d67c82e4ccad83950d3f&match_venue=Mekelle Tigray Stadium&event_type=1&gender_category=1&player_mode=3&match_round=13&match_status=1&match_date=03/07/2018&match_group=1&description=sdfa sdfasdf asdf asdf as;
	
	//$_flag =  MatchFixtureTable::processNew ( $_orgID, $_orgTokenID, 1, '67a74306b06d0c01624fe0d0249a570f4d093747', 8, '0fda36569b6459978333d67c82e4ccad83950d3f', '5000M (Athletics)', $_matchRoundID, 1, 1, 3, 'Mekelle Tigray Stadium', 1, '03/07/2018', 1, 'dfa dfasdfa sdfasdf', $_userID, $_userTokenID  );  
?>
<div class="ui-content-page">
	<?php include_partial('match', array( '_sportGames' => $_sportGames, '_countSportGames' => $_countSportGames )) ?> 
</div>		  
       
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
	$('#createProduct').click(function(){
		var url = '<?php echo url_for('product/createProduct')?>'; 
		var formName = 'createProductForm';
		var data = $("form#createProductForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		//alert(datas);
		return true; 
	});
	$('.selectCandidateProductCategory').click(function() {   
		var url = '<?php echo url_for('product/candidateParentCategory')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-parent-categorys';   
		var data = '';
		processDataSelection(data, idName, url );		 
	}); 
	$('.selectCandidateParentProduct').click(function() {   
		var url = '<?php echo url_for('product/candidateParentCategory')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-products';   
		var data = '';
		processDataSelection(data, idName, url );		 
	}); 
	$('.selectCandidateGLSalesAccount').click(function() {   
		var url = '<?php echo url_for('product/candidateAccountCharts')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-account-charts';   
		var data = '';
		processDataSelection(data, idName, url );		 
	}); 
	$('.selectCandidateGLInventoryAccount').click(function() {   
		var url = '<?php echo url_for('product/candidateParentCategory')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-account-charts';   
		var data = '';
		processDataSelection(data, idName, url );		 
	}); 
	$('.selectCandidateGLCoSAccount').click(function() {   
		var url = '<?php echo url_for('product/candidateParentCategory')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-account-charts';   
		var data = '';
		processDataSelection(data, idName, url );		 
	}); 
	$('.selectProductLocation').click(function() {   
		var url = '<?php echo url_for('product/candidateParentCategory')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-parent-categorys';   
		var data = '';
		processDataSelection(data, idName, url );		 
	}); 
	 
	
	//*********************************/
	
	$("#insertModalOneData").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
			
			var input = $("input[name=selectCandidate]:checked", this).val();
			var listArr = input.split("$"); 
			document.getElementById("product_category_id").value = listArr[0];
			document.getElementById("product_category_token_id").value = listArr[1];  
			document.getElementById("product_category_name").value = listArr[2]+' ( '+listArr[3]+' )';  
			document.getElementById("product_name").value = listArr[2];    
			document.getElementById("category_class_id").value = listArr[5];  
			$("#createProduct").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelProduct").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
			$('#productCategoryModal').modal('hide');
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
