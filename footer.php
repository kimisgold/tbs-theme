<footer>

<div class="container">
<?php

$footer = get_posts(array('post_type' => 'other', 'name' => 'footer'));

if( $footer ) {
    echo apply_filters('the_content', $footer[0]->post_content);
}

?>

</div>

</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/javascripts/jquery.scrollTo.min.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/javascripts/jquery.localScroll.min.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/javascripts/globals.js" type="text/javascript"></script>
<script>
    jQuery(function($) {
        $.localScroll.defaults.axis = 'y';
        
        $('nav.primary a').click(function() {
            $.scrollTo( $('#'+this.hash.replace('#','')+' h1:first-child'), 1000, { offset: -91, hash: false } );
            return false;
        });
        
    });
</script>

<?php wp_footer(); ?>

</body>

</html>