
<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_TEAM)):	
	
	
?> 
 
<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('edit', array( '_team' => $_team, '_teams' => $_teams, '_countTeams' => $_countTeams )) ?> 
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
