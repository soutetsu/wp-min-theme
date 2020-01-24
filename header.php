<!DOCTYPE html>
<html>
<head>
  <title>foo</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
</head>
<body>
  <p><?php echo __FILE__; ?></p>

  <p><?php echo get_template_directory_uri(); ?></p>

<?php
wp_head();
