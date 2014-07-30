<?php $currentBook = getCurrentBook();?>

<?php if ($currentBook == 'tbs'): ?>
<img src="<?php echo bloginfo('template_directory'); ?>/images/cover-au.png" alt="Cover for THESE BROKEN STARS by Amie Kaufman and Meagan Spooner" />
<div class="preorder au">
    <p><span class="date">NOW AVAILABLE</span></p>
    
    <p>Order from the following booksellers:</p>              

    <div id="order">
        <?php
        
        $order = get_posts(array('post_type' => 'other', 'name' => 'order-au'));
        
        if( $order ) {
            echo apply_filters('the_content', $order[0]->post_content);
        }
        
        ?>
    </div>
    
    <div id="promo">
        <?php
        
        $promo = get_posts(array('post_type' => 'other', 'name' => 'promo'));
        
        if( $promo ) {
            echo apply_filters('the_content', $promo[0]->post_content);
        }
        
        ?>
    </div>

</div>
<?php else if ($currentBook == 'tsw'): ?>
<img src="<?php echo bloginfo('template_directory'); ?>/images/tsw-cover-au.png" alt="Cover for THIS SHATTERED WORLD by Amie Kaufman and Meagan Spooner" />
<div class="preorder au">
    <p><span class="date">NOW AVAILABLE</span></p>
    
    <p>Order from the following booksellers:</p>              

    <div id="order">
        <?php
        
        $order = get_posts(array('post_type' => 'other', 'name' => 'order-au'));
        
        if( $order ) {
            echo apply_filters('the_content', $order[0]->post_content);
        }
        
        ?>
    </div>
    
    <div id="promo">
        <?php
        
        $promo = get_posts(array('post_type' => 'other', 'name' => 'promo'));
        
        if( $promo ) {
            echo apply_filters('the_content', $promo[0]->post_content);
        }
        
        ?>
    </div>

</div>
<?php endif; ?>