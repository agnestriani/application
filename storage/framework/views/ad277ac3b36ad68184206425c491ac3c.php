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
                        <!-- Label untuk Kode-->
                        <label for="kode" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">Kode</span>
                        </label>
                        <!-- Input untuk NIDN -->
                        <input id="kode" class="bg-white w-60 h-14 text-black font-balsamiq p-4  focus:outline-blue-500 " type="text">
                    </div>

                    <div class="flex items-center space-x-3 mt-6" action="">
                        <!-- Label untuk Aspek-->
                        <label for="aspek" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">Aspek</span>
                        </label>
                        <!-- Input untuk Aspek-->
                        <input id="aspek" class="bg-white w-60 h-14 text-black font-balsamiq p-4  focus:outline-blue-500" type="text">
                    </div>

                    <div class="flex items-center space-x-3 mt-6" action="">
                        <!-- Label untuk Nama Kriteria-->
                        <label for="namakriteria" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">Nama Kriteria</span>
                        </label>
                        <!-- Input untuk no hp -->
                        <input id="namakriteria" class="bg-white w-60 h-14 text-black font-balsamiq p-4  focus:outline-blue-500" type="text">
                    </div>

                    <div class="flex items-center space-x-3 mt-6" action="">
                        <!-- Label untuk Nilai-->
                        <label for="nilai" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">Nilai</span>
                        </label>
                        <!-- Input untuk Nilai -->
                        <input id="nilai" class="bg-white w-60 h-14 text-black font-balsamiq p-4 focus:outline-blue-500" type="text">
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
<?php endif; ?><?php /**PATH D:\laragon\www\application\resources\views/tambahkriteria.blade.php ENDPATH**/ ?>