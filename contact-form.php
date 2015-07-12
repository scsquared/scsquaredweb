<!DOCTYPE html>
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if (gt IE 8)]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <title>SC&#178;.create. | Contact</title>
  <meta content="photography illustration and consulting" name="description">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="yes" name="apple-mobile-web-app-capable">
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="javascripts/PIE.js"></script>
  <![endif]-->
<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }

</style>
  <link href="favicon.ico" rel="shortcut icon">
  <link href="stylesheets/style.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

</head>
<body>
  <div class="wrapper">
    <!-- Page Header -->
<header id="masthead">
    <div class="navbar transparent navbar-fixed-top">
      <div class="navbar-inner">
          <div class="container">
            <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <h1 class="brand">
              <a href="index.html">
                SC<span class="light">&#178;.create.</h1></span></a>
            <div class="nav-collapse collapse">
              <ul class="nav pull-right">
                <li class=""><a href="./">Home</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Photography<i class="caret"></i></a>
                  <ul class="dropdown-menu">
                  	<li><a href="product.html">Product Photography</a></li>
                    <li><a href="weddings.html">Weddings</a></li>
                    <li><a href="fineartphoto.html">Fine Art</a></li>
                  </ul>
                </li>
               <li class=><a href="illfolio.html">Illustrations</a></li>
                <li class="dropdown active">
                	<a class="dropdown-toggle" data-toggle="dropdown" href="#">About<i class="caret"></i></a>
                	<ul class="dropdown-menu">
                    <li><a href="windward.html">Windward Flutes</a></li>
                	<li class="active"><a href="contact.html">Contact</a></li>
                	<li><a href="about.html">About</a></li>
					</ul>
                </li>
                	</ul>
                </li>

                </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- Main Content -->
    <div id="content" role="main">
      <!-- Promo Section -->

      <!-- 404 content -->
      <section class="section section-padded">
        <div class="container-fluid">
          <div class="section-header">
            <h1>
              Want
              <small class="light">to talk?</small>
           </h1>
          </div>
          <p class="lead text-center">
We would love to hear from you, please contact us using one of the methods below.
          </p>
          <hr>
          <div class="row-fluid">
            <div class="span6">

<?php

        // check for a successful form post
        if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";

        // check for a form error
        elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";

?>

	      <form method="POST" action="contact-form-submission.php" class="form">
		<div class="control-group">
		    <label class="control-label" for="input1">Name</label>
		    <div class="controls">
			<input type="text" name="contact_name" id="input1" placeholder="Your name" class="span12">
		    </div>
		</div>
		<div class="control-group">
		    <label class="control-label" for="input2">Email Address</label>
		    <div class="controls">
			<input type="text" class="span12" name="contact_email" id="input2" placeholder="Your email address">
		    </div>
		</div>
		<div class="control-group">
		    <label class="control-label" for="input3">Message</label>
		    <div class="controls">
			<textarea name="contact_message" id="input3" rows="8" class="span12" placeholder="The message you want to send to me."></textarea>
		    </div>
		</div>
		<div class="form-actions">
		    <input type="hidden" name="save" value="contact">
		    <button type="submit" class="btn">Send</button>
		</div>
	    </form>
	<div id="messages"></div>
            </div><br><br>
            <div class="span6 contact-details text-center well">
                  <address><i class="icon-map-marker"></i> : West Chezzetcook<br>
		  Nova Scotia</address>
                  </p>
                  <address>
		    <i class="icon-phone"></i> : 902.482.0593
                    <br>
                    <i class="icon-envelope"></i> : <a href="mailto:info@scsquared.ca">info@scsquared.ca</a>
                  </address>
                  <br>
                  <br>

	    <!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup text-center">
<form action="http://sohierchristiephotography.us6.list-manage.com/subscribe/post?u=a33f573e291c9b8964b120649&amp;id=e867b77076" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_a33f573e291c9b8964b120649_e867b77076" value=""></div>
	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->
	    </div>

          </div>
        </div>
      </section>
</div>
</div>
<!-- Page Footer -->
<footer id="footer" role="contentinfo">
  <div class="wrapper wrapper-transparent">
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span6 small-screen-center">
          <h2>  Sarah Christie<span class="light"> Illustration</span></h2>
          <p>902.817.8546  |  <a href="mailto:sarah@scsquared.ca" target="new">sarah@scsquared.ca</a>
            <br>
            West Chezzetcook
            &copy; Copyright 2015
          </p>
        </div>
        <div class="span6">
          <ul class="unstyled inline text-right small-screen-center big social-icons">
            <li>
              <a data-iconcolor="#00a0d1" href="http://www.etsy.com/ca/shop/SarahCIllustrations" target="new">
                <h2>Etsy <i class="fa fa-shopping-cart"></i></h2>
              </a>
            </li>
             <li>
              <a data-iconcolor="#3b5998" href="http://schillustrations.tumblr.com/" target="new">
                <i class="fa fa-tumblr-square"></i>
              </a>
            </li>
            <li>
             <a data-iconcolor="#3b5998" href="https://www.facebook.com/schillustrations" target="new">
               <i class="fa fa-facebook-square"></i>
             </a>
           </li>
            <li>
              <a data-iconcolor="#910101" href="http://instagram.com/schillustrations/" target="new">
                <i class="fa fa-instagram"></i>

              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
  <script src="javascripts/jquery.min.js" type="text/javascript"></script>
  <script src="javascripts/bootstrap.js" type="text/javascript"></script>
  <script src="javascripts/jquery.flexslider-min.js" type="text/javascript"></script>
  <script src="javascripts/jquery.tweet.js" type="text/javascript"></script>
  <script src="javascripts/jquery.fancybox.pack.js" type="text/javascript"></script>
  <script src="javascripts/jquery.fancybox-media.js" type="text/javascript"></script>
  <script src="javascripts/script.js" type="text/javascript"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42172569-1', 'scsquared.ca');
  ga('send', 'pageview');

</script>
</body>
</html>
