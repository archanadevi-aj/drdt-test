<div class="pure-u-1 pure-u-sm-3-5">
    <div class="hero-container ">
        <div class="pure-g ">
            <a class="pure-u-sm-2-5 hero-image">
               <?php  echo get_the_post_thumbnail( $post_id, 'large', array( 'class' => 'pure-img' ) ); ?>
            </a>
            <div class="pure-u-sm-3-5">
                <div class="hero-text">
	                <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
                    <div class="hero-excerpt"><?php the_excerpt() ?> </div>
                    <a href="<?php echo esc_url(get_permalink()) ?> " class="read-more">read more</a>
                </div>
            </div>
        </div>
    </div>
</div>