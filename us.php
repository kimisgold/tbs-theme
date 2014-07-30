<div class="tbs-only">
    <img src="<?php echo bloginfo('template_directory'); ?>/images/cover.png" alt="Cover for THESE BROKEN STARS by Amie Kaufman and Meagan Spooner" / class="tbs-only">
    <div class="preorder">
        <p><span class="date">NOW AVAILABLE</span></p>
        
        <p>Order from the following booksellers:</p>              
    
        <div class="order">
            <?php
            
            $order = get_posts(array('post_type' => 'other', 'name' => 'order-us'));
            
            if( $order ) {
                echo apply_filters('the_content', $order[0]->post_content);
            }
            
            ?>
        </div>
        
        <div class="promo">
            <?php
            
            $promo = get_posts(array('post_type' => 'other', 'name' => 'promo'));
            
            if( $promo ) {
                echo apply_filters('the_content', $promo[0]->post_content);
            }
            
            ?>
        </div>
    
    </div>
</div>
<div class="tsw-only">
    <img src="<?php echo bloginfo('template_directory'); ?>/images/tsw-cover.png" alt="Cover for THIS SHATTEREDWORLD by Amie Kaufman and Meagan Spooner" />
    <div class="preorder">
        <p><span class="date">December 23, 2014</span></p>
        
        <p>Order from the following booksellers:</p>              
    
        <div class="order">
            <?php
            
            $order = get_posts(array('post_type' => 'other', 'name' => 'order-us'));
            
            if( $order ) {
                echo apply_filters('the_content', $order[0]->post_content);
            }
            
            ?>
        </div>
        
        <div class="promo">
            <?php
            
            $promo = get_posts(array('post_type' => 'other', 'name' => 'promo'));
            
            if( $promo ) {
                echo apply_filters('the_content', $promo[0]->post_content);
            }
            
            ?>
        </div>
    
    </div>
</div>