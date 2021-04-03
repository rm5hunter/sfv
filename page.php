<?php
/**
 * The template for displaying pages
 */

get_header(); ?>

        <div class="container">
          <div class="col-md-12">

            <?php
              // Start the loop.
              while ( have_posts() ) : the_post();
              ?>
                
                <article <?php post_class(); ?>>

                  <div class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                  </div>

                  <div class="entry-content">
                    <?php the_content(); ?>
                  </div>

                </article>

              <?php
              // End of the loop.
              endwhile;
            ?>

          </div>
        </div>

<?php get_footer(); ?>