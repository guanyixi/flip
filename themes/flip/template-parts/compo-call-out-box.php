<div id="<?php the_sub_field('component_id'); ?>" class="<?php the_sub_field('number_of_call_out_boxes'); ?>" style="margin-bottom:<?php the_sub_field('margin_bottom'); ?>px; margin-top:<?php the_sub_field('margin_top'); ?>px;">


    <div class="call-out-box-container <?php the_sub_field('container_width'); ?>">

        <div class="call-out-box call-out-box-1 bg-cover <?php the_sub_field('content_button_position'); ?>" style="background-image:url(<?php the_sub_field('background_image_1'); ?>); background-color:<?php the_sub_field('background_color_1'); ?>;">
            <div class="container-r">

                <div class="content-box">
                    <?php the_sub_field('content_box_1'); ?>
                </div>
                
                <div class="button-box">
                    <?php if(get_sub_field('button_text_1')):?>
                        <a class="<?php the_sub_field('button_style_1'); ?>" target="<?php the_sub_field('open_new_tab_1'); ?>" href="<?php the_sub_field('button_url_1'); ?>"><?php the_sub_field('button_text_1'); ?></a>
                    <?php endif; ?>

                    <?php if(get_sub_field('has_second_button')&&get_sub_field('button_text_1_b')):?>
                        <a class="<?php the_sub_field('button_style_1_b'); ?>" target="<?php the_sub_field('open_new_tab_1_b'); ?>" href="<?php the_sub_field('button_url_1_b'); ?>"><?php the_sub_field('button_text_1_b'); ?></a>
                    <?php endif; ?>
                </div>
               
            </div>
        </div>

        <?php if(get_sub_field('number_of_call_out_boxes') == 'call-out-box-two'): ?>

        <div class="call-out-box call-out-box-2 bg-cover" style="background-image:url(<?php the_sub_field('background_image_2'); ?>); background-color:<?php the_sub_field('background_color_2'); ?>;"">
            <div class="container-r">
                <div class="content-box">
                    <?php the_sub_field('content_box_2'); ?>
                </div>
                <div class="button-box">
                    <?php if(get_sub_field('button_text_2')):?>
                        <a class="<?php the_sub_field('button_style_2'); ?>" target="<?php the_sub_field('open_new_tab_2'); ?>" class="button-primary" href="<?php the_sub_field('button_url_2'); ?>"><?php the_sub_field('button_text_2'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
           
        </div>

        <?php endif; ?>
    </div>


    
</div>