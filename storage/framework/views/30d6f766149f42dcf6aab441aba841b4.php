<?php $__env->startPush('scss'); ?>
<?php echo app('Illuminate\Foundation\Vite')(['resources/scss/app.scss', 'resources/scss/index.scss', 'resources/js/app.js' ]); ?>
<?php $__env->stopPush(); ?>
<?php if (isset($component)) { $__componentOriginal1e6834b7596effc838ab3adb1475b477 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e6834b7596effc838ab3adb1475b477 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.guest','data' => ['title' => 'Diseña tu experiencia en tu paso por Yucatán']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Diseña tu experiencia en tu paso por Yucatán']); ?>
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
            ¡Esto se trata de ti! <br>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('descripcion', null, []); ?> 
            Diseña tu experiencia en tu paso por Yucatán
         <?php $__env->endSlot(); ?>
        <div class="categorias">
             <?php $__env->slot('categorias', null, []); ?> 
                <div class="categorias">
                    <div class="categoria text-center">
                        <a href="" class="btn btn-secondary">Viaje de grupo</a>
                    </div>
                    <div class="categoria text-center">
                        <a href="" class="btn btn-secondary">Viaje de grupo</a>
                    </div>
                    <div class="categoria text-center">
                        <a href="" class="btn btn-secondary">Viaje de grupo</a>
                    </div>
                    <div class="categoria text-center">
                        <a href="" class="btn btn-secondary">Viaje de grupo</a>
                    </div>
                    <div class="categoria text-center">
                        <a href="" class="btn btn-secondary">Viaje de grupo</a>
                    </div>
                    <div class="categoria text-center">
                        <a href="" class="btn btn-secondary">Viaje de grupo</a>
                    </div>

                </div>
             <?php $__env->endSlot(); ?>
        </div>
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

    
    <?php if (isset($component)) { $__componentOriginal26757b28d951f574684c8bbd524086e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26757b28d951f574684c8bbd524086e3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buscador','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buscador'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal26757b28d951f574684c8bbd524086e3)): ?>
<?php $attributes = $__attributesOriginal26757b28d951f574684c8bbd524086e3; ?>
<?php unset($__attributesOriginal26757b28d951f574684c8bbd524086e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26757b28d951f574684c8bbd524086e3)): ?>
<?php $component = $__componentOriginal26757b28d951f574684c8bbd524086e3; ?>
<?php unset($__componentOriginal26757b28d951f574684c8bbd524086e3); ?>
<?php endif; ?>


    <section class="titular_index">
        <div class="titular_2 text-center">
            <h1>¡Tu aventura comienza hoy!</h1>
            <a href="#quienes-somos" class="arrow">
                <img src="<?php echo e(asset('/img/arrow.svg')); ?>" width="30" alt="Flecha">
            </a>
        </div>
    </section>
    <section id="quienes-somos" class="quienes-somos">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 contenido">
                    <h2>Quienes somos</h2>
                    <p>Tu camino por Yucatán. Una experiencia local, honesta, emocionante y única. Somos más que guías locales, más que rutas y transporte, más que agencia de viaje. Mucho Más. <br><br> Somos creadores de experiencias, hacedores de sueños, especialistas obsesionados por generar momentos extraordinarios, momentos inolvidables, momentos únicos. <br><br> Somos secretos, memorias, historias, comida, caminos escondidos… somos una experiencia honesta y local para quien quiere algo real.</p>
                    <div class="boton">
                        <a href="<?php echo e(route('experiencias')); ?>" class="btn btn-primary">Descubrir una experiencia para mi</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 img_contenido">
                    <img src="<?php echo e(asset('/img/webp/1.webp')); ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <?php $__currentLoopData = $experiencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experiencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if (isset($component)) { $__componentOriginalcd04675bcd308c995e5f66d109919a6f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcd04675bcd308c995e5f66d109919a6f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.destacadas.experiencia','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('destacadas.experiencia'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('titulocuerpo', null, []); ?> 
            <?php echo e($experiencia -> titulo); ?>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('descripcionLarga', null, []); ?> 
            <?php echo e($experiencia -> longdescription); ?>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('precio', null, []); ?> 
            <?php echo e($experiencia -> price); ?>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('botoncta', null, []); ?> 
            Quiero esta experiencia
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcd04675bcd308c995e5f66d109919a6f)): ?>
<?php $attributes = $__attributesOriginalcd04675bcd308c995e5f66d109919a6f; ?>
<?php unset($__attributesOriginalcd04675bcd308c995e5f66d109919a6f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd04675bcd308c995e5f66d109919a6f)): ?>
<?php $component = $__componentOriginalcd04675bcd308c995e5f66d109919a6f; ?>
<?php unset($__componentOriginalcd04675bcd308c995e5f66d109919a6f); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="cta-experiencia">
        <div class="container">
            <div class="titular">
                <h1>¿Quieres una experiencia a la medida?</h1>
                <div class="boton">
                    <a href="" class="btn btn-primary">Solicitar una experiencia</a>
                </div>
            </div>
        </div>
    </div>
    <section class="formulario">
        <div class="forms">
            <?php if (isset($component)) { $__componentOriginald14c18300c114dce22dba76b84260721 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald14c18300c114dce22dba76b84260721 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.formulario','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.formulario'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('formtitle', null, []); ?> 
                    ¿Te gustaría recibir nuestra ayuda?
                 <?php $__env->endSlot(); ?>
                Ponte en contacto con nosotros para definir tu siguiente aventura
                 <?php $__env->slot('forms', null, ['class' => 'formu']); ?> 
                    <?php if (isset($component)) { $__componentOriginal21708c91ab46e923b056c38b89f24342 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal21708c91ab46e923b056c38b89f24342 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-basic','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-basic'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal21708c91ab46e923b056c38b89f24342)): ?>
<?php $attributes = $__attributesOriginal21708c91ab46e923b056c38b89f24342; ?>
<?php unset($__attributesOriginal21708c91ab46e923b056c38b89f24342); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal21708c91ab46e923b056c38b89f24342)): ?>
<?php $component = $__componentOriginal21708c91ab46e923b056c38b89f24342; ?>
<?php unset($__componentOriginal21708c91ab46e923b056c38b89f24342); ?>
<?php endif; ?>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald14c18300c114dce22dba76b84260721)): ?>
<?php $attributes = $__attributesOriginald14c18300c114dce22dba76b84260721; ?>
<?php unset($__attributesOriginald14c18300c114dce22dba76b84260721); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald14c18300c114dce22dba76b84260721)): ?>
<?php $component = $__componentOriginald14c18300c114dce22dba76b84260721; ?>
<?php unset($__componentOriginald14c18300c114dce22dba76b84260721); ?>
<?php endif; ?>
        </div>
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
<?php endif; ?><?php /**PATH C:\laragon\www\beyondyucatan\resources\views/index.blade.php ENDPATH**/ ?>