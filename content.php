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
        <div class="blog-row">
            <div class="post-content">
                <h2 class="blog-post-title">
                    <?php the_title(); ?>
                </h2>
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
        </div>

    <?php } ?>
</div><!-- /.blog-post -->
