<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title><?php echo __('eAurora-eIMS Inventory Management System') ?></title> 
		<?php include_metas() ?>
		<?php include_title() ?>
		<link rel="shortcut icon" href="/favicon.ico" />
		<?php include_stylesheets() ?>
		<?php include_javascripts() ?>  
		<style type="text/css"  media="print"> 
		</style>
		<script> 

		</script>
	</head>
	
	<body style="background:#fff!important;">   
		<div id="ui-preview-container" class="ui-preview-data-container">
			<div class="ui-preview-content-box">
				<div class="container" id=""> 
					<div class="container-fluid">
						<div class="row">
							<?php echo $sf_content ?>	
						</div>           
					</div>           
				</div>           
			</div>           
		</div>           
	</body>
</html>

<div class="ui-pagination"> 
	<div class="col-sm-4" style="border:0px solid #f00!important;">
		<ul class="ui-pagination-list ui-pagination-action nav">  
			<li class="ui-toolbar-sm-2">  
				<div class="ui-pagination-panel" id="ui-pager-size">
					<span class="ui-pagination-size-text" >Page Size: # </span> 
					<select onclick="" name="limit" class="pagination-pagesize" id="pagination-limit" rel="limit" class="ui-pagination-input-xsm-2"> 
						<option value="5" >5</option>
						<option value="10" selected >10</option>
						<option value="15" >15</option>
						<option value="20" >20</option>
						<option value="30" >30</option> 
						<option value="50" >50</option>
						<option value="100" >100</option>
					</select>
				</div>
			</li>	 
		</ul>	 
		<input type="hidden" class="form-control" id="pagination-offset" name="offset" value="0">
	</div>
	<div class="col-sm-4" style="border:0px solid #f00!important;">
		<div class="ui-pagination-content ui-pagination"> 
			<ul class="nav navbar-nav ui-pagination-action"> 
				<li class="ui-toolbar-sm-2">  
					<button id="ui-pagination-first-<?php echo $_pager ?>" rel="first" name="first" class="first-page pagination-<?php echo $_pager ?> ui-pagination-btn1 ui-disabled-pagination-button-btn" disabled>
						<img src="<?php echo image_path('pagination/first') ?>" class="navbar-nav-img ui-display-none " id="ui-nav-enabled-first-img">
						<img src="<?php echo image_path('pagination/first-disabled') ?>" class="navbar-nav-img " id="ui-nav-disabled-first-img" >
					</button>   
				</li>	 
				<li>	 
					<button id="ui-pagination-prev-<?php echo $_pager ?>" rel="prev" name="prev" class="prev-page pagination-<?php echo $_pager ?> ui-pagination-btn1 ui-disabled-pagination-button-btn" disabled >
						<img src="<?php echo image_path('pagination/prev') ?>" class="navbar-nav-img ui-display-none " id="ui-nav-enabled-prev-img">
						<img src="<?php echo image_path('pagination/prev-disabled') ?>" class="navbar-nav-img " id="ui-nav-disabled-prev-img">
					</button>   
				</li>	  
				<li class="ui-active-total-page ">
					<span id="ui-total-pages-<?php echo $_pager ?>" class="ui-total-pages ui-pagination-size"> 
						<?php $_i = 10; $_total = count($_totalRecords)/$_i; echo 'Page:&nbsp; '; echo ($_totalRecords ? '1':'0').' of ' ?><?php echo fmod(count($_totalRecords),$_i) ? (floor(++$_total)):$_total  ?>    
					</span> 
				</li>
				<li>	 
					<button id="ui-pagination-next-<?php echo $_pager ?>" rel="next" name="next" class="next-page">
						<img src="<?php echo image_path('pagination/next') ?>" class="navbar-nav-img " id="ui-nav-enabled-next-img">
						<img src="<?php echo image_path('pagination/next-disabled') ?>" class="navbar-nav-img ui-display-none" id="ui-nav-disabled-next-img">
					</button>   
				</li>	  
				<li>	 
					<button id="ui-pagination-last-<?php echo $_pager ?>" rel="last" name="last" class="last-page pagination-<?php echo $_pager ?> ui-pagination-btn1">
						<img src="<?php echo image_path('pagination/last') ?>" class="navbar-nav-img " id="ui-nav-enabled-last-img">
						<img src="<?php echo image_path('pagination/last-disabled') ?>" class="navbar-nav-img ui-display-none " id="ui-nav-disabled-last-img">
					</button>   
				</li>	  
			</ul>	  
		</div>
	</div>
	<div class="col-sm-3" style="border:0px solid #f00!important;">
		<div class="ui-total-display">
			<ul class="ui-pagination-list ui-pagination-action">  
				<li>	 
					<span id="ui-total-content-display-<?php echo $_pager ?>" class="ui-total-pages ui-pagination-display ui-pagination-size-text"> 
						<?php $_i = 10; echo 'Displaying:&nbsp;&nbsp;'; echo '1 - ' ?><?php echo count($_totalRecords) < 15 ? count($_totalRecords):$_i ?> <?php echo ' of '.count($_totalRecords).'&nbsp;&nbsp;Records'  ?>    
					</span> 
				</li>	  
			</ul>
		</div>				 					 
	</div>
	<div class="ui-clear-fix"></div>		 
