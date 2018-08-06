<?php $__env->startSection('content'); ?>
	
	<div class="row">
		<div class="col-md-12">
			<h1>Admin</h1>
			<br>
			<a href="/users">user</a><br>
			<a href="/licences">licences</a>
		</div>
	</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>