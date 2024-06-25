<?php $__env->startPush('scss'); ?>
<?php echo app('Illuminate\Foundation\Vite')(['resources/scss/app.scss', 'resources/scss/cotizador.scss', 'resources/js/app.js' ]); ?>
<?php $__env->stopPush(); ?>
<?php if (isset($component)) { $__componentOriginal1e6834b7596effc838ab3adb1475b477 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e6834b7596effc838ab3adb1475b477 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.guest','data' => ['title' => 'Cotiza tu experiencia']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Cotiza tu experiencia']); ?>
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
        ¡Bienvenido a Yucatán!
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
    <section class="cotizador">
        <div class="container">
            <div class="text-center">
                <h1>Continua con tu aventura</h1>
                <span>Mándanos tus datos para ponernos en contacto contigo </span>
            </div>
            <div class="formulario-cotizador">
                <form action="" class="contenido_cotizador">
                    <div class="row g-3">
                        <div class="col-lg-6 col-md-6 col-6">
                            <div class="form-group">
                                <input type="text" class="form-control w-100" placeholder="Fecha de llegada" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="form-group">
                                <input type="number" class="form-control" id="adults" placeholder="Adultos">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="form-group">
                                <input type="number" class="form-control" id="kids" placeholder="niños">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre" id="name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Teléfono" id="tel">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mt-3">
                                <input type="mail" class="form-control" placeholder="Correo" id="mail">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="rangoItinerario" class="form-label">¿Qué tan ocupado quieres tu itinerario?</label>
                        <input type="range" class="form-range" id="rangoItinerario">
                        <div class="ocupacion">
                            <ul>
                                <li>Diseñado para descansar</li>
                                <li>Relajado y con paseos</li>
                                <li>Itinerario ocupado</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row checks">
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <p>Estás interesado en:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="masexperiencias">
                                <label class="form-check-label" for="masexperiencias">
                                Quisiera más experiencias para otros días durante mi estancia
                                </label>
                            </div>
                        </div>
                       
                    </div>
                    <div class="form-group mt-3">
                        <textarea type="text" class="form-control" id="in" placeholder="Comentarios adicionales o requerimientos especiales" rows="5"></textarea>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Enviar Información</button>
                    </div>
                </form>

            </div>
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
<?php endif; ?><?php /**PATH C:\laragon\www\beyondyucatan\resources\views/formularios/cotizar-grupo.blade.php ENDPATH**/ ?>