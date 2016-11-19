<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jordans.io Portfolio</title>
	<!-- js files -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/animatedModal.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/custombox.min.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
	<script type="text/javascript" src="js/typed.js"></script>
	<script type="text/javascript" src="js/jquery-starfield.min.js"></script>
	<script type="text/javascript" src="js/hyphenate.min.js"></script>
	<!-- command modal contents -->
	<script type="text/javascript" src="commands/blog.js"></script>
	<script type="text/javascript" src="commands/contact.js"></script>
	<!-- css files -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/effect1.css" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body id="resume" tabindex="0">
	<div class="container-fluid" id="container">
		<!-- initial header -->
		<header class="ip-header">
			<h1 class="ip-logo">

				<style>
					header.ip-header {
						display: none;
					}
				</style>

			<script>
				$(function () {
					$(".welcome").typed({
						// Waits 1000ms after typing "First"
						strings: ["^500 Welcome... ^1300 to jordans.io ^200 portfolio!",'<span style="color: transparent">.</span>']
					});
				});
			</script>
			<div class="welcome"></div>
				</h1>
			<div class="ip-loader">
				<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
					<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z" />
					<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z" /> </svg>
			</div>
		</header>
	</div>
	<!-- top bar -->
	<div class="container">
		<div class="codrops-top clearfix"></div>

		<script type="application/javascript">
			$('#resume').starfield({
				starDensity: 1.1
				, mouseScale: 0.2
			});
		</script>
		<article id="sections">
			<section id="blog" class="section">
				<section class="blog-posts">
					<br />
					<h1 class="entry-title">Oldest Blog Title</h1>
					<div class="blog-image"> <img alt="Blog Post" src="images/blog-image.jpg" class="img-fluid"> </div>
					<div class="clearfix"></div>
					<div class="entry-details"> <span class="author">Author <a class="author-name" href="#">Jordan</a></span> <span class="posted-on">Posted on <a class="time-entry" href="#" rel="bookmark"> <time class="entry-date published updated" datetime="2016-10-30T20:35:07+00:00">October 30, 2016</time>
					</a></span> </div>
					<div class="entry-content">
						<p class="blogPV hyphenate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et ante purus. In tincidunt pulvinar elementum. Sed dignissim, felis nec suscipit luctus, ante mauris ullamcorper sem, rutrum interdum ipsum turpis in risus. Phasellus sagittis eu purus sit amet tincidunt. Morbi ligula enim, sagittis vitae velit vitae, elementum convallis eros...</p>
						<!-- Large modal -->
						<script>
						</script>
					</div>
					<div class="custom-btn">
						<button type="button" class="read-more btn btn-primary btn-sm" data-toggle="modal" data-target="#blogModal3">Read more...</button>
					</div>
				</section>
				<section class="blog-posts">
					<h1 class="entry-title">Blog Title</h1>
					<div class="blog-image"> <img alt="Blog Post" src="http://www.thenology.com/wp-content/uploads/2014/07/1500x500-New-York-Skyline-Twitter-Header0027.jpg" class="img-fluid"> </div>
					<div class="clearfix"></div>
					<div class="entry-details"> <span class="author">Author <a class="author-name" href="#">Jordan</a></span> <span class="posted-on">Posted on <a class="time-entry" href="#" rel="bookmark"> <time class="entry-date published updated" datetime="2016-10-30T20:35:07+00:00">October 30, 2016</time>
					</a></span> </div>
					<div class="entry-content">
						<p class="blogPV hyphenate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et ante purus. In tincidunt pulvinar elementum. Sed dignissim, felis nec suscipit luctus, ante mauris ullamcorper sem, rutrum interdum ipsum turpis in risus. Phasellus sagittis eu purus sit amet tincidunt. Morbi ligula enim, sagittis vitae velit vitae, elementum convallis eros...</p>
						<!-- Large modal -->
						<script>
						</script>
					</div>
					<div class="custom-btn">
						<button type="button" class="read-more btn btn-primary btn-sm" data-toggle="modal" data-target="#blogModal3">Read more...</button>
					</div>
				</section>
				<section class="blog-posts">
					<br />
					<h1 class="entry-title">Newest Blog Title</h1>
					<div class="blog-image"> <img alt="Blog Post" src="images/blog-image.jpg" class="img-fluid"> </div>
					<div class="clearfix"></div>
					<div class="entry-details"> <span class="author">Author <a class="author-name" href="#">Jordan</a></span> <span class="posted-on">Posted on <a class="time-entry" href="#" rel="bookmark"> <time class="entry-date published updated" datetime="2016-10-30T20:35:07+00:00">October 30, 2016</time>
					</a></span> </div>
					<div class="entry-content">
						<p class="blogPV hyphenate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et ante purus. In tincidunt pulvinar elementum. Sed dignissim, felis nec suscipit luctus, ante mauris ullamcorper sem, rutrum interdum ipsum turpis in risus. Phasellus sagittis eu purus sit amet tincidunt. Morbi ligula enim, sagittis vitae velit vitae, elementum convallis eros...</p>
						<!-- Large modal -->
					</div>
					<div class="custom-btn">
						<script></script>
						<button type="button" class="read-more btn btn-primary btn-sm" data-toggle="modal" data-target="#blogModal3">Read more...</button>
					</div>
				</section>
			</section>
			<section id="contact" class="section">
				<ul class="entry">
					<li><strong class="contact">Email:</strong> <a href="mailto:jordan@behladesign.com">jordan@behladesign.com</a></li>
					<li><strong class="contact">Facebook:</strong> <a href="https://facebook.com">https://facebook.com</a></li>
					<li><strong class="contact">Twitter:</strong> <a href="https://twitter">https://twitter.com</a></li>
				</ul>
				<div class="contact-submit">
					<button type="button" class="contact btn btn-primary btn-sm" data-toggle="modal" data-target="#contactModal">Contact</button>
				</div>
			</section>
		</article>
		<article class="twilio-instructions">
			<section id="twilio" class="section">
				<h2 class="twilio">Please enter your mobile number:</h2>
				<h3 class="twilio">(numbers are not stored and you will not be spammed, honest)</h3> </section>
			<section id="twilio-in-progress" class="section">
				<h2 class="twilio">Calling, please wait...</h2> </section>
			<section id="twilio-error" class="section">
				<h2 class="twilio">Please enter a valid phone number:</h2> </section>
		</article>
		<aside id="help" class="section">
			<h2><!-- Commands: --></h2>
			<p>Type any of the following commands to find out more about me:</p>
			<ul class="help">
				<li>blog</li>
				<li>contact</li>
				<li>clear</li>
				<!--
				<li>experience</li>
				<li>education</li>
				<li>skills</li>
				<li>interests</li>
				<li>contact</li>
				<li>book</li>
				<li>everything</li>
				<li>asteroids</li>
				<li>download - to download a PDF of all sections</li>
-->
			</ul>
		</aside>
		<div class="container-fluid">
			<aside id="error" class="section">
				<p class="error">&gt;&gt; Sorry that command could not be found, please try again or try using help</p>
			</aside>
		</div>
		<div id="resume-container">

			<script type="application/javascript">
				$(function () {
					$(".type").typed({
						// Waits 1000ms after typing "First"
						strings: ['^6500 type the command <font color="#44C8DA">help</font> to continue...']
					});
				});
			</script>

			<div id="help-type">
				<div class="type"></div>
			</div>
			<div id="visible-sections"> </div>
			<div class="blog-modal">
				<script type="application/javascript">
					document.write(blogModal);
					document.write(blogModal2);
					document.write(blogModal3);
					document.write(contactModal);
				</script>
			</div>
		</div>
	</div>
	<div id="command-line"> <span>root@jordans.io ~ </span>

		<textarea id="commands" class="commands"></textarea>
		<!-- <div id="commands" class="commands"><b></b></div> -->
	</div>

	<!-- Latest compiled and minified JavaScript -->
	<script type="text/javascript" src="js/marmotte.min.js"></script>
	<script type="text/javascript" src="js/script-min.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/pathLoader.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/modalEffects.js"></script>
</body>

</html>
