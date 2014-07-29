<?php get_header(); ?>

<section id="intro">

    <div class="container">
    
        <div class="center">
          
          <?php if (!is_page('australia')): ?>
              <img src="<?php echo bloginfo('template_directory'); ?>/images/cover.png" alt="Cover for THESE BROKEN STARS by Amie Kaufman and Meagan Spooner" />
              <?php include('us.php'); ?>
          <?php else: ?>
              <img src="<?php echo bloginfo('template_directory'); ?>/images/cover-au.png" alt="Cover for THESE BROKEN STARS by Amie Kaufman and Meagan Spooner" />
              <?php include('au.php'); ?>
          <?php endif; ?>

        </div>
    
    </div>

</section>
    
<?php
$us = get_page_by_title('US');
$australia = get_page_by_title('Australia');

$args = array(
    'sort_order' => 'ASC',
    'sort_column' => 'menu_order', //post_title
    'hierarchical' => 1,
    'exclude' => '',
    'child_of' => $us->ID,
    'parent' => $us->ID,
    'exclude_tree' => '',
    'number' => '',
    'offset' => 0,
    'post_type' => 'page',
    'post_status' => 'publish'
);

if (is_page('Australia')) {
    $args['parent'] = $australia->ID;
    $args['child_of'] = $australia->ID;
}

$pages = get_pages($args);
//start loop
foreach ($pages as $page_data) :
    $content = apply_filters('the_content', $page_data->post_content);
    $title = $page_data->post_title;
    $slug = $page_data->post_name;
?>
<section id='<?php echo "$slug" ?>'>
    <div class="container">
        <div class="main">
        <?php if($slug == "book"): ?>
            <?php echo do_shortcode('[orbit-slider]') ?>
        <?php endif; ?>
        <h1><?php echo "$title" ?></h1>
        <a name='<?php echo "$slug" ?>'></a>
        <?php if($slug == "book" && !is_page('australia')): ?>        
        <div id="countdown">
        <script type="text/javascript" src="http://cdn.widgetserver.com/syndication/subscriber/InsertWidget.js"></script><script type="text/javascript">if (WIDGETBOX) WIDGETBOX.renderWidget('0e787418-efee-468b-8778-b83ca33feda3');</script>
<noscript>Get the <a href="http://www.widgetbox.com/i/0e787418-efee-468b-8778-b83ca33feda3">Countdown Creator Pro</a> widget and many other <a href="http://www.widgetbox.com/">great free widgets</a> at <a href="http://www.widgetbox.com">Widgetbox</a>! Not seeing a widget? (<a href="http://support.widgetbox.com/">More info</a>)</noscript>
        </div>
        <?php endif; ?>
        <?php echo "$content" ?>
        </div>
            <?php if ($slug == "authors"): ?>
            <div class="author-meta">
                <div class="amie">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/amie.jpg" >
                    <p>
                        <span class="facebook"><a href="https://www.facebook.com/AmieKaufmanAuthor">AmieKaufmanAuthor</a></span>
                        <span class="twitter"><a href="http://twitter.com/AmieKaufman">AmieKaufman</a></span>
                        <span class="pinterest"><a href="http://pinterest.com/AmieKaufman">AmieKaufman</a></span>
                    </p>
                </div>
                <div class="meg">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/meg.jpg" >
                    <p>
                        <span class="facebook"><a href="https://www.facebook.com/MeaganSpoonerBooks">MeaganSpoonerBooks</a></span>
                        <span class="twitter"><a href="http://twitter.com/meaganspooner">meaganspooner</a></span>
                        <span class="pinterest"><a href="http://pinterest.com/MeaganSpooner">MeaganSpooner</a></span>
                    </p>
                </div>
            </div>
            <?php elseif ($slug == "news"): ?>
                <?php if (!is_page('australia')): ?>
                <?php 
                    $news_id = get_cat_ID('news');
                    $news_args = array(
                       'cat' => $news_id,
                       'posts_per_page' => 3,
                    );
                    $news_query = new WP_Query( $news_args );
                    if ( $news_query->have_posts() ) { 
                       while ( $news_query->have_posts() ) { 
                           $news_query->the_post();
                           echo '<div class="news-post">';
                           the_title('<h2>','</h2>');
                           echo '<span class="date">';
                           the_time('m.d.Y.');
                           echo '</span>';
                           the_content();
                           echo '</div>';
                       }
                    }
                    wp_reset_postdata();
                ?>
                <?php endif; ?>
                <div class="newsletter">
                    <p>For more news and exclusive THESE BROKEN STARS content&hellip;</p>
                    <a href="http://meaganspooner.us5.list-manage.com/subscribe?u=7d4d8de1795be6151d15ac230&id=8fe91a1c37" class="button">Subscribe to Amie and Meagan's newsletter</a>
                </div>
            <?php endif; ?>
    </div>
</section>

<?php endforeach; ?>
    
<?php get_footer(); ?>