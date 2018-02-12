<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title><?php echo __('MU-Sport Management System') ?></title> 
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
	
	<body > 
	<div id="ui-container-box">
		<div class="ui-container-box">
			<header>
				<div class="ui-header-container"> 
					<div class="ui-header">
						<div class="container">
							<div class="row">
								<div class="col-sm-6">
									<div class="ui-header-logo">
										<table >  
											<tr>
												<td rowspan="2" class="bigText1">
													<span class="logo-title">
														<a href="<?php echo url_for('home/index') ?>" title="<?php echo __('Mekelle University') ?>">
															<img class="logo-img-right" src="<?php echo image_path('images/mulogo') ?>">
														</a>
													</span>
												</td>
												<td rowspan="2" class="bigText">
													<span class="logo-title">
														<a href="<?php echo url_for('home/index') ?>" title="<?php echo __('Mekelle University') ?>">
															MU
														</a>
													</span>
												</td>
												<td class="title">
													<span class="title">
														<a href="<?php echo url_for('home/index') ?>">Mekelle University</a>
													</span>
												</td>
											</tr>
											<tr>
												<td class="title">
													<span class="local-title">
														<a href="<?php echo url_for('home/index') ?>">መቐለ ዩኒቨርሲቲ </a>
													</span>
												</td>
											</tr>
											<tr>
												<td colspan=2 class="null-td"> </td>
											</tr> 
										</table>										
									</div><!-- end of ui-footer-logo -->
								</div><!-- end of span4 --> 
								<div class="col-sm-6">
									<div class="ui-header-logo" style="float:right!important;">
										<table >  
											<tr>
												<td class="title" style="text-align:center!important;">
													<span class="title ">
														<a href="<?php echo url_for('home/index') ?>">
															African Universities 
														</a>
													</span>
												</td>
												<td rowspan="2" class="bigText-left">
													<span class="logo-title-right ">
														<a href="<?php echo url_for('home/index') ?>" title="<?php echo __('African Universities Football Championship') ?>">
															AUFC
														</a>
													</span>
												</td>
											</tr>
											<tr>
												<td class="title" style="text-align:center!important;">
													<span class="local-title ui-title-right">
														<a href="<?php echo url_for('home/index') ?>">Football Championship</a>
													</span>
												</td>
											</tr>
											<tr>
												<td colspan=2 class="null-td"> </td>
											</tr> 
										</table>									
									</div><!-- end of ui-footer-logo -->
								</div><!-- end of span8 -->
							</div><!-- end of row -->
						</div><!-- end of container -->
					</div><!-- end of ui-footer --> 
				</div><!-- end of ui-footer-container -->
			</header>
			<div class="ui-main-menu-container ">
				<div class="ui-main-menu-box">
					<div class="container">
						<div class="row">
							
							<nav class="navbar navbar-default">
								<div class="container-fluid">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button> 
									</div>
									<div id="navbar" class="navbar-collapse collapse">
										<ul class="nav navbar-nav">
											<li class="<?php echo $sf_request->getParameter('module') == 'home' ? 'active':''  ?>"><a href="<?php echo url_for('home/index') ?>">Home</a></li>
											<li>
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About AUFC</a>
											</li>
											<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Games</a>
												<ul class="dropdown-menu">  
													<li>
														<a href="<?php echo url_for('register/new') ?>">
															<?php echo __('About Journal') ?>
														</a>
													</li> 
													<li>
														<a href="<?php echo url_for('register/new') ?>">
															<?php echo __('Aims and Scops') ?>
														</a>
													</li> 
													<li class="">
														<a href="<?php echo url_for('register/new') ?>">
															<?php echo __('Editorial Board') ?>
														</a>
													</li>
													<li class="<?php echo ($sf_request->getParameter('module') == 'student') ? 'active':'' ?>">
														<a href="<?php echo url_for('register/new') ?>">
															<?php echo __('Publication Ethics') ?>
														</a>
													</li>
													<li class="<?php echo ($sf_request->getParameter('module') == 'campus') ? 'active':'' ?>">
														<a href="<?php echo url_for('register/new') ?>">
															<?php echo __('Indexing Databases') ?>
														</a>
													</li>  
													<li class="<?php echo ($sf_request->getParameter('module') == 'campus') ? 'active':'' ?>">
														<a href="<?php echo url_for('register/new') ?>">
															<?php echo __('Related Links') ?>
														</a>
													</li>   
												</ul>
											</li>
											<li><a href="<?php echo url_for('register/new') ?>">Contact Us</a></li>
										</ul> 
										 
										<?php if(!$sf_user->isAuthenticated()): 	?> 
										<ul class="nav navbar-nav navbar-right">
											<li><a href="<?php echo url_for('login/index') ?>">Login</a></li>
											<li><a href="<?php echo url_for('register/new') ?>">Register</a></li>
										</ul>
										<?php endif; 	?> 
									</div><!--/.nav-collapse -->
								</div><!--/.container-fluid -->
							</nav>
							
						</div><!-- end of ui-main-menu-box -->
					</div><!-- end of ui-main-menu-box -->
					<div class="clear-fix"></div>
				</div><!-- end of ui-main-menu-box -->
			</div><!-- end of ui-main-menu-container -->
			
			<div id="ui-wrapper-container">
				<div class="ui-wrapper-box" >
					<div class="container" style="border:1px solid #f00!important;">
						<div class="row" style="border:0px solid #f00!important;">
							<div class="col-sm-12">
								<div class="ui-main1 ui-content-body1" id="ui-main-body">	
									<?php echo $sf_content ?>	
								</div><!-- end of main --> 
							</div><!-- end of ui-wrapper-box -->
						</div><!-- end of ui-wrapper-box -->
					</div><!-- end of ui-wrapper-box -->
				</div><!-- end of ui-wrapper-box -->
			</div><!-- end of ui-wrapper-container -->
			 
		</div><!-- end of ui-container-box -->
	</div><!-- end of ui-container-box -->
	<footer class="blog-footer">
		  
		<div class="ui-footer-container"> 
			<div class="ui-footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="ui-footer-logo">
								<table >  
									<tr>
										<td rowspan="2" class="bigText">
											<span class="logo-title">
												<a href="<?php echo url_for('home/index') ?>" title="<?php echo __('Mekelle University - International Journal of Business and Development Studies') ?>">MU-AUFC</a>
											</span>
										</td>
										<td class="title"><span class="title"><a href="<?php echo url_for('home/index') ?>">Mekelle University</a></span></td>
									</tr>
									<tr>
										<td class="title"><span class="local-title"><a href="<?php echo url_for('home/index') ?>">መቐለ ዩኒቨርሲቲ </a></span></td>
									</tr>
									<tr>
										<td colspan=2 class="null-td"> </td>
									</tr>
									<tr>
										<td colspan=4 class="ui-title-location"> Arid Campus,  Mekelle, Ethiopia</td>
									</tr> 
								</table>										
							</div><!-- end of ui-footer-logo -->
						</div><!-- end of span4 --> 
						<div class="col-sm-6">
							<div class="ui-footer-logo" style="float:right!important;">
								<table >  
									<tr>
										<td class="title">
											<span class="local-title ui-bottom-title"><a href="#" >Design by: Yohannes Haftom</a></span>
										</td>
									</tr>
									<tr>
										<td colspan=2 class="null-td"> </td>
									</tr>
									<tr>
										<td colspan=4 class="ui-title-link">Email:&nbsp;<a href="mailto:send2joni@gmail.com">send2joni@gmail.com</a></td>
									</tr> 
								</table>										
							</div><!-- end of ui-footer-logo -->
						</div><!-- end of span8 -->
					</div><!-- end of row -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="ui-title-link">
								Powered by <a href="http://www.mu.edu.et/cbds" target="_blank" title="<?php echo __('College of Business and Development Studies, Mekelle University') ?>">MU-CBDS</a> © &nbsp;2017 All Rights Reserved
							</div><!-- end of container -->
						</div><!-- end of container -->
					</div><!-- end of container -->
				</div><!-- end of container -->
			</div><!-- end of ui-footer --> 
		</div><!-- end of ui-footer-container -->
	</footer>
</body>
</html>

    
