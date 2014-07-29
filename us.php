<div class="preorder">
    <p><span class="date">NOW AVAILABLE</span></p>
    
    <p>Order from the following booksellers:</p>              

    <div id="order">
        <?php
        
        $order = get_posts(array('post_type' => 'other', 'name' => 'order-us'));
        
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
