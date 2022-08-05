<?php include 'incl/header.php';?>

<body>
	<!-- site -->
	<div class="site">
		<?php include 'incl/nav.php';?>
		<!-- site__body -->
		<div class="site__body">
			<div class="block-header block-header--has-breadcrumb block-header--has-title">
				<div class="container">
					<div class="block-header__body">
						<nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
							<ol class="breadcrumb__list">
								<li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
								<li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first"><a href="index-1.html" class="breadcrumb__item-link">Home</a></li>
								<li class="breadcrumb__item breadcrumb__item--parent"><a href="" class="breadcrumb__item-link">Breadcrumb</a></li>
								<li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page"><span class="breadcrumb__item-link">Current Page</span></li>
								<li class="breadcrumb__title-safe-area" role="presentation"></li>
							</ol>
						</nav>
						<h1 class="block-header__title">Contact Us</h1>
					</div>
				</div>
			</div>
			<div class="block">
				<div class="container container--max--lg">
					<div class="card contacts">
						<div class="contacts__map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d125968.60310956927!2d7.4651794!3d9.3757753!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e745f4cd62fd9%3A0x53bd17b4a20ea12b!2sAbuja!5e0!3m2!1sen!2sng!4v1659568749496!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
						<!-- <div class="contacts__map"><iframe src="https://maps.google.com/maps?q=Holbrook-Palmer%20Park&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div> -->
						<div class="card-body card-body--padding--2">
							<div class="row">
								<div class="col-12 col-lg-6 pb-4 pb-lg-0">
									<div class="mr-1">
										<h4 class="contact-us__header card-title">Our Address</h4>
										<div class="contact-us__address">
											<p>Abuja, Nigeria<br>Email: fsp@example.com<br>Phone Number: +234 913 0054 557</p>
											<p><strong>Opening Hours</strong><br>Monday to Friday: 8am-8pm<br>Saturday: 8am-6pm<br>Sunday: 10am-4pm</p>
											<!-- <p><strong>Comment</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit suscipit mi, non tempor nulla finibus eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
										</div>
									</div>
								</div>
								<div class="col-12 col-lg-6">
									<div class="ml-1">
										<h4 class="contact-us__header card-title">Leave us a Message</h4>
										<form>
											<div class="form-row">
												<div class="form-group col-md-6"><label for="form-name">Your Name</label> <input type="text" id="form-name" class="form-control" placeholder="Your Name"></div>
												<div class="form-group col-md-6"><label for="form-email">Email</label> <input type="email" id="form-email" class="form-control" placeholder="Email Address"></div>
											</div>
											<div class="form-group"><label for="form-subject">Subject</label> <input type="text" id="form-subject" class="form-control" placeholder="Subject"></div>
											<div class="form-group"><label for="form-message">Message</label> <textarea id="form-message" class="form-control" rows="4"></textarea></div><button type="submit" class="btn btn-primary">Send Message</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="block-space block-space--layout--before-footer"></div>
		</div><!-- site__body / end -->
		<!-- site__footer -->
		<?php include 'incl/footer.php';?>