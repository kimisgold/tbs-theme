<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1">
    <meta name=”description” content=”<?php echo get_bloginfo('description'); ?>”/>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href="<?php echo bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet" type="text/css" />
    <title><?php echo strtoupper(get_bloginfo('name')); ?> by Amie Kaufman and Meagan Spooner</title>
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-40353406-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
    
    <?php wp_head(); ?>
    
</head>

<body class="tsw">

<nav class="primary">
<?php wp_nav_menu( array( 
    'theme_location'  => 'header-menu',
    'container'       => 'div',
    'container_class' => 'center'
) ); ?>
<?php if(is_page('australia')): ?>
<a href="http://thesebrokenstars.com" class="us-toggle"><img src="<?php echo bloginfo('template_directory'); ?>/images/us-flag.png" title="Switch to THESE BROKEN STARS for the US!"></a>
<?php else: ?>
<a href="http://thesebrokenstars.com.au" class="au-toggle"><img src="<?php echo bloginfo('template_directory'); ?>/images/au-flag.png" title="Switch to THESE BROKEN STARS for Australia!"></a>
<?php endif; ?>
</nav>