<?php include 'incl/header.php';?>
<body>
	<!-- site -->
	<div class="site">
		<?php include 'incl/nav.php';?>
		<!-- site__body -->
		<div class="site__body">
			<div class="block-space block-space--layout--after-header"></div>
			<div class="block mt-5">
                 <div class="row justify-content-center">
					<div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
						<div class="card ml-md-3 mr-md-3">
							<div class="card-body card-body--padding--2">
								<h3 class="card-title">Register</h3>
								<form>
									<div class="form-group"><label for="signup-email">Email address</label> <input id="signup-email" type="email" class="form-control" placeholder="customer@example.com"></div>
									<div class="form-group"><label for="signup-password">Password</label> <input id="signup-password" type="password" class="form-control" placeholder="Secret word"></div>
									<div class="form-group"><label for="signup-confirm">Repeat password</label> <input id="signup-confirm" type="password" class="form-control" placeholder="Secret word"></div>
									<div class="form-group mb-0"><button type="submit" class="btn btn-primary mt-3">Register</button></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="block-space block-space--layout--before-footer"></div>
		</div><!-- site__body / end -->
		<!-- site__footer -->
		<?php include 'incl/footer.php';?>