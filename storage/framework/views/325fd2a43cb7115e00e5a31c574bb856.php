<?php $__env->startPush('scss'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/scss/app.scss', 'resources/scss/experiencia.scss', 'resources/js/app.js']); ?>
<?php $__env->stopPush(); ?>
<?php if (isset($component)) { $__componentOriginal1e6834b7596effc838ab3adb1475b477 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e6834b7596effc838ab3adb1475b477 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.guest','data' => ['title' => $experiencia->titulo]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($experiencia->titulo)]); ?>
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
            <?php echo e($experiencia->titulo); ?>

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
    <section class="titular">
        <div class="container">
            <p><?php echo e($experiencia->lightdescription); ?></p>
        </div>
    </section>
    <section>
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
             <?php $__env->slot('image', null, []); ?> 
                <?php echo e($experiencia->image); ?>

             <?php $__env->endSlot(); ?>
             <?php $__env->slot('titulocuerpo', null, []); ?> 
                <?php echo e($experiencia->titulo); ?>

             <?php $__env->endSlot(); ?>
             <?php $__env->slot('descripcionLarga', null, []); ?> 
                <?php echo e($experiencia->longdescription); ?>

             <?php $__env->endSlot(); ?>
             <?php $__env->slot('precio', null, []); ?> 
                <?php echo e($experiencia->price); ?>

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
    </section>
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
<?php /**PATH C:\laragon\www\beyondyucatan\resources\views/viajes/experiencia.blade.php ENDPATH**/ ?>