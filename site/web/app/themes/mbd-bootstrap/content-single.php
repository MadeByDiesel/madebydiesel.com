<div class="post-container">
  <h2><a href="#"><?php the_title(); ?></a></h2>
  <p class="lead">by <a href="#"><?php the_author(); ?></a></p>
  <p><span class="glyphicon glyphicon-time"></span> Posted on <?php the_date(); ?></p>
  <hr>
    <?php if ( has_post_thumbnail() ) { ?>
      <div class="post-image">
        <?php	the_post_thumbnail( 'large', array('class' => 'img-responsive')); ?>
      </div>
      <hr>
      <?php the_content(); ?>
    <?php } else { ?>
      <?php the_content(); ?>
    <?php } ?>
  <hr>
</div>
