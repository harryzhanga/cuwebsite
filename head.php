<!--  Template inheritance -->
<?php include 'ti.php'; ?>

<!DOCTYPE html>
<!-- saved from url=(0043)https://getbootstrap.com/examples/carousel/ -->
<html lang="en">
    <head>
        <title>
			Christian Union - <?php startblock('title') ?><?php endblock() ?>
        </title>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta property="og:title" content="Melbourne Union Christian Union"/>
	    <meta property="og:image" content="http://melbourne.cu.org.au/images/oweek.jpg"/>
	    <meta property="og:url" content="http://melbourne.cu.org.au/"/>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Bootstrap and other dependencies -->
        <!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> -->
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js" integrity="sha384-VspmFJ2uqRrKr3en+IG0cIq1Cl/v/PHneDw6SQZYgrcr8ZZmZoQ3zhuGfMnSR/F2" crossorigin="anonymous"></script>

        <!--  Fonts  -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">

        <!-- Not Jonathan's, not Matthew's but Harry's style sheet. Look at me, I am the styler now -->
		<link rel="stylesheet" type="text/css" href="/cuwebsite/css/style.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


	</head>
	<body>
        <header class = "header">
            <ul class = "header-links">
                <a href="/cuwebsite" class = "header-logo">
                    <div class = "header-image-logo header-image"></div>
                </a>
                <a class = "header-link" href="/cuwebsite/events">
                    <p class = "header-text">Events</p>
                </a>
                <a class = "header-link" href="/cuwebsite/about">
                    <p class = "header-text">About</p>
                </a>
                <a class = "header-link" href="/cuwebsite/connect">
                    <p class = "header-text">Connect</p>
                </a>
            </ul>
        </header>
        <input type="checkbox" class="sidebar-check" id = 'btn'>
        <label for = "btn" class = "sidebar-btn" style = "display: none">
            <div class="sidebar-btn__bars"></div>
        </label>
        <div class="sidebar">
            <ul class="sidebar__list">
              <li class="sidebar__title">
                <a href = "#" class="sidebar__item-text">MUCU</a>
              </li>
              <li class="sidebar__item">
                <a href = "#" class="sidebar__item-text">Home <span class="white-text">Welcome Back!</span></a>
              </li>
              <li class="sidebar__item">
                <a href = "events" class="sidebar__item-text">Events<span class="white-text">How we started</span></a>
              </li>
              <li class="sidebar__item">
                <a href = "/about" class="sidebar__item-text">About<span class="white-text">Not a 9 to 5!</span></a>
              </li>
              <li class="sidebar__item">
                <a href = "/connect" class="sidebar__item-text">Connect<span class="white-text">Exciting life at company A</span></a>
              </li>

            </ul>
      </div>





		<main class = "main">
            <?php startblock('page_content') ?>
            <?php endblock() ?>

        </main>

        <footer class = "footer">
            <ul class = "footer__list">
                <li class = "footer__item footer__icons">
                    <a href="mailto:general@committee.cu.org.au?Subject=Hello!" target="_top">
                        <i class="fas fa-envelope fa-5x"></i>
                    </a>
                    <a href = "https://www.facebook.com/mucu0/">
                        <i class="fab fa-facebook fa-5x"></i>
                    </a>
                    <a href = "https://www.youtube.com/watch?v=7zA4fZxiB-Q">
                        <i class="fab fa-youtube-square fa-5x"></i>
                    </a>
                </li>
                <li class = "footer__item footer__note">
                    <p>Developed by Harry Zhang 2018</p>
                </li>
            <ul>

        </footer>
    </body>
    <script type="text/javascript" src = "/cuwebsite/js/javascript.js"></script>
</html>
