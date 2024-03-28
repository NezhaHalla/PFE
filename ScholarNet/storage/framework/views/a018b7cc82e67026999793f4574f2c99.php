<form method="POST" action="<?php echo e(route('absences.storeBulk')); ?>">
    <?php echo csrf_field(); ?>
    <table>
        <thead>
            <tr>
                <th>Student</th>
                <th>Date</th>
                <th>Absent</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($student->name); ?></td>
                    <td>
                        <input type="date" name="dates[<?php echo e($student->id); ?>][]" class="form-control" required>
                    </td>
                    <td>
                        <input type="checkbox" name="absent[<?php echo e($student->id); ?>][]" value="1">
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <button type="submit">Submit</button>
</form>
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/teacher/absences.blade.php ENDPATH**/ ?>