</div>


<div class="ui-pagination"> 
	<div class="col-sm-4" style="border:0px solid #f00!important;">
		<ul class="ui-pagination-list ui-pagination-action nav">  
			<li class="ui-toolbar-sm-2">  
				<div class="ui-pagination-panel" id="ui-pager-size">
					<span class="ui-pagination-size-text" >Page Size: # </span> 
					<select onclick="" name="limit" class="pagination-pagesize" id="pagination-limit" rel="limit" class="ui-pagination-input-xsm-2"> 
						<option value="5" >5</option>
						<option value="10" selected >10</option>
						<option value="15" >15</option>
						<option value="20" >20</option>
						<option value="30" >30</option> 
						<option value="50" >50</option>
						<option value="100" >100</option>
					</select>
				</div>
			</li>	 
		</ul>	 
		<input type="hidden" class="form-control" id="pagination-offset" name="offset" value="0">
	</div>
	<div class="col-sm-4" style="border:0px solid #f00!important;">
		<div class="ui-pagination-content ui-pagination"> 
			<ul class="nav navbar-nav ui-pagination-action"> 
				<li class="ui-toolbar-sm-2">  
					<button id="ui-pagination-first-<?php echo $_pager ?>" rel="first" name="first" class="first-page pagination-<?php echo $_pager ?> ui-pagination-btn1 ui-disabled-pagination-button-btn" disabled>
						<img src="<?php echo image_path('pagination/first') ?>" class="navbar-nav-img ui-display-none " id="ui-nav-enabled-first-img">
						<img src="<?php echo image_path('pagination/first-disabled') ?>" class="navbar-nav-img " id="ui-nav-disabled-first-img" >
					</button>   
				</li>	 
				<li>	 
					<button id="ui-pagination-prev-<?php echo $_pager ?>" rel="prev" name="prev" class="prev-page pagination-<?php echo $_pager ?> ui-pagination-btn1 ui-disabled-pagination-button-btn" disabled >
						<img src="<?php echo image_path('pagination/prev') ?>" class="navbar-nav-img ui-display-none " id="ui-nav-enabled-prev-img">
						<img src="<?php echo image_path('pagination/prev-disabled') ?>" class="navbar-nav-img " id="ui-nav-disabled-prev-img">
					</button>   
				</li>	  
				<li class="ui-active-total-page ">
					<span id="ui-total-pages-<?php echo $_pager ?>" class="ui-total-pages ui-pagination-size"> 
						<?php $_i = 10; $_total = count($_totalRecords)/$_i; echo 'Page:&nbsp; '; echo ($_totalRecords ? '1':'0').' of ' ?><?php echo fmod(count($_totalRecords),$_i) ? (floor(++$_total)):$_total  ?>    
					</span> 
				</li>
				<li>	 
					<button id="ui-pagination-next-<?php echo $_pager ?>" rel="next" name="next" class="next-page">
						<img src="<?php echo image_path('pagination/next') ?>" class="navbar-nav-img " id="ui-nav-enabled-next-img">
						<img src="<?php echo image_path('pagination/next-disabled') ?>" class="navbar-nav-img ui-display-none" id="ui-nav-disabled-next-img">
					</button>   
				</li>	  
				<li>	 
					<button id="ui-pagination-last-<?php echo $_pager ?>" rel="last" name="last" class="last-page pagination-<?php echo $_pager ?> ui-pagination-btn1">
						<img src="<?php echo image_path('pagination/last') ?>" class="navbar-nav-img " id="ui-nav-enabled-last-img">
						<img src="<?php echo image_path('pagination/last-disabled') ?>" class="navbar-nav-img ui-display-none " id="ui-nav-disabled-last-img">
					</button>   
				</li>	  
			</ul>	  
		</div>
	</div>
	<div class="col-sm-3" style="border:0px solid #f00!important;">
		<div class="ui-total-display">
			<ul class="ui-pagination-list ui-pagination-action">  
				<li>	 
					<span id="ui-total-content-display-<?php echo $_pager ?>" class="ui-total-pages ui-pagination-display ui-pagination-size-text"> 
						<?php $_i = 10; echo 'Displaying:&nbsp;&nbsp;'; echo '1 - ' ?><?php echo count($_totalRecords) < 15 ? count($_totalRecords):$_i ?> <?php echo ' of '.count($_totalRecords).'&nbsp;&nbsp;Records'  ?>    
					</span> 
				</li>	  
			</ul>
		</div>				 					 
	</div>
	<div class="ui-clear-fix"></div>		 
</div>

	

