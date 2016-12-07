<?php get_header(); ?>
<!-- Page Content -->
<div id="home-wrap" class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8"  style="margin-top:80px">
        <div>
          <?php
    			if ( have_posts() ) : while ( have_posts() ) : the_post();

    				get_template_part( 'content', get_post_format() );

    			endwhile; endif;
    			?>
        </div>

        <div class="pagination">
          <ul class="pager">
              <li class="previous">
                  <a href="#">&larr; Older</a>
              </li>
              <li class="next">
                  <a href="#">Newer &rarr;</a>
              </li>
          </ul>
        </div>

      </div>

      <?php get_sidebar(); ?>

    </div>

</div>
<!-- /.container -->
<?php get_footer(); ?>
