<div class="card">
    <a href="">
        <?php echo e($imagenExperiencia ?? 'no disponible'); ?>

    </a>
    <div class="contenido1">
        <h3><?php echo e($tituloExperiencia ?? 'Título no disponible'); ?></h3>
        <p><?php echo e($descripcionExperiencia ?? 'Descripción no disponible'); ?></p>
    </div>
    <div class="cta">
        <div class="iconos">
            <ul>
                <li>
                    <img src="<?php echo e(asset('img/icon.svg')); ?>" alt="icono experiencia">
                </li>
                <li>
                    <img src="<?php echo e(asset('img/icon.svg')); ?>" alt="icono experiencia">
                </li>
                <li>
                    <img src="<?php echo e(asset('img/icon.svg')); ?>" alt="icono experiencia">
                </li>
            </ul>
        </div>
        <div class="costo">
            <p>
                <span>Desde:</span>
                $ <span><?php echo e($precio ?? 'N/A'); ?></span> mxn
            </p>
            <hr>
        </div>
    </div>
    <div class="boton text-center">
       <?php echo e($btnExperiencia); ?>

    </div>
</div>
<?php /**PATH C:\laragon\www\beyondyucatan\resources\views/components/cards.blade.php ENDPATH**/ ?>