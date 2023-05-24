<!-- Features -->
<div id="features-wrapper">
    <div class="container">
        <div class="row">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="col-4 col-12-medium">
                        <section>
                            <?php
                            if ( has_post_thumbnail() ) {
                            ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php
                                the_post_thumbnail('thumbnail');
                            ?>
                            </a>
                            <?php
                            }
                            ?>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_content() ?>
                            <?php the_category(', ') ?>
                        </section>
                    </div>
                <?php endwhile;
            else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>