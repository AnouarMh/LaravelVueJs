<!DOCTYPE html>
<html>
<head>
    <title>Créer un nouvel admin</title>
</head>
<body>
    <h1>Créer un nouvel admin</h1>

    <!-- <?php if($errors->any()): ?>
        <div>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?> -->

    <form action="<?php echo e(route('admin.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label for="cin">CIN:</label>
        <input type="text" name="cin" id="cin" value="<?php echo e(old('cin')); ?>"><br>

        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" value="<?php echo e(old('nom')); ?>"><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom" value="<?php echo e(old('prenom')); ?>"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>"><br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password"><br>

        <label for="numero_telephone">Numéro de téléphone:</label>
        <input type="text" name="numero_telephone" id="numero_telephone" value="<?php echo e(old('numero_telephone')); ?>"><br>

        <label for="role">Rôle:</label>
        <input type="text" name="role" id="role" value="<?php echo e(old('role')); ?>"><br>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
<?php /**PATH C:\Users\ASUS\Desktop\Esprit\4Twin\Stage\zina\resources\views/admin/create.blade.php ENDPATH**/ ?>