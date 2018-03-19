<div class="ui-panel-container" id=""> 
	<div class="ui-panel-grid-box" id=""> 
		<!-- First panel --> 
		<div class="col-sm-12"> 
			<div class="ui-panel-grid">
				<div class="ui-panel-header-default">
					<h2 class="ui-theme-panel-header">
						<img src="<?php echo image_path('settings/user') ?>" title="<?php echo __('System User Management') ?>">
						<?php echo __('System Users')  ?>
					</h2>
					<div class="ui-panel-content-minimize opened" id="ui-list-collaps-panel-one" style="">	
						<span id="ui-panel-form-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('icons/arrow_up') ?>"></span>		
						<span id="ui-panel-form-down-arrow" class="ui-minimize-arrow ui-display-none"><img src="<?php echo image_path('icons/arrow_down') ?>"></span>	
					</div>
				</div><!-- ui-panel-header-default -->
				<div class="" id="ui-list-collapsible-panel-one"> 
					<div class="ui-panel-content-separater"></div><!-- end of ui-panel-filter-box -->
				<!-- Begining of toolbar -->
					<div class="ui-toolbar-menu-box ui-panel-content-border">
						<div class="ui-toolbar-menu">
							<div id="" class="navbar-collapse ui-toolbar">
								<div class="">
									<?php include_partial('user/user_toolbar', array()) ?> 
								</div>
								<div class="">
									<?php include_partial('user/filter', array('_userRoles' => $_userRoles)) ?> 
								</div><!-- end of ui-filter-list -->
							</div><!-- end of ui-filter-list -->
						</div>
					</div>
					<!--    End of toolbar      -->
					<div class="ui-panel-grid-list"> 
						<?php include_partial('user/list', array('_systemUsers' => $_systemUsers )) ?> 
					</div> <!-- ui-panel-content -->  
				</div><!-- ui-panel-content-box -->
				<div class="ui-panel-footer-default">
					<div class="ui-panel-list-pagination-default">
						<div class="ui-panel-list-pagination" id="ui-pagination-box">
							<?php include_partial('global/pagination', array()) ?> 
						</div>
					</div>
				</div>
			</div><!-- end of ui-panel-grid -->
		</div><!-- end of ui-panel-box5 -->   
		<!-- First panel --> 
		<div class="clearFix"></div>		
	</div><!-- end of ui-panel-grid-box -->
</div><!-- end of ui-panel-container -->   
<style>
	.hover { background-color: #00f; color: #fff; cursor:pointer;}
.page{ margin:5px; }

</style>
<script>
	$(document).ready(function() { 
		
		//setInterval(function() { 
			var url = '<?php echo url_for('student/selectStudent')?>'; 
			var data = '';
			//$("#ui-data-table-list-student").load(url, data); 
			//alert('data'+data);
       // }, 1000); 
		 
	});
	$(document).ready(function() {
		//$("#ui-data-table-list-student-list").load(url, data);
		var rows = $('table#ui-data-table-list-student-list').find('tbody tr').length;
		var no_rec_per_page=document.getElementById("pagination-pagesize").value;
		var current_page_size = 1;
		var current_page = 1;
		var no_pages= Math.ceil(rows/no_rec_per_page);
		var navigation_html = ('<div class="ui-pagination" id="pages"><ul class="pagination pagination-sm">');
		var display_info_htm = ('<span id="ui-padination-display" class="ui-total-pages"> Displaying: ');
		 navigation_html += '<li class="page next"><a class="previous_link" href="javascript:previous();">Prev</a></li>';   
		 display_info_htm += '1'+' - '+no_rec_per_page+' of '+rows;
		display_info_htm +=' Records </span>';
		$('#ui-navigation-info').html(display_info_htm);
		for(i=0;i<no_pages;i++)
		{
			 navigation_html += ('<li class="page next"><a href="#">'+(i+1)+'</a></li>');
		}
		
	  navigation_html += '<li class="page next"><a class="next_link" href="javascript:next();">Next</a></li></ul></div>';  
		$('#ui-navigation').html(navigation_html);  
		$('.page').hover(
			function() {
				$(this).addClass('hover');
			},
			function(){
			$(this).removeClass('hover');
			}
		);
		
		$('table#ui-data-table-list-student-list').find('tbody tr').hide();
		var tr = $('table tbody tr');
		for(var i=0;i<=no_rec_per_page-1;i++)
		{
			$(tr[i]).show();
		}
		$('li.page').click(function(event) {
			$(this).addClass('active').siblings().removeClass('active'); 
			current_page_size = (($(this).text()*no_rec_per_page)-(no_rec_per_page-1));
			current_page = ($(this).text());
			display_info_htm = '';
			display_info_htm += ('<span id="ui-padination-display" class="ui-total-pages"> Displaying: ')
			display_info_htm += (($(this).text()*no_rec_per_page)-(no_rec_per_page-1))+' - '+($(this).text()*no_rec_per_page)+' of '+rows;
			display_info_htm +=' Records </span>';
			$('#ui-navigation-info').html(display_info_htm);
			$('table#ui-data-table-list-student-list').find('tbody tr').hide();
			for(i=($(this).text()-1)*no_rec_per_page;i<=$(this).text()*no_rec_per_page-1;i++) {
				$(tr[i]).show();
			} 
		});  
		$('#pagination-pagesize').change(function() {
			no_rec_per_page = $(this).val(); 
			display_info_htm = '';
			display_info_htm += ('<span id="ui-padination-display" class="ui-total-pages"> Displaying: ')
			display_info_htm += ((current_page*no_rec_per_page)-(no_rec_per_page-1))+' - '+(current_page*no_rec_per_page)+' of '+rows;
			display_info_htm +=' Records </span>';
			$('#ui-navigation-info').html(display_info_htm);
			$('table#ui-data-table-list-student-list').find('tbody tr').hide();
			for(i=(current_page_size-1);i<=current_page*no_rec_per_page-1;i++) {
				$(tr[i]).show();
			}   
		});  
	});

</script>
 


