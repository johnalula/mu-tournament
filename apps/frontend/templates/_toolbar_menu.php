 <!-- Fixed navbar --> 
			 <ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo url_for('home/index') ?>">Home</a></li>
				<li><a href="<?php echo url_for('student/index') ?>">Student</a></li>
				<li><a href="<?php echo url_for('course/index') ?>">Course</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					 <li><a href="<?php echo url_for('student/index') ?>">Action</a></li>
					 <li><a href="#">Another action</a></li>
					 <li><a href="#">Something else here</a></li>
					 <li role="separator" class="divider"></li>
					 <li class="dropdown-header">Nav header</li>
					 <li><a href="#">Separated link</a></li>
					 <li><a href="#">One more separated link</a></li>
				  </ul>
				</li>
			 </ul>
