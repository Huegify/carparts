﻿<?php include 'incl/header.php'?>

<body>
	<!-- site -->
	<div class="site">
		<?php include 'incl/nav.php';?><!-- site__body -->
		<div class="site__body">
			<div class="block-space block-space--layout--spaceship-ledge-height"></div>
			<div class="block">
				<div class="container">
					<div class="not-found">
						<div class="not-found__404 mt-5">Oops! Error 404</div>
						<div class="not-found__content">
							<h1 class="not-found__title">Page Not Found</h1>
							<p class="not-found__text">We can't seem to find the page you're looking for.<br>Try to use the search.</p>
							<form class="not-found__search"><input type="text" class="not-found__search-input form-control" placeholder="Search Query..."> <button type="submit" class="not-found__search-button btn btn-primary">Search</button></form>
							<p class="not-found__text">Or go to the home page to start over.</p><a class="btn btn-secondary btn-sm" href="index-1.html">Go To Home Page</a>
						</div>
					</div>
				</div>
			</div>
			<div class="block-space block-space--layout--before-footer"></div>
		</div><!-- site__body / end -->
		<!-- site__footer -->
		<?php include 'incl/footer.php';?>