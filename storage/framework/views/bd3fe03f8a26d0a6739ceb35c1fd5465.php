<!DOCTYPE html>
<html>
<head>
    <title>Liste des admins</title>
</head>
<body>
    <h1>Liste des admins</h1>

    <?php if(session('success')): ?>
        <div><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>CIN</th>
                <th>Nom</th>
                <th>Prénom</th>
                <!-- Ajoutez d'autres colonnes si nécessaire -->
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($admin->cin); ?></td>
                    <td><?php echo e($admin->nom); ?></td>
                    <td><?php echo e($admin->prenom); ?></td>
                    <!-- Affichez les autres données de l'admin -->
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\Users\ASUS\Desktop\Esprit\4Twin\Stage\zina\resources\views/admin/index.blade.php ENDPATH**/ ?>