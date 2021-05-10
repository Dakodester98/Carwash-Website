<!DOCTYPE HTML>
<html>
    <head>
        <title>Contact - Twenty by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
    <body class="contact is-preload">
        <div id="page-wrapper">

            <!-- Header -->
                <header id="header">
                    <h1 id="logo"><a href="index.html">Twenty <span>by HTML5 UP</span></a></h1>
                    <nav id="nav">
                        <ul>
                            <li class="current"><a href="index.html">Welcome</a></li>
                            <li class="submenu">
                                <a href="#">Layouts</a>
                                <ul>
                                    <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                    <li><a href="right-sidebar.html">Right Sidebar</a></li>
                                    <li><a href="no-sidebar.html">No Sidebar</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li class="submenu">
                                        <a href="#">Submenu</a>
                                        <ul>
                                            <li><a href="#">Dolore Sed</a></li>
                                            <li><a href="#">Consequat</a></li>
                                            <li><a href="#">Lorem Magna</a></li>
                                            <li><a href="#">Sed Magna</a></li>
                                            <li><a href="#">Ipsum Nisl</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#" class="button primary">Sign Up</a></li>
                        </ul>
                    </nav>
                </header>

            <!-- Main -->
                <article id="main">

                    <header class="special container">
                        <span class="icon solid fa-envelope"></span>
                        <h2>Get In Touch</h2>
                        <p>Use this form to send me a email asking any question you may have!</p>
                    </header>

					

                    <!-- One -->
                        <section class="wrapper style4 special container medium">

                            <!-- Content -->
                                <div class="content">
                                    <form form method="POST" action="contact.php">
                                        <div class="row gtr-50">
                                            <div class="col-6 col-12-mobile">
                                                <input type="text" name="name" placeholder="Name" />
                                            </div>
                                            <div class="col-6 col-12-mobile">
                                                <input type="text" name="email" placeholder="Email" />
                                            </div>
                                            <div class="col-12">
                                                <input type="text" name="subject" placeholder="Subject" />
                                            </div>
                                            <div class="col-12">
                                                <textarea name="message" placeholder="Message" rows="7"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <ul class="buttons">
                                                    <li><input type="submit" name="sumbit" class="special" value="Send Message" /></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                        </section>

						<?php
                        if (isset($_POST ['submit'])){
                            $to = "CPDriver1998@gmail.com";
							$from = $_POST ["$visitor_email"];

                            $name = $_POST['name'];
                            $visitor_email = $_POST['email'];
                            $visitor_subject = $_POST['subject'];
                            $message = $_POST['message'];
                        
                            $email_body = "You have received a new message from the user $name.\n".
                                "Here is the message:\n $message";
							
							

							$headers = "From: $email_from \r\n";
							
							$headers .= "Reply-To: $visitor_email \r\n";
							
							mail($to,$email_subject,$email_body,$message,$headers);
							echo "Mail Sent we will contact you shortly";

							
						}
                    ?>

                </article>

            <!-- Footer -->
                <footer id="footer">

                    <ul class="icons">
                        <li><a href="#" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon brands circle fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon brands circle fa-google-plus-g"><span class="label">Google+</span></a></li>
                        <li><a href="#" class="icon brands circle fa-github"><span class="label">Github</span></a></li>
                        <li><a href="#" class="icon brands circle fa-dribbble"><span class="label">Dribbble</span></a></li>
                    </ul>

                    <ul class="copyright">
                        <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                    </ul>

                </footer>

        </div>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.dropotron.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollgress.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/browser.min.js"></script>
            <script src="assets/js/breakpoints.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>
