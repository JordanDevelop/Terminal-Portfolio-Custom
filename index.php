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
                starDensity: 1.1,
                mouseScale: 0.2
            });
        </script>
        <article id="sections">
            <?php
              include "blog/blog-latest.php";
              include "blog/blog-new.php";
              include "blog/blog-cat.php";
              include "portfolio.php";
              include "contact.php";
            ?>
        </article>
        <aside id="help" class="section">
            <h2><!-- Commands: --></h2>
            <p>Type any of the following commands to find out more about me:</p>
            <ul class="help">
                <li>blog</li>
                <li>contact</li>
                <li>clear</li>
            </ul>
        </aside>
        <aside id="blog" class="section">
            <h2><!-- Commands: --></h2>
            <p>Type any of the following blog commands:</p>
            <div class="blog-list">
                <div class="list-test">
                    <ul>
                        <li>blog -n</li>
                        <li>blog -l</li>
                        <li>blog -c</li>
                    </ul>
                </div>
                <div class="list-next">
                    <ul>
                        <li>most recent post</li>
                        <li>latest posts</li>
                        <li>categories</li>
                    </ul>
                </div>
            </div>
        </aside>
        <div class="container-fluid">
            <aside id="error" class="section">
                <p class="error">&gt;&gt; Sorry that command could not be found, please try again or try using help</p>
            </aside>
        </div>
        <div id="resume-container">

            <!-- <script type="application/javascript">
				$(function () {
					$(".type").typed({
						// Waits 1000ms after typing "First"
						strings: ['^6500 type the command <font color="#44C8DA">help</font> to continue...']
					});
				});
			</script> -->

            <div id="help-type">
                <div class="type">type the command
                    <font color="#44C8DA">help</font> to continue...</div>
            </div>
            <div id="visible-sections"> </div>
            <!-- Testing new commands
            <div id="visible-sections">

                <div class="completed-command"> <span>root@jordans.io ~ </span>

                    <div class="output">blog
                    </div>
                </div>
                <div>
                  <h1>Testing</h1>
                </div>
            </div>
            -->
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
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="http://localhost:35729/livereload.js"></script>
    <script type="text/javascript" src="js/marmotte.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="js/pathLoader.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/modalEffects.js"></script>
</body>

</html>
