<?php
global $post;
$url   = get_the_permalink();
$color = get_field( 'background_color' );
$date  = get_the_date( 'm.d.o' );
?>
<article class="loop-post">
    <a href="<?php echo esc_url( $url ); ?>">
        <div class="loop-post__image" style="background-color: <?php echo esc_attr( $color ); ?>"><img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/img/post_back.png" alt=""></div>
        <h5 class="loop-post__title"><?php echo get_the_title(); ?></h5>
        <h6 class="loop-post__date"><?php echo esc_html( $date );?> </h6>
    </a>
</article>