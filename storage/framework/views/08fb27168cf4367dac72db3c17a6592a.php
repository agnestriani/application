<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
    <section>
        <!--form-->
        <div class="mt-20 flex justify-center">
            <div class="flex justify-start items-center">
                <form >
                    <div class="flex items-center space-x-3" action="">
                        <!-- Label untuk NIDN-->
                        <label for="nidn" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">NIDN</span>
                        </label>
                        <!-- Input untuk NIDN -->
                        <input id="nidn" class="bg-white w-60 h-14 text-black font-balsamiq p-4 focus:outline-blue-500" type="text">
                    </div>

                    <div class="flex items-center space-x-3 mt-6" action="">
                        <!-- Label untuk nama dosen-->
                        <label for="namadosen" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">Nama Dosen</span>
                        </label>
                        <!-- Input untuk nama dosen-->
                        <input id="namadosen" class="bg-white w-60 h-14 text-black font-balsamiq p-4  focus:outline-blue-500" type="text">
                    </div>

                    <div class="flex items-center space-x-3 mt-6" action="">
                        <!-- Label untuk no hp-->
                        <label for="nohp" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">No Hp</span>
                        </label>
                        <!-- Input untuk no hp -->
                        <input id="nohp" class="bg-white w-60 h-14 text-black font-balsamiq p-4  focus:outline-blue-500" type="text">
                    </div>

                    <div class="flex items-center space-x-3 mt-6" action="">
                        <!-- Label untuk no hp-->
                        <label for="bataspembimbing1" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">Batas Pembimbing 1</span>
                        </label>
                        <!-- Input untuk batas pembimbing 1 -->
                        <input id="bataspembimbing1" class="bg-white w-60 h-14 text-black font-balsamiq p-4  focus:outline-blue-500" type="text">
                    </div>

                    <div class="flex items-center space-x-3 mt-6" action="">
                        <!-- Label untuk batas pembimbing 2-->
                        <label for="bataspembimbing2" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">Batas Pembimbing 2</span>
                        </label>
                        <!-- Input untuk batas pembimbing 2 -->
                        <input id="bataspembimbing2" class="bg-white w-60 h-14 text-black font-balsamiq p-4  focus:outline-blue-500" type="text">
                    </div>
                </form>
            </div>
        </div>

        <div class="mt-4 flex justify-center">
            <div class="flex justify-start items-center">
                <div class="bg-blue-500 my-9 flex-row ml-96 p-3 gap-4 rounded-3xl font-balsamiq font-bold w-24 h-11 text-center hover:font-semibold hover:text-white tracking-widest active:bg-sky-600">
                    <a href="">Submit</a>
                </div>
            </div>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\application\resources\views/tambahdosen.blade.php ENDPATH**/ ?>