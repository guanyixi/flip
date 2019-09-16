<div id="<?php the_sub_field('component_id'); ?>" class="image-carousel" style="margin-bottom:<?php the_sub_field('margin_bottom'); ?>px; margin-top:<?php the_sub_field('margin_top'); ?>px;">
    <div class="<?php the_sub_field('container_width'); ?>">
        <?php 
        if(get_sub_field('image_ratio')=='same-ratio'){
            $slider_class = 'standard-slider-' . get_sub_field('columns');
        }elseif(get_sub_field('image_ratio')=='variable-ratio'){
            $slider_class = 'variable-width-slider';
        }

        if(get_sub_field('show_caption')){
            $show_caption = true;
        }else{
            $show_caption = false;
        }
        ?>
        
        <?php if(have_rows('images')): ?>
        <div class="<?php echo $slider_class; ?>">
            <?php while(have_rows('images')): the_row(); ?>
                <div class="slide">
                    <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>">
                    <?php if($show_caption): ?>
                        <div class="caption">
                            <?php echo get_sub_field('image')['caption']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</div>