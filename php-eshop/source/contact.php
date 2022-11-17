<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">

		<?php include 'includes/navbar.php'; ?>

		<div class="content-wrapper">
			<div class="container">

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-sm-12">
							<h2>Contact</h2>
							<form class="form-horizontal" method="POST" action="mail.php">
								<div class="form-group">
									<label for="name" class="col-sm-2 control-label">Name</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" id="name" name="name" required>
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-sm-2 control-label">Email</label>

									<div class="col-sm-10">
										<input type="email" class="form-control" id="email" name="email" required>
									</div>
								</div>
								<div class="form-group">
									<label for="subject" class="col-sm-2 control-label">Subject</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" id="subject" name="subject" required>
									</div>
								</div>
								<div class="form-group">
									<label for="message" class="col-sm-2 control-label">Message</label>

									<div class="col-sm-10">
										<textarea class="form-control" id="message" name="message" required></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-primary" name="send"><i class="fa fa-envelope"></i> Send</button>
									</div>
								</div>
						</div>
					</div>
				</section>

			</div>
		</div>

		<?php include 'includes/footer.php'; ?>
	</div>

</body>

</html>