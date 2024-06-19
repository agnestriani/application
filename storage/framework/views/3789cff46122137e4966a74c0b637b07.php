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
        <!--button-->
        <div class="flex justify-end mt-2 items-center">
            <div x-data="{ open: false }" class="relative inline-block text-left">
                <div class="bg-gradient-custom-search rounded-full w-60 h-10 flex items-center justify-between px-3">
                    <span class="text-black font-balsamiq font-medium text-xl">Core Factor</span>
                    <button @click="open = !open" type="button" class="flex items-center justify-center" aria-expanded="true" aria-haspopup="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" :class="{'transform rotate-180': open}">
                            <path fill="black" d="M7 10l5 5 5-5z"/>
                        </svg>
                    </button>
                </div>
            
                <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10">
                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="dropdownButton">
                    <a href="/nilaiprofilesecond" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Secondary Factor</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <!--form-->
        <div class="mt-20 flex justify-center">
            <div class="flex justify-start items-center">
                <form >
                    <div class="flex items-center space-x-3" action="">
                        <!-- Label untuk K1-->
                        <label for="k1" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">K1</span>
                        </label>
                        <!-- Input untuk K1 -->
                        <input id="k1" class="bg-white w-60 h-14 text-black font-balsamiq p-4  focus:outline-blue-500 " type="text">
                    </div>

                    <div class="flex items-center space-x-3 mt-6" action="">
                        <!-- Label untuk K2-->
                        <label for="k2" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">K2</span>
                        </label>
                        <!-- Input untuk K2-->
                        <input id="k2" class="bg-white w-60 h-14 text-black font-balsamiq p-4  focus:outline-blue-500" type="text">
                    </div>

                    <div class="flex items-center space-x-3 mt-6" action="">
                        <!-- Label untuk K3-->
                        <label for="k3" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">K3</span>
                        </label>
                        <!-- Input untuk K3 -->
                        <input id="k3" class="bg-white w-60 h-14 text-black font-balsamiq p-4  focus:outline-blue-500" type="text">
                    </div>

                    <div class="flex items-center space-x-3 mt-6" action="">
                        <!-- Label untuk K4-->
                        <label for="k4" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">K4</span>
                        </label>
                        <!-- Input untuk K4-->
                        <input id="k4" class="bg-white w-60 h-14 text-black font-balsamiq p-4 focus:outline-blue-500" type="text">
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
<?php endif; ?><?php /**PATH D:\laragon\www\application\resources\views/tambahcore.blade.php ENDPATH**/ ?>