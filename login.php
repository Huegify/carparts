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
								<h3 class="card-title">Login</h3>
								<form>
									<div class="form-group"><label for="signin-email">Email address</label> <input id="signin-email" type="email" class="form-control" placeholder="customer@example.com"></div>
									<div class="form-group"><label for="signin-password">Password</label> <input id="signin-password" type="password" class="form-control" placeholder="Secret word"> <small class="form-text text-muted"><a href="">Forgot password?</a></small></div>
									<div class="form-group">
										<div class="form-check">
											<span class="input-check form-check-input">
												<span class="input-check__body">
													<input class="input-check__input" type="checkbox" id="signin-remember"> 
													<span class="input-check__box"></span> 
													<span class="input-check__icon">
														<svg width="9px" height="7px">
															<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"></path>
														</svg> 
													</span>
												</span>
											</span>
											<label class="form-check-label" for="signin-remember">Remember Me</label>
										</div>
									</div>
									<div class="form-group mb-0"><button type="submit" class="btn btn-primary mt-3">Login</button></div>
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