<?php $__env->startSection('content'); ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row" id="main">

                <!-- Page Heading -->
                <div class="go-title">
                    <h3>Categories</h3>

                </div>
                <!-- Page Content -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="res">
                            <?php if(Session::has('message')): ?>
                                <div class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <?php echo e(Session::get('message')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- /.start -->
                        <div class="col-md-12">
                            <ul class="nav nav-tabs tabs-left">
                                <li class="active"><a href="#maincat" data-toggle="tab" aria-expanded="false"><strong>Main Category</strong></a>
                                <li><a href="#subcat" data-toggle="tab" aria-expanded="true"><strong>Sub Category</strong></a>
                                <li><a href="#childcat" data-toggle="tab" aria-expanded="true"><strong>Child Category</strong></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-xs-12" style="padding: 0">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="maincat">
                                    <div class="go-title">
                                        <div class="pull-right">
                                            <a href="<?php echo url('admin/categories/create'); ?>" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Add Main Category</a>
                                        </div>
                                        <h3>Main Category</h3>
                                        <div class="go-line"></div>
                                    </div>
                                    <!-- Page Content -->
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <table class="table table-striped table-bordered" cellspacing="0" id="example" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Category Name</th>
                                                    <th width="20%">Url Slug</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($category->name); ?>

                                                        <?php if($category->featured == 1): ?>
                                                            <label class="label label-primary">Featured</label>
                                                        <?php endif; ?>
                                                        </td>
                                                        <td><?php echo e($category->slug); ?></td>
                                                        <td>
                                                            <a href="categories/<?php echo e($category->id); ?>/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit </a>
                                                            <a href="javascript:;" data-href="<?php echo e(url('/')); ?>/admin/categories/delete/<?php echo e($category->id); ?>" data-toggle="modal" data-target="#confirm-delete"class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Remove</a><br>

                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="subcat">
                                    <div class="go-title">
                                        <div class="pull-right">
                                            <a href="<?php echo url('admin/subcategory/create'); ?>" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Add Sub Category</a>
                                        </div>
                                        <h3>Sub Category</h3>
                                        <div class="go-line"></div>
                                    </div>
                                    <!-- Page Content -->
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <table class="table table-striped table-bordered" cellspacing="0" id="example2" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Category Name</th>
                                                    <th>Main Category</th>
                                                    <th width="20%">Url Slug</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $__currentLoopData = $subs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($sub->name); ?>

                                                            <?php if($sub->featured == 1): ?>
                                                                <label class="label label-primary">Featured</label>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo e($sub->mainid->name); ?></td>
                                                        <td><?php echo e($sub->slug); ?></td>
                                                        <td>
                                                            <a href="subcategory/<?php echo e($sub->id); ?>/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit </a>
                                                            <a href="javascript:;" data-href="<?php echo e(url('/')); ?>/admin/categories/delete/<?php echo e($sub->id); ?>" data-toggle="modal" data-target="#confirm-delete"class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Remove</a><br>

                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="childcat">
                                    <div class="go-title">
                                        <div class="pull-right">
                                            <a href="<?php echo url('admin/childcategory/create'); ?>" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Add Child Category</a>
                                        </div>
                                        <h3>Child Category</h3>
                                        <div class="go-line"></div>
                                    </div>
                                    <!-- Page Content -->
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <table class="table table-striped table-bordered" cellspacing="0" id="example3" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Category Name</th>
                                                    <th>Main Category</th>
                                                    <th>Sub Category</th>
                                                    <th width="20%">Url Slug</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $__currentLoopData = $child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($data->name); ?>

                                                            <?php if($data->featured == 1): ?>
                                                                <label class="label label-primary">Featured</label>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo e($data->mainid->name); ?></td>
                                                        <td><?php echo e($data->subid->name); ?></td>
                                                        <td><?php echo e($data->slug); ?></td>
                                                        <td>

                                                            <a href="childcategory/<?php echo e($data->id); ?>/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit </a>
                                                            <a href="javascript:;" data-href="<?php echo e(url('/')); ?>/admin/categories/delete/<?php echo e($data->id); ?>" data-toggle="modal" data-target="#confirm-delete"class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Remove</a><br>

                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.end -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->



    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                </div>
                <div class="modal-body">
                    <p>You are about to delete this Category, Everything will be deleted under this Category.</p>
                    <p>Do you want to proceed?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok">Delete</a>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

    <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.includes.master-admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>