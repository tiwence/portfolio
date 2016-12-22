<!DOCTYPE html>
<html lang="en" class="js csstransitions">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <link href="https://fonts.googleapis.com/css?family=Istok+Web|Josefin+Sans" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/css/demo.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/css/normalize.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/css/style2.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/css/font-awesome.min.css" rel="stylesheet">

    <script src="<?php bloginfo('template_directory');?>/js/modernizr-custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>

  <body class="demo-2">

    <div class="container">
      	<header class="codrops-header">
			<h1><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a> <span><?php echo get_bloginfo( 'description' ); ?></span></h1>
			<nav class="codrops-demos">
				<?php wp_list_categories( '&title_li=&hide_empty=0&orderby=id&order=ASC' ) ?>
				<?php wp_list_pages( '&title_li=' ); ?>
			</nav>
		</header>