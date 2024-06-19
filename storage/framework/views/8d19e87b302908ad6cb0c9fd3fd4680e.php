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
        <!-- tabel1-->
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
                        <td class="border border-slate-700 p-2 text-center"></td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section>
        <div class="flex justify-items-center mt-20">
            <div class="flex justify-start mt-2 ml-2">
                <span class="text-black text-xl font-balsamiq font-bold">Hasil Perhitungan</span>
            </div>
        </div>

        <!-- tabel2-->
        <div class="mt-20">
            <table class="border border-slate-700 w-full m-2">
                <thead>
                    <tr>
                        <td class="border border-slate-700 p-2 text-center">No</td>
                        <td class="border border-slate-700 p-2 text-center">Nama Dosen</td>
                        <td class="border border-slate-700 p-2 text-center">Core Factor</td>
                        <td class="border border-slate-700 p-2 text-center">Secondary Factor</td>
                        <td class="border border-slate-700 p-2 text-center">Total</td>
                        <td class="border border-slate-700 p-2 text-center">Ranking</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center">
                        </td>
                        <td class="border border-slate-700 p-2 text-center">
                        </td>
                        <td class="border border-slate-700 p-2 text-center">
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center">
                        </td>
                        <td class="border border-slate-700 p-2 text-center">
                        </td>
                    </tr>
                </tbody>
            </table>
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
<?php endif; ?>
<?php /**PATH D:\laragon\www\application\resources\views/perhitungan.blade.php ENDPATH**/ ?>