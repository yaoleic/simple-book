<?php $__env->startSection("content"); ?>

    <div class="col-sm-12 blog-main">
        <form action="/posts/<?php echo e($post->id); ?>" method="POST">
            <?php echo e(method_field("PUT")); ?>

            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <input name="title" type="text" class="form-control" placeholder="这里是标题" value="<?php echo e($post->title); ?>">
            </div>
            <div class="form-group">
                <script id="eidt-container" style="height: 500px" name="content" type="text/plain">
                    <?php echo $post->content; ?>

                </script>
                
            </div>
            <?php echo $__env->make("layout.error", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <button type="submit" class="btn btn-default">提交</button>
        </form>
        <br>

    </div><!-- /.blog-main -->

    <!-- 配置文件 -->
    <script type="text/javascript" src="/js/u-editor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/js/u-editor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('eidt-container');
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>