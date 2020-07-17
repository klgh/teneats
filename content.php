<div class="blog-post">
    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="blog-post-meta"><?php the_date(); ?></p>

    <?php if (has_post_thumbnail()) { ?>
        <div class="row">
            <div class="col-md-6">
                <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="col-md-6">
                <?php the_excerpt(); ?> <p><a href="<?php the_permalink(); ?>">Read More</a></p>
            </div>
        </div>
    <?php } else { ?>
        <?php the_excerpt(); ?> <p><a href="<?php the_permalink(); ?>">Read More</a></p>
    <?php } ?>



</div><!-- /.blog-post -->
