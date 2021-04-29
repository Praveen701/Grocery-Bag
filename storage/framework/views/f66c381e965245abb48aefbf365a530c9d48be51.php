

<?php $__env->startSection('content'); ?>


<div class="container mt-5">
    <h1>Add Grocery List</h1>
    <form action="/additem" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Item name</label>
         
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" placeholder="Enter Item Name">
            <?php if($errors->has('name')): ?>
                <small id="name" class="form-text text-danger">Enter Item Name</small>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Item quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" value="<?php echo e(old('quantity')); ?>" placeholder="Enter Item Quantity">
            <?php if($errors->has('quantity')): ?>
                <small id="quantity" class="form-text text-danger">Enter Item Quantity</small>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Item status</label>
            <select value="" id="status" name="status" class="form-control">
                <option <?php if(old('status')=='0'): ?> selected <?php endif; ?> value="0" selected>Pending</option>
                  <option <?php if(old('status')=='1'): ?> selected <?php endif; ?> value="1">Bought</option>
                  <option <?php if(old('status')=='2'): ?> selected <?php endif; ?> value="2">Not Available</option>
             </select>
              <?php if($errors->has('status')): ?>
                  <small id="status" class="form-text text-danger">Select Country</small>
              <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" id="date" name="date" value="<?php echo e(old('date')); ?>" placeholder="Enter Date">
            <?php if($errors->has('date')): ?>
                <small id="date" class="form-text text-danger">Enter Date</small>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <input type="submit" value="Add" class="btn btn-danger">
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GroceryNew\resources\views/Grocery/add.blade.php ENDPATH**/ ?>