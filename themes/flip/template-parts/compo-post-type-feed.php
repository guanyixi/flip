<div id="<?php the_sub_field('component_id'); ?>" class="content-box"  style="padding-bottom:<?php the_sub_field('margin_bottom'); ?>px; padding-top:<?php the_sub_field('margin_top'); ?>px;">

    <?php if(get_sub_field('section_title')): ?>
    <div class="container">
        <h2 class="center"><?php the_sub_field('section_title'); ?></h2>
    </div>
    <?php endif; ?>

       <?php 
        $post_type = get_sub_field('post_type');
       
        if($post_type == 'post'){
            get_template_part( 'template-parts/post', 'post' );
        }elseif($post_type == 'team'){
            get_template_part( 'template-parts/post', 'team' );
        }elseif($post_type == 'work'){
            get_template_part( 'template-parts/post', 'work' );
        }elseif($post_type == 'open-positions'){
            get_template_part( 'template-parts/post', 'open-positions' );
        }

    ?>
   

</div>