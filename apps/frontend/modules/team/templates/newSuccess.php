<?php
	//ournament_name=asdfasdf&tournament_alias=asdfasdf&season=1&status=1&start_date=02/23/2018&end_date=02/28/2018&description=asdfasdfasdfad asdfasdf
	//processSave ( $_orgID, $_orgTokenID,  $_tournamentName, $_tournamentAlias, $_tournamentSeason, $_startDate, $_effectiveDate, $_endDate, $_description )
	
	//$_flag =  TournamentTable::processNew ( $_orgID, $_orgTokenID,  'asdfasdf', 'asdfasdf', '2018', '02/23/2018', $_effectiveDate, '02/28/2018', 1, $_description, $_userID, $_userTokenID  ); 
	//$_flag =  TournamentTable::processSave ( $_orgID, $_orgTokenID,  'asdfasdf', 'asdfasdf', '2018', '02/23/2018', $_effectiveDate, '02/28/2018', $_description ); 
	//$_flag =  TeamTable::processNew ( $_orgID, $_orgTokenID,  'Nirobi University', 'NU', 44, 'Nirobi', $_description, $_userID, $_userTokenID  );  
?>
<div class="ui-content-page">
	<?php include_partial('new', array( '_products' => $_products, '_countProducts' => $_countProducts, '_productClasses' => $_productClasses )) ?> 
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
	$('#createTeam').click(function(){
		var url = '<?php echo url_for('team/createTeam')?>'; 
		var formName = 'createTeamForm';
		var data = $("form#createTeamForm").serialize();
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
