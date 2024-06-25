<section class="intereses">
    <div class="container-fluid">
        <div class="text-center pb-5">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing.</h1>
        </div>
    </div>
    <div class="opciones">
        <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="#" class="opcion">
                <div class="contenido">
                    <?php if($experience->imagedestacada): ?>
                        <img src="<?php echo e(asset($experience->imagedestacada)); ?>" alt="experiencia interesante">
                    <?php endif; ?>
                    <?php if($experience->image): ?>
                        <img src="<?php echo e(asset($experience->image)); ?>" alt="experiencia interesante">
                    <?php endif; ?>
                    <div class="interior">
                        <h3><?php echo e($experience->titulo); ?></h3>
                        <div class="boton">
                            <button class="btn-secondary">
                                Ver
                            </button>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php /**PATH C:\laragon\www\beyondyucatan\resources\views/components/destacadas/ventacruzada.blade.php ENDPATH**/ ?>