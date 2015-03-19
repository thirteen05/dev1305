<!DOCTYPE html>

<html>
<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">

  <title>James Darrohn Design | Web Design in Tampa Bay, Florida</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    
</head>

<body data-stellar-background-ratio="0.5">

<div id="fb-root"></div> <!--Required for Facebook API -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=54358053778&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> <!--/Facebook-->

<script type="text/javascript"> //Required for Twitter API
window.twttr = (function (d, s, id) {
  var t, js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src= "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
  return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
}(document, "script", "twitter-wjs"));
</script>

<nav class="navbar navbar-inverse navbar-dd">
  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/darrohn_design_logo.png" id="headerLogo" /> 
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dd-navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="dd-navbar">
            <?php
              wp_nav_menu( array(
                'menu'       => 'primary',
                'depth'      => 2,
                'container'  => false,
                'menu_class' => 'nav navbar-nav main-nav-menu',
                'walker'     => new wp_bootstrap_navwalker())
              );
            ?>
      <ul class="nav navbar-nav navbar-right">
        <li class="header-social-icon"><a href="http://facebook.com/DarrohnDesign"><i class="fa fa-facebook-square fa-2x"></i></a></li>
        <li class="header-social-icon"><a href="http://twitter.com/jdarrohn"><i class="fa fa-twitter-square fa-2x"></i></a></li>
        <li class="header-social-icon"><a href="http://www.linkedin.com/pub/james-darrohn/51/4a1/384/en"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
          <li class="header-social-icon"><a href="http://github.com/plushyobject"><i class="fa fa-github-square fa-2x"></i></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
