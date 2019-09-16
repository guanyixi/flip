<div id="<?php the_sub_field('component_id'); ?>" class="content-box"  style="padding-bottom:<?php the_sub_field('margin_bottom'); ?>px; padding-top:<?php the_sub_field('margin_top'); ?>px;">
    <div class="<?php the_sub_field('container_width'); ?> <?php the_sub_field('number_of_columns'); ?>">

        <div class="content-box-column-1">
            <?php the_sub_field('column_content_1'); ?>
        </div>

        <?php if(get_sub_field('number_of_columns') == 'two-columns' || get_sub_field('number_of_columns') == 'three-columns' || get_sub_field('number_of_columns') == 'four-columns'): ?>
        <div class="content-box-column-2">
            <?php the_sub_field('column_content_2'); ?>
        </div>
        <?php endif;  ?>

        <?php if(get_sub_field('number_of_columns') == 'three-columns' || get_sub_field('number_of_columns') == 'four-columns'): ?>
        <div class="content-box-column-3">
            <?php the_sub_field('column_content_3'); ?>
        </div>
        <?php endif;  ?>

        <?php if(get_sub_field('number_of_columns') == 'four-columns'): ?>
        <div class="content-box-column-4">
            <?php the_sub_field('column_content_4'); ?>
        </div>
        <?php endif;  ?>
        

    </div>

</div>