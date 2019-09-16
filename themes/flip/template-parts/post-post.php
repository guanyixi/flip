<?php 
$post_type = get_sub_field('post_type');
$posts_per_page = get_sub_field('number_of_posts');
$orderby = get_sub_field('posts_order');

if(get_sub_field('show_as_carousel')){
    $carousel_class = 'post-carousel';
}else{
    $carousel_class = 'no-carousel';
}

$picked_posts = array();
if(get_sub_field('if_pick_posts') && have_rows('pick_posts')){
    while(have_rows('pick_posts')){
        the_row();
        array_push($picked_posts, get_sub_field('post'));
    }
}

$args = array(
    'post_type' => $post_type,
    'posts_per_page' => $posts_per_page,
    'order' => 'DESC',
    'orderby' => $orderby,
    'post__in' => $picked_posts,
    'post_status' => 'publish'
);
$query = new WP_Query( $args );

if($query->have_posts()){
//Above are same on every post type page, such as post, team, etc.
?>

<div class="compo-cards">
    <div class="container post-feed <?php echo $carousel_class ?> cards-3-columns">
        <div class="flex-container">

            <?php while($query->have_posts()): $query->the_post(); ?>
            <div class="card-unit">
                <div class="card-wrapper">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <a class="image" href="<?php the_permalink(); ?>">
                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="">
                        </a>
                        <div class="caption">
                            <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div><?php the_time('F j, Y'); ?></div>
                            <div class="excerpt"><?php the_excerpt(); ?></div>
                        </div>
                    </article>
                </div>
            </div>
            <?php endwhile; ?>

        </div>

        <?php if(get_sub_field('bottom_button_text')): ?>
        <div class="center">
            <a class="button-primary" href="<?php the_sub_field('bottom_button_link'); ?>"><?php the_sub_field('bottom_button_text'); ?></a>
        </div>
        <?php endif; ?>
        
    </div>
</div>

<?php wp_reset_postdata(); }else{ 
    echo '<p class="center">Sorry, no posts are found.</p>';
 } ?>
