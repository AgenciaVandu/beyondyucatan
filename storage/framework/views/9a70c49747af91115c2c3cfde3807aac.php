<?php $__env->startPush('scss'); ?>
<?php echo app('Illuminate\Foundation\Vite')(['resources/scss/app.scss', 'resources/scss/detallebucket.scss', 'resources/js/app.js' ]); ?>
<?php $__env->stopPush(); ?>
<?php if (isset($component)) { $__componentOriginal1e6834b7596effc838ab3adb1475b477 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e6834b7596effc838ab3adb1475b477 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.guest','data' => ['title' => 'Comienza tu aventura en Yucatán']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Comienza tu aventura en Yucatán']); ?>
    <?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('tituloheader', null, []); ?> 
            <?php echo e($bucket -> title); ?>

         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
    <section class="intro">
        <div class="container">
            <p><?php echo e($bucket -> description); ?></p>
            <div class="cta">
                <div class="iconos">
                    <ul>
                        <li class="me-3">
                            <span class="me-2">
                                <img src="<?php echo e(asset('img/icon.png')); ?>" alt="icono experiencia">
                            </span>
                            <p class="m-auto"><?php echo e($bucket -> days); ?> Días</p>
                        </li>
                        <li>
                            <span class="me-2">
                                <img src="<?php echo e(asset('img/icon.png')); ?>" alt="icono experiencia">
                            </span>
                            <p class="m-auto"><?php echo e($bucket -> typetour); ?></p>
                        </li>

                    </ul>
                </div>
                <div class="costo">
                    <p>
                        <span>Desde:</span>
                        $ <span><?php echo e($bucket -> price); ?></span> MXN P/P
                    </p>
                    <hr>
                </div>
            </div>
            <div class="boton">
                <a href="<?php echo e(route('cotizador')); ?>" class="btn btn-primary">Quiero vivir esta experiencia</a>
            </div>

        </div>
    </section>
    <hr>
    <div class="dias">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 p-0 imagen">
                    <img src="<?php echo e(asset('/img/balon.jpg')); ?>" alt="experiencia bucketlist">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                    <div class="descripcion">
                        <h2>Día 1</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum doloremque, odio consequuntur blanditiis ducimus cumque omnis consequatur reiciendis, in nemo deleniti ut numquam deserunt laborum molestiae nisi ab tenetur? Natus earum minima fuga tempora aliquid, quas facilis corporis reiciendis excepturi!
                            <br><br>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam laboriosam unde sequi, esse incidunt suscipit soluta quaerat odio iure ullam est qui tempora a, voluptatem deleniti praesentium, quo adipisci harum.
                        </p>
                        <div class="cta">
                            <div class="iconos">
                                <ul>
                                    <li class="me-1">
                                        <span>
                                            <img src="<?php echo e(asset('img/icon.svg')); ?>" alt="icono experiencia">
                                        </span>
                                    </li>
                                    <li class="me-1">
                                        <span>
                                            <img src="<?php echo e(asset('img/icon.svg')); ?>" alt="icono experiencia">
                                        </span>
                                    </li>
                                    <li class="me-1">
                                        <span>
                                            <img src="<?php echo e(asset('img/icon.svg')); ?>" alt="icono experiencia">
                                        </span>
                                    </li>


                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                    <div class="descripcion">
                        <h2>Día 2</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum doloremque, odio consequuntur blanditiis ducimus cumque omnis consequatur reiciendis, in nemo deleniti ut numquam deserunt laborum molestiae nisi ab tenetur? Natus earum minima fuga tempora aliquid, quas facilis corporis reiciendis excepturi!
                            <br><br>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam laboriosam unde sequi, esse incidunt suscipit soluta quaerat odio iure ullam est qui tempora a, voluptatem deleniti praesentium, quo adipisci harum.
                        </p>
                        <div class="cta">
                            <div class="iconos">
                                <ul>
                                    <li class="me-1">
                                        <span>
                                            <img src="<?php echo e(asset('img/icon.svg')); ?>" alt="icono experiencia">
                                        </span>
                                    </li>
                                    <li class="me-1">
                                        <span>
                                            <img src="<?php echo e(asset('img/icon.svg')); ?>" alt="icono experiencia">
                                        </span>
                                    </li>
                                    <li class="me-1">
                                        <span>
                                            <img src="<?php echo e(asset('img/icon.svg')); ?>" alt="icono experiencia">
                                        </span>
                                    </li>


                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 p-0 imagen">
                    <img src="<?php echo e(asset('/img/balon.jpg')); ?>" alt="experiencia bucketlist">
                </div>
            </div>

        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginal11f50060b3c5321adee6eeb7811c26a2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal11f50060b3c5321adee6eeb7811c26a2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.destacadas.ventacruzada','data' => ['experiences' => $experiences]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('destacadas.ventacruzada'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['experiences' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($experiences)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal11f50060b3c5321adee6eeb7811c26a2)): ?>
<?php $attributes = $__attributesOriginal11f50060b3c5321adee6eeb7811c26a2; ?>
<?php unset($__attributesOriginal11f50060b3c5321adee6eeb7811c26a2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11f50060b3c5321adee6eeb7811c26a2)): ?>
<?php $component = $__componentOriginal11f50060b3c5321adee6eeb7811c26a2; ?>
<?php unset($__componentOriginal11f50060b3c5321adee6eeb7811c26a2); ?>
<?php endif; ?>
    <section class="llamada">
        <?php if (isset($component)) { $__componentOriginala649cfbd6b1ff6fb80672d9879217508 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala649cfbd6b1ff6fb80672d9879217508 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cta','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala649cfbd6b1ff6fb80672d9879217508)): ?>
<?php $attributes = $__attributesOriginala649cfbd6b1ff6fb80672d9879217508; ?>
<?php unset($__attributesOriginala649cfbd6b1ff6fb80672d9879217508); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala649cfbd6b1ff6fb80672d9879217508)): ?>
<?php $component = $__componentOriginala649cfbd6b1ff6fb80672d9879217508; ?>
<?php unset($__componentOriginala649cfbd6b1ff6fb80672d9879217508); ?>
<?php endif; ?>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e6834b7596effc838ab3adb1475b477)): ?>
<?php $attributes = $__attributesOriginal1e6834b7596effc838ab3adb1475b477; ?>
<?php unset($__attributesOriginal1e6834b7596effc838ab3adb1475b477); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e6834b7596effc838ab3adb1475b477)): ?>
<?php $component = $__componentOriginal1e6834b7596effc838ab3adb1475b477; ?>
<?php unset($__componentOriginal1e6834b7596effc838ab3adb1475b477); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\beyondyucatan\resources\views/viajes/detallebucket.blade.php ENDPATH**/ ?>