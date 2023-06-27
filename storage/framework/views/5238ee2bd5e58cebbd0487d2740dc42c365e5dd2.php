
<?php $__env->startSection('content'); ?>
	<div class="container-fluid">
		<div class="d-flex justify-content-between mb20">
			<h1 class="title-bar"><?php echo e(!empty($recovery) ? __('Recovery') : __("All Visa")); ?></h1>
			<div class="title-actions">
				<?php if(empty($recovery)): ?>
					<a href="<?php echo e(route('flight.admin.create')); ?>" class="btn btn-primary"><?php echo e(__("Add new visa")); ?></a>
				<?php endif; ?>
			</div>
		</div>
		<?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<div class="filter-div d-flex justify-content-between ">
			
			<div class="col-left dropdown">
				<form method="get" action="<?php echo e(!empty($recovery) ? route('flight.admin.recovery') : route('flight.admin.index')); ?>" class="filter-form filter-form-right d-flex justify-content-end flex-column flex-sm-row" role="search">
					<?php if(!empty($data)): ?>
						<input type="text" name="s" value="<?php echo e(Request()->s); ?>" placeholder="<?php echo e(__('Search by name')); ?>" class="form-control">
						<div class="ml-3 position-relative">
							<button class="btn btn-secondary dropdown-toggle bc-dropdown-toggle-filter" type="button" id="dropdown_filters">
								<?php echo e(__("Advanced")); ?>

							</button>
							<div class="dropdown-menu px-3 py-3 dropdown-menu-right" aria-labelledby="dropdown_filters">
								
							</div>
						</div>
					<?php endif; ?>
					<button class="btn-info btn btn-icon btn_search" type="submit"><?php echo e(__('Search')); ?></button>
				</form>
			</div>
		</div>
		<div class="text-right">
			
		</div>

		<?php if(Session::has('datadeleted')): ?>


<h5 style="color:red;">Data deleted successfully</h5>

    <?php endif; ?>

		<div class="panel">
			<div class="panel-body">
				<form action="" class="bravo-form-item">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
							<tr>
								<th width="60px"><input type="checkbox" class="check-all"></th>
								<th> <?php echo e(__('Visa Type')); ?></th>
								<th> <?php echo e(__('Created_at')); ?></th>
								<th> <?php echo e(__('Updated_at')); ?></th>
								<th><?php echo e(__('Action')); ?></th>
							
							
							</tr>
							</thead>
							<tbody>
							<?php if($data): ?>
								<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr >
										<td><input type="checkbox" name="ids[]" class="check-item" value="<?php echo e($row->id); ?>">
										</td>
										<td><?php echo e($row->entry); ?></td>
										<td><?php echo e($row->created_at); ?></td>
										<td><?php echo e($row->updated_at); ?></td>
										<td><a href="<?php echo e(route('flight.admin.create',['id'=>$row->id])); ?>" type="button" class="btn btn-primary">Edit</a>&nbsp;<a href="<?php echo e(route('flight.admin.delete',['id'=>$row->id])); ?>" type="button" class="btn btn-danger">Delete</a></td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php else: ?>
								<tr>
									<td colspan="7"><?php echo e(__("No visa found found")); ?></td>
								</tr>
							<?php endif; ?>
							</tbody>
						</table>
					</div>
				</form>
			
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
	<script>
        $(document).ready(function () {
            $('.has-datetimepicker').daterangepicker({
                singleDatePicker: true,
                timePicker: true,
                showCalendar: false,
                autoUpdateInput: false, //disable default date
                sameDate: true,
                autoApply: true,
                disabledPast: true,
                enableLoading: true,
                showEventTooltip: true,
                classNotAvailable: ['disabled', 'off'],
                disableHightLight: true,
                locale: {
                    format: 'YYYY/MM/DD hh:mm:ss'
                }
            }).on('apply.daterangepicker', function (ev, picker) {
                $(this).val(picker.startDate.format('YYYY/MM/DD hh:mm:ss'));
            });
        })
	</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\komal\OneDrive\Desktop\roamiodeals_T\roamiodeals\modules/Flight/Views/admin/index.blade.php ENDPATH**/ ?>