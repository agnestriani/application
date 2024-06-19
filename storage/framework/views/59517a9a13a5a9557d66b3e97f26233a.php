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
        <!-- tabel-->
        <div class="mt-20">
            <table class="border border-slate-700 w-full m-2">
                <thead>
                    <tr>
                        <td class="border border-slate-700 p-2 text-center">No</td>
                        <td class="border border-slate-700 p-2 text-center">NIDN</td>
                        <td class="border border-slate-700 p-2 text-center">Nama Dosen</td>
                        <td class="border border-slate-700 p-2 text-center">Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center">
                            <div class="flex items-center justify-center space-x-2">
                                <form action="">
                                    <input type="checkbox" id="" name="" value="">
                                    <label for="" class="">Pilih</label>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center">
                            <div class="flex items-center justify-center space-x-2">
                                <form action="">
                                    <input type="checkbox" id="" name="" value="">
                                    <label for="" class="">Pilih</label>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-4 flex justify-center">
            <div class="flex justify-start items-center">
                <div class="bg-blue-500 my-9 flex-row ml-96 p-2 gap-4 rounded-3xl font-balsamisq font-bold w-32 h-11 text-center hover:font-semibold hover:text-white tracking-widest active:bg-sky-600">
                    <a href="/perhitungan">Perhitungan</a>
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
<?php endif; ?><?php /**PATH D:\laragon\www\application\resources\views/pemilihandosen.blade.php ENDPATH**/ ?>