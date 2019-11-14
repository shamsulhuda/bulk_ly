<?php $__env->startSection('content'); ?>


<div class="container-fluid app-body settings-page">
	<h3>Buffer Post Info</h3>
	<div class="feedback_from">
		<div class="row">
			<div class="col-sm-4">
				<input type="text" name="search" id="search" class="form-control" placeholder="search">
			</div>
		</div>
		<table class="table">
			<thead>
			<tr>
				<th scope="col">Group name</th>
				<th scope="col">Group type</th>
				<th scope="col">Users</th>
				<th scope="col">Posts text</th>
				<th scope="col">Time</th>
			</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $bufferposting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$bufferpost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($bufferpost->groupInfo->name); ?></td>
				<td><?php echo e($bufferpost->groupInfo->type); ?></td>
				<td><img src="<?php echo e($bufferpost->accountInfo->avatar); ?>" alt="users" style="width: 50px; height: auto;"></td>
				<td><?php echo e(str_limit($bufferpost->post_text, 20)); ?></td>
				<td><?php echo e(date($bufferpost->sent_at)); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</tbody>

		</table>
			<span><?php echo e($bufferposting->links()); ?></span>
	
	</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>