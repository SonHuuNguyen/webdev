<?php $__env->startSection('title', " -  All posts"); ?>
<?php $__env->startSection('item'); ?>
<span class="glyphicon glyphicon-chevron-right" style="font-size:1em;"></span> <strong> All posts</strong>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <table class="table table-striped" id="all_post">
    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Content</th>
        <th>Status</th>
        <th>More</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($post as $s_post): ?>
      <tr>
        <td><?php echo e($s_post-> id); ?></td>
        <td><?php echo e($s_post-> title); ?></td>
        <td><?php echo e((strlen($s_post->content)>30)? substr($s_post->content,0,30) . "..."  : $s_post->content); ?></td>
        <td><span class="glyphicon glyphicon-ok-sign" style="color: green;"></span></td>
        <td><a class="btn btn-sm btn-default" href="<?php echo e(route('posts.show', $s_post->id)); ?>" >View</a></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sample.news_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>