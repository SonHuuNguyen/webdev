<?php $__env->startSection('title', " - $post->title"); ?>
<?php $__env->startSection('item'); ?>
<span class="glyphicon glyphicon-chevron-right" style="font-size:1em;"></span> <strong> Post show <?php echo e($post->id); ?></strong>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-8 col-sm-8 col-xs-12" id="post_content">
    <h3><?php echo e($post->title); ?></h3>
    <img src="" alt="featured-image" width="100" height="100">
    <?php echo $post->content; ?>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-12" id="post_more">
    <div class="well">
      <p><label>Post by:</label>Tim</p>
      <p><label>Category:</label>TV show</p>
      <p><label>Last edit:</label></p>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <label>Post to Web:</label>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
          <label class="switch">
            <input type="checkbox">
            <div class="slider round"></div>
          </label>
        </div>
        <br>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6" id="post_edit"><a class="btn btn-block btn-success" href="<?php echo e(route('posts.edit', $post->id)); ?>">Edit</a></div>
        <div class="col-md-6 col-sm-6 col-xs-6" id="post_delete">
        <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="post" accept-charset="utf-8">
           <input type="submit" class="btn btn-block btn-danger" value="Delete">
          <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>"> <?php echo e(method_field('DELETE')); ?>

        </form>
        </div>
      </div>
 
      
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('sample.news_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>