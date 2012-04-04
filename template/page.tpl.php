<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
<head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="content-language" content="<?php print $language->language ?>" />
  <?php print $meta; ?>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts ?>
 
  <!--[if lte IE 7]>
    <link rel="stylesheet" href="<?php print $base_path . $bp_library_path; ?>css/ie.css" type="text/css" media="screen, projection">
    <link href="<?php print $path_parent; ?>css/ie.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
  <![endif]-->
  <!--[if lte IE 6]>
    <link href="<?php print $path_parent; ?>css/ie6.css" rel="stylesheet"  type="text/css"  media="screen, projection" />

  <![endif]-->
</head>

<body class="<?php print $body_classes; ?>">

<div class="navbar navbar-fixed-top"> 
      <div class="navbar-inner">  
        <div class="container-fluid">  
 
          <?php print $logo_block; ?> 
          <div class="nav-collapse">  
            <?php if (isset($primary_links)) : ?>
				<?php print theme('links', $primary_links, array('id' => 'main-menu', 'class' => 'nav')) ?>
			<?php endif; ?> 
			<?php if (isset($secondary_links)) : ?>
				<?php print theme('links', $secondary_links, array('id' => 'subnav', 'class' => 'links secondary-links')) ?>
			<?php endif; ?>
          </div><!--/.nav-collapse -->  
        </div>  
      </div>  
    </div>  
    <div class="container-fluid">  
      <div class="row-fluid">  
        <div class="span3">  
            <?php if ($left): ?>
				<?php print $left; ?>
			<?php endif ?>
        </div><!--/span-->  
        <div class="span9">  
          <?php
			if ($breadcrumb != '') {
				print $breadcrumb;
			}

			if ($title != '') {
				print '<h1>'. $title .'</h1>';
			}
			
			if ($tabs != '') {
				print '<nav>'. $tabs .'</nav>';
			}

			if ($messages != '') {
				print '<div id="messages">'. $messages .'</div>';
			}


			print $help; // Drupal already wraps this one in a class

			print $content;
			print $feed_icons;
			
			?>		  
          <hr>  
     <footer>  
       <?php if ($footer_message || $footer): ?>
      <div id="footer" class="clear">
        <?php if ($footer): ?>
          <?php print $footer; ?>
        <?php endif; ?>
        <?php if ($footer_message): ?>
          <div id="footer-message"><?php print $footer_message; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?> 
      </footer>  
  
    </div>
  <?php print $closure; ?>
</body>
</html>
