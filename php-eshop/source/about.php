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
							<h2>About</h2>
							<div class="about-section">
								<h1>About Us Page</h1>
								<p>Some text about who we are and what we do.</p>
								<p>Resize the browser window to see that this page is responsive by the way.</p>
							</div>

							<h2 style="text-align:center">Our Team</h2>
							<div class="row">
								<div class="column">
									<div class="card">
										<img src="https://scontent.fsgn4-1.fna.fbcdn.net/v/t39.30808-6/295756796_3211387599148726_5970090615479512792_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=174925&_nc_ohc=JUTa4wWAJaEAX85bEmn&_nc_ht=scontent.fsgn4-1.fna&oh=00_AfCHxFKvgcOGgr3OJvbYIzgJVWrBJnVfgCIzf8GGHPSx_g&oe=637A861B" alt="Jane" style="width:100%">
										<div class="container">
											<h2>Khanh Huynh</h2>
											<p class="title">CEO & Founder</p>
											<p>Some text that describes me lorem ipsum ipsum lorem.</p>
											<p>jane@example.com</p>
											<p><button class="button">Contact</button></p>
										</div>
									</div>
								</div>

								<div class="column">
									<div class="card">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_xKsMg4Zv3SP9RaIXXp14nGZDb2srylnKGw&usqp=CAU" alt="Mike" style="width:100%">
										<div class="container">
											<h2>Dat Hoang</h2>
											<p class="title">Art Director</p>
											<p>Some text that describes me lorem ipsum ipsum lorem.</p>
											<p>mike@example.com</p>
											<p><button class="button">Contact</button></p>
										</div>
									</div>
								</div>

								<div class="column">
									<div class="card">
										<img src="https://i.bloganchoi.com/bloganchoi.com/wp-content/uploads/2021/08/cong-chua-disney-49-696x932.jpg?fit=700%2C20000&quality=95&ssl=1" alt="John" style="width:100%">
										<div class="container">
											<h2>Thanh Le</h2>
											<p class="title">Designer</p>
											<p>Some text that describes me lorem ipsum ipsum lorem.</p>
											<p>john@example.com</p>
											<p><button class="button">Contact</button></p>
										</div>
									</div>
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
<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
		margin: 0;
	}

	html {
		box-sizing: border-box;
	}

	*,
	*:before,
	*:after {
		box-sizing: inherit;
	}

	.column {
		float: left;
		width: 33.3%;
		margin-bottom: 16px;
		padding: 0 8px;
	}

	.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		margin: 8px;
	}

	.about-section {
		padding: 50px;
		text-align: center;
		background-color: #474e5d;
		color: white;
	}

	.container {
		padding: 0 16px;
	}

	.container::after,
	.row::after {
		content: "";
		clear: both;
		display: table;
	}

	.title {
		color: grey;
	}

	.button {
		border: none;
		outline: 0;
		display: inline-block;
		padding: 8px;
		color: white;
		background-color: #000;
		text-align: center;
		cursor: pointer;
		width: 20%;
	}

	.button:hover {
		background-color: #555;
	}

	@media screen and (max-width: 650px) {
		.column {
			width: 100%;
			display: block;
		}
	}
</style>

</html>