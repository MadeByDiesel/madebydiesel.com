<!-- Blog Sidebar Widgets Column -->
<div class="col-md-3 pull-right"   style="margin-top:80px">
  <?php if(is_active_sidebar('sidebar')): ?>
    <?php dynamic_sidebar('sidebar'); ?>
  <?php endif; ?>
</div>
