<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Student Registration System</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="<?=base_url()?>assets/global_assets/js/main/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?=base_url()?>assets/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="<?=base_url()?>assets/assets/js/app.js"></script>
	<script src="<?=base_url()?>assets/global_assets/js/demo_pages/login.js"></script>
	<!-- /theme JS files -->

</head>

<body class="bg-slate-800" style="background-image: url('<?=base_url()?>assets/background.jpeg');height: 100%;background-position: center;
  background-repeat: no-repeat;
  background-size: cover; ">

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login card -->
				
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-people icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Student Registration System</h5>
							</div>

							
                            <div class="form-group">
								<a href="<?=base_url()?>AdminController/AdminLogin"><button type="button" class="btn btn-primary btn-block">Sign In As Admin<i class="icon-circle-right2 ml-2"></i></button></a>
							</div><div class="form-group">
								<a href="<?=base_url()?>AdminController/AdminLogin"><button type="button" class="btn btn-warning btn-block">Sign In As Lecturer <i class="icon-circle-right2 ml-2"></i></button></a>
							</div><div class="form-group">
								<a href="<?=base_url()?>StudentController/StudentLogin"><button type="button" class="btn btn-success btn-block">Sign in As Student <i class="icon-circle-right2 ml-2"></i></button></a>

							
						</div>
					</div>
				
				<!-- /login card -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
