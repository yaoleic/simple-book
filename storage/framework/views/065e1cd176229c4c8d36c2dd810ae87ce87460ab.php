<?php $__env->startSection("content"); ?>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">增加角色</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="/admin/roles/store" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">角色名</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">描述</label>
                                    <input type="text" class="form-control" name="description">
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>