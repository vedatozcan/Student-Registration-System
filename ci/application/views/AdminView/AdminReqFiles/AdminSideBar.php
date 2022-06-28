	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<?=$this->session->admin_role=='admin'?
								'<a><img src="https://thumbs.dreamstime.com/b/admin-sign-laptop-icon-stock-vector-166205404.jpg" width="60" height="60" class="rounded-circle" alt=""></a>'
								:'<a><img src="https://ecdn.teacherspayteachers.com/thumbitem/Superhero-TEACHER-logo-4676714-1568886124/original-4676714-2.jpg" width="60" height="60" class="rounded-circle" alt=""></a>'
								?>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold"><?= $this->session->admin_role=='admin'?'ADMINISTRATOR':$this->session->lecturer_firstname.' '.$this->session->lecturer_lastname; ?></div>
							</div>

							
						</div>
					</div>
				</div>
				<!-- /user menu -->

				<?php if($this->session->admin_role=='admin'){?>
				<!-- Main navigation -->
				
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item">
							<a href="<?=base_url('')?>AdminController/AdminHome" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									HomePage
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('')?>AdminController/AdminStudentList" class="nav-link">
								<i class="icon-user"></i>
								<span>
									Student List
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('')?>AdminController/AdminCourseList" class="nav-link">
								<i class="icon-user"></i>
								<span>
									Course List
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('')?>AdminController/AdminLecturerList" class="nav-link">
								<i class="icon-user"></i>
								<span>
									Lecturer List
								</span>
							</a>
						</li>

					</ul>
				</div>
				<!-- /main navigation -->
				<?php }else{ ?> 
				<!-- Main navigation -->
				
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item">
							<a href="<?=base_url('')?>AdminController/LecturerHome" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									HomePage
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('')?>AdminController/LecturerSectionList" class="nav-link">
								<i class="icon-user"></i>
								<span>
									Section List
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('')?>AdminController/LecturerStudentList" class="nav-link">
								<i class="icon-user"></i>
								<span>
									My Students
								</span>
							</a>
						</li>

					</ul>
				</div>
				<!-- /main navigation -->
				
				<?php } ?>

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->