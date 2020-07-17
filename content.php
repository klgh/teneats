<div class="blog-post">
    <?php if (has_post_thumbnail()) { ?>
        <div class="blog-row">
            <div class="feat-img">
                <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="post-content">
                <p class="blog-post-meta"><?php the_date(); ?></p>

                <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <div class="post-excerpt"><?php the_excerpt(); ?></div>

                <p><a href="<?php the_permalink(); ?>" class="read-more">Read More</a></p>
            </div>
        </div>
    <?php } else { ?>
        <?php the_excerpt(); ?> <p><a href="<?php the_permalink(); ?>">Read More</a></p>
    <?php } ?>
</div><!-- /.blog-post -->
