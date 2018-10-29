<!doctype html>
<html>
<head>
  <script>
    // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o)
    // ,m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    // })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    //
    // ga('create', 'UA-8183126-5', 'auto');
    // ga('send', 'pageview');
  </script>
  <title><?php echo $site['title'] ?></title>
  <meta charset="utf-8">
  <meta name="author" content="http://guenanank.com" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $site['desc'] ?>">
  <meta name="keywords" content="<?php echo $site['keywords'] ?>">
  <link rel="shortcut icon" type="image/x-icon" href="#" />
  <?php
    echo link_tag('assets/css/bootstrap.min.css');
    echo link_tag('assets/css/dawenkmotor.css');
    if (!empty($styles)) {
        foreach ($styles as $style) {
            echo link_tag(sprintf('assets/css/%s.css', $style));
        }
    }
    ?>

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url() ?>">
        <img src="<?php echo $site['logo'] ?>" width="150" height="30" alt="<?php echo $site['name'] ?>">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
            foreach($categories as $menu) {
              ?>
                <li class="nav-item"><?php echo $menu ?></li>
              <?php
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>
