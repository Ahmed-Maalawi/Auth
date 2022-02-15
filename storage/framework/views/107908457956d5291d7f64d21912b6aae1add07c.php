<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           All Category



        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <?php if(session('success')): ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong> <?php echo e(session('success')); ?> </strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                        <div class="card-header">All Category</div>
                        <div class="card-body">
                        <table class="table">
                        <thead>
                        <tr class="text-capitalize">
                            <th scope="col">Sl No</th>
                            <th scope="col">$category Name</th>
                            <th scope="col">user</th>
                            <th scope="col">created at</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($categories->firstItem()+$loop->index); ?></th>
                                <td><?php echo e($category->category_name); ?></td>
                                <td><?php echo e($category->user->name); ?></td>
                                <td>
                                    <?php if($category->created_at == NULL): ?>
                                        <span class="text-danger">no data set</span>
                                    <?php else: ?>
                                        <?php echo e($category->created_at->diffForHumans()); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?php echo e(url('category/edit/'.$category->id)); ?>" class="btn btn-secondary">edit</a>
                                    <a href="" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        </table>
                            <?php echo e($categories->links()); ?>


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-capitalize">add category</div>
                    <div class="card-body">
                        <form action="<?php echo e(route('store.category')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="category-name" class="form-label">category name</label>
                                <input type="text" name="category_name" class="form-control" id="category-name">
                            </div>
                            <?php $__errorArgs = ['category_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"> <?php echo e($message); ?> </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <button type="submit" class="btn btn-outline-primary">Add Category</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH G:\gitHub_projects\laravel-basics\resources\views/admin/category/index.blade.php ENDPATH**/ ?>