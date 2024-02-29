<head>
	<?php wp_head(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="pvj6ThGMCpNIhh5JWz3RT-uWN2QS8GanXe242skgySA" />
	
    <title>
    <?php echo wp_title(); ?>
    </title>

    <?php include 'stylesheet-manager.php'; ?>
  	</head>

<body>

<div class="top_bar sticky-top">
  <div class="container-fluid">
    <div class="wrapper">
      <div class="mainwrapper">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="d-flex">
              <h5 class="mb-0">Horem ipsum dolor sit amet</h5>
            </div>
          </div>

          <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="d-flex sticky--form">
              <div class="header_form">
                <div class="_input">
                 
                    <span class="wpcf7-form-control-wrap" data-name="your-name">
                      <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required name-field" aria-required="true" aria-invalid="false" placeholder="Full Name" value="" type="text" name="your-name">
                    </span>
               
                </div>
                <div class="_input">
                
                    <span class="wpcf7-form-control-wrap" data-name="your-email">
                      <input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email Address" value="" type="email" name="your-email">
                    </span>
              
                </div>
                <div class="_cta">
               
                    <input class="" type="submit" value="SUBMIT">
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<header id="seo-header">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <div class="tablet-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/regan-logo.png" alt="regan logo">
      </div>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    <div class="navbar-collapse navigation collapse" id="navbarSupportedContent" style="">

      <?php  wp_nav_menu(array(
            'Primary Menu' => 'Primary',
          'menu_class' => 'navMenu navbar-nav me-auto mb-2 mb-lg-0',
          'container' => false,)
        ); ?>
          
      <!-- <ul id="menu-lynching-nav" class="menu">
      <li id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-22"><a href="http://innovnational.com/lynching/" aria-current="page">Home</a></li>
      <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="https://innovnational.com/lynching/about/">About</a></li>
      <li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27"><a href="https://innovnational.com/lynching/life-and-travel/">Life and Travel</a></li>
      <li id="menu-item-30" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30"><a><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/regan-logo.png" alt="regan logo"></a></li>
      <li id="menu-item-138" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-138"><a href="https://innovnational.com/lynching/interview/">Interview</a></li>
      <li id="menu-item-144" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-144"><a href="https://innovnational.com/lynching/blog/">Blog</a></li>
      <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="https://innovnational.com/lynching/contact-us/">Contact Us</a></li>
      </ul>         -->
    </div>
  </div>
</nav>

  <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    <a class="navbar-brand d-xxl-none d-md-block d-sm-block" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/regan-logo.png" alt="regan logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">VARIETY & CHOICES</a>
          <a class="nav-link" href="#">SERVICES</a>
          <a class="nav-link" href="#">ABOUT</a>
          <a class="navbar-brand d-xxl-block d-md-none d-sm-none" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/regan-logo.png" alt="regan logo"></a>
          <a class="nav-link" href="#">BLOGS</a>
          <a class="nav-link" href="#">GALLERY</a>
          <a class="nav-link" href="#">CONTACT US</a>
        </div>
      </div>
    </div>
  </nav> -->
</header>





      