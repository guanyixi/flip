<div id="<?php the_sub_field('component_id'); ?>" class="compo-cards"  style="padding-bottom:<?php the_sub_field('margin_bottom'); ?>px; padding-top:<?php the_sub_field('margin_top'); ?>px;">
    <div class="<?php 
        echo get_sub_field('container_width') . ' ' . get_sub_field('number_of_columns'); 
        if(get_sub_field('centered_with_circle_images')){
            echo ' centered-circle-images';
        }
        ?>">

        <div class="flex-container">

            <?php 
            $button_style = get_sub_field('button_style');
            if(have_rows('cards')): while(have_rows('cards')): the_row(); ?>
            <div class="card-unit">
                <div class="card-wrapper">
                    <div class="image">
                        <?php if(get_sub_field('button_link')){ ?>
                            <a href="<?php echo get_sub_field('button_link'); ?>"><img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>"></a>
                        <?php }else{ ?>
                            <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>">
                        <?php  } ?>
                        
                    </div>
                    <div class="caption">
                        <?php 
                        if(get_sub_field('title')){
                            echo '<h4>'.get_sub_field('title').'</h4>';
                        } 
                        if(get_sub_field('description')){
                            echo '<div class="description">'.get_sub_field('description').'</div>';
                        } 
                        if(get_sub_field('button_text')){
                            echo '<a class="'.$button_style.' card-button" href="'.get_sub_field('button_link').'">'.get_sub_field('button_text').'</a>';
                        } 
                        
                        ?>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>

        </div>
        
    </div>

</div>