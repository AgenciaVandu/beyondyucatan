<section class="experiencias">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 p-0 img_contenido">
                    <img src="<?php echo e(asset($image ?? '')); ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 contenido m-auto">
                    <h2><?php echo e($titulocuerpo ?? 'No disponible'); ?></h2>
                    <p>
                        <?php echo e($descripcionLarga ?? 'No disponible'); ?>

                    </p>
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
                                $ <span><?php echo e($precio ?? 'N/A'); ?></span> mxn P/p
                            </p>
                            <hr>
                        </div>
                    </div>
                    <div class="boton">
                        <a href="<?php echo e(route ('cotizador-grupo')); ?>" class="btn btn-primary"><?php echo e($botoncta); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php /**PATH C:\laragon\www\beyondyucatan\resources\views/components/destacadas/experiencia.blade.php ENDPATH**/ ?>