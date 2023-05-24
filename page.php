   <?php
    get_header();
    ?>
   <!-- Features -->
   <div id="features-wrapper">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <h4>Features</h4>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio ducimus ab, modi vel quos tempora accusamus in. Nesciunt id repudiandae, voluptatibus nostrum, alias nisi voluptatum vitae consectetur delectus, cumque ex!
                   </p>
               </div>
           </div>
       </div>
   </div>
   <!-- Main -->
   <div id="main-wrapper">
       <div class="container">
           <div class="row gtr-200">
               <div class="col-12">
                   <div id="content">
                       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                               <h2><?php the_title(); ?></h2>
                               <?php the_content() ?>
                           <?php endwhile;
                        else : ?>
                           <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                       <?php endif; ?>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <?php
    get_footer();
    ?>