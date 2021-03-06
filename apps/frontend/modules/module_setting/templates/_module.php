<div class="ui-panel-container" id=""> 
	<div class="ui-panel-grid-box" id=""> 
		<!-- First panel --> 
		<div class="col-sm-12" id="" style="">  
			<div class="ui-panel-grid" style="">
				<div class="ui-grid-box" id="" style=""> 
					<div class="ui-panel-header-default">
						<h2 class="ui-theme-panel-header">
							<img src="<?php echo image_path('settings/module') ?>" title="<?php echo __('System Module Management') ?>">
							<?php echo __('System Modules') ?>
						</h2>
						<div class="ui-panel-content-minimize opened" id="ui-list-collaps-panel-one" style="">	
							<span id="ui-panel-form-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('icons/arrow_up') ?>"></span>		
							<span id="ui-panel-form-down-arrow" class="ui-minimize-arrow ui-display-none"><img src="<?php echo image_path('icons/arrow_down') ?>"></span>	
						</div>
					</div><!-- ui-panel-header-default -->
					
					<div class="" id="ui-list-collapsible-panel-one">
						<div class="ui-panel-content-separater"></div><!-- end of ui-panel-filter-box -->
					<!-- Begining of toolbar -->
						<div class="ui-toolbar-menu-box  ui-toolbar-border">
							<div class="ui-toolbar-menu">
								<div id="" class="navbar-collapse ui-toolbar">
									<div class="">
										<?php include_partial('module_setting/module_toolbar_action', array()) ?> 
									</div>
									<div class="">
										<?php include_partial('module_setting/filter', array( )) ?> 
									</div><!-- end of ui-filter-list -->
								</div><!-- end of ui-filter-list -->
							</div>
						</div  
						<!--    End of toolbar      -->
						<div class="ui-panel-grid-list" id="team"> 
							<?php include_partial('module_setting/list', array('_systemModules' => $_systemModules, '_countSystemModules' => $_countSystemModules)) ?> 
						</div> <!-- ui-panel-content -->  
					</div><!-- ui-panel-content-box -->
					
					<div class="ui-panel-footer-default">
						<div class="ui-panel-list-pagination-default">
							<div class="ui-panel-list-pagination">
								<?php include_partial('global/pagination', array('_totalRecords' => $_countTeams , '_pager'=> 'team')) ?>
							</div>
						</div>
					</div>
					
				</div><!-- end of ui-panel-box5 -->   
			</div><!-- end of ui-panel-box5 -->   
		</div><!-- end of ui-panel-box5 -->   
		<!-- First panel --> 
		<div class="clearFix"></div>		
	</div><!-- end of ui-panel-grid-box -->
</div><!-- end of ui-panel-container -->   


<script>
	$(document).ready(function()	{ 
		$('.next-page').click(function() {
			 
			var navButton =  $(this).attr('rel');
			var serializedData = 'class_id='+$('#product_class_id').val()+'&keyword='+$('#product_keyword').val();
			var totalLimitValue = document.getElementById('ui-total-data-list-product').value;
			var recordURL = 'product/search';
			var divName =  'product';
			//makeNavigation ();
			makePageNavigation (serializedData, recordURL, navButton, 'product', totalLimitValue );
			//alert(result);
			return false; 
		});
		$('.prev-page').click(function() {
			var navButton =  $(this).attr('rel');
			var serializedData = 'class_id='+$('#product_class_id').val()+'&keyword='+$('#product_keyword').val();
			var totalLimitValue = document.getElementById('ui-total-data-list-product').value;
			var recordURL = 'product/search';
			var divName =  'product';
			makePageNavigation (serializedData, recordURL, navButton, 'product', totalLimitValue );
			return false; 
		});
		$('.last-page').click(function() {
			var navButton =  $(this).attr('rel');
			var serializedData = 'class_id='+$('#product_class_id').val()+'&keyword='+$('#product_keyword').val();
			var totalLimitValue = document.getElementById('ui-total-data-list-product').value;
			var recordURL = 'product/search';
			var divName =  'product';
			makePageNavigation (serializedData, recordURL, navButton, 'product', totalLimitValue );
			return false; 
		});
		$('.first-page').click(function() {
			var navButton =  $(this).attr('rel');
			var serializedData = 'class_id='+$('#product_class_id').val()+'&keyword='+$('#product_keyword').val();
			var totalLimitValue = document.getElementById('ui-total-data-list-product').value;
			var recordURL = 'product/search';
			var divName =  'product';
			makePageNavigation (serializedData, recordURL, navButton, 'product', totalLimitValue );
		});
		$('#product_keyword').keyup(function(key) {
			var navButton =  $(this).attr('rel');
			var serializedData = 'class_id='+$('#product_class_id').val()+'&keyword='+$('#product_keyword').val();
			var totalLimitValue = document.getElementById('ui-total-data-list-product').value;
			var recordURL = 'product/search';
			var divName =  'product';
			makePageNavigation (serializedData, recordURL, navButton, 'product', totalLimitValue );
		});
		$('#product_class_id').click(function() {
			var navButton =  $(this).attr('rel');
			var serializedData = 'class_id='+$('#product_class_id').val()+'&keyword='+$('#product_keyword').val();
			var totalLimitValue = document.getElementById('ui-total-data-list-product').value;
			var recordURL = 'product/search';
			var divName =  'product';
			makePageNavigation (serializedData, recordURL, navButton, 'product', totalLimitValue );
		});
		/*$('#product_class_id').change(function()	 {
			$('#product').load(
				$(this).parents('form').attr('action'),
				{ class_id: this.value, keyword: $('#product_keyword').val() } 
			);
			alert(query); 
		});*/
		$('#pagination-limit').change(function()	 {
			var navButton =  $(this).attr('rel');
			var serializedData = 'class_id='+$('#product_class_id').val()+'&keyword='+$('#product_keyword').val();
			var totalLimitValue = document.getElementById('ui-total-data-list-product').value;
			var recordURL = 'product/search';
			var divName =  'product';
			makePageNavigation (serializedData, recordURL, navButton, 'product', totalLimitValue );
		});
	}); 
</script>


