<?php get_header(); ?>
<!-- Page Content -->
<div id="single-wrap" class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8"  style="margin-top:80px">

          <!-- First Blog Post -->
          <?php
    			if ( have_posts() ) : while ( have_posts() ) : the_post();

    				get_template_part( 'content-single', get_post_format() );

    			endwhile; endif;
    			?>

          <!-- Pager -->
          <nav>
          	<ul class="pager">
          		<li><?php next_posts_link( 'Previous' ); ?></li>
          		<li><?php previous_posts_link( 'Next' ); ?></li>
          	</ul>
          </nav>

      </div>

      <!-- Blog Sidebar Widgets Column -->
      <?php get_sidebar(); ?>

    </div>

</div>
<!-- /.container -->
<?php get_footer(); ?>
