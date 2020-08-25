<?php $__env->startSection('content'); ?>
<div class="container-fluid app-body">
<div class="row">
		<div class="col-md-4">
        <div class="input-group mb-5">
  <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
  </div>
</div>

</div>
		<div class="col-md-4"><input style="width:170px;" type="date" class="form-control"  value="<?php echo date('Y-m-d'); ?>">  </div>
		<div class="col-md-4">
          <select class="form-control" style="width:170px;">
           <option>All Group</option>
           <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <option><?php echo e($group->name); ?></option>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>
        
		<div class="col-md-12">
        <br>
			<table class="table table-hover table-bordered "> 
				<thead> 
					<tr><th>Group Name</th> <th>Group Type</th> <th>Acount Name</th> <th>Post Text</th> <th>Time</th> </tr> 
				</thead>
                <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <tr>
                  <td><?php echo e($datas->name); ?></td>
                  <td><?php echo e($datas->type); ?></td>
                  <td><img src="<?php echo e($datas->avatar); ?>" style="height:40px;width:40px;"> </td>
               
                  <td><?php echo e($str = substr($datas->post_text, 0, 20) . '...'); ?></td>
                  <td><?php echo e(date('d-M-Y h:i a', strtotime($datas->sent_at))); ?></td>
                 </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                
            </table>
        </div>
      <?php echo e($data->links()); ?>

</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>