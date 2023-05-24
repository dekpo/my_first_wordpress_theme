   <?php
    get_header();
    ?>
   <!-- Main -->
   <div id="main-wrapper">
       <div class="container">
           <div class="row gtr-200">
               <div class="col-12">
                   <div id="content">
                       <?php
                        if (has_post_thumbnail()) {

                            $feature_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        ?>
                           <img src="<?= $feature_img_url ?>" alt="<?= the_title() ?>" class="img">
                       <?php
                        }
                        ?>
                       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                               <h2><?php the_title(); ?></h2>
                               <?php the_content() ?>
                           <?php endwhile;
                        else : ?>
                           <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                       <?php endif;

                        // If comments are open or there is at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                        ?>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <?php
    get_footer();
    ?>