<?php $__env->startSection("content"); ?>



    <div class="col-sm-8 blog-main">

        

        <div>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="blog-post">
                <p class="blog-post-meta"><a href="/user/<?php echo e($post->user_id); ?>"><?php echo e($post->user->name); ?></a> <?php echo e($post->created_at->toFormattedDateString()); ?></p>
                <h2 class="blog-post-title"><a href="/posts/<?php echo e($post->id); ?>" ><?php echo e(str_limit($post->title,'60',"...")); ?></a></h2>
                

                    
                
                <p class="blog-post-meta">赞 <?php echo e($post->zans_count); ?>  | 评论 <?php echo e($post->comments_count); ?></p>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php echo e($posts->links()); ?>

        </div><!-- /.blog-main -->
    </div>

    <?php echo $__env->make("layout.sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout.main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>