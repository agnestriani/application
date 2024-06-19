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
        <!--button search-->
        <div x-data="{ searchQuery: '', isFocused: false }" class="flex justify-end mt-2">
            <div :class="{'ring ring-blue-400': isFocused}" class="bg-gradient-custom-search rounded-full w-60 h-10 flex items-center px-3 transition duration-300 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                     <path fill="black" d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0c.41-.41.41-1.08 0-1.49zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14"/>
                </svg>
                <input type="text" placeholder="Search" name="search" id="searchInput" x-model="searchQuery" @input="performSearch" @focus="isFocused = true" @blur="isFocused = false" class="placeholder-black text-black font-balsamiq font-medium text-xl w-full bg-transparent focus:outline-none">
            </div>
        </div>
    </section>

    <section>
        <!-- tabel-->
        <div class="mt-4">
            <table class="border border-slate-700 w-full m-2">
                <thead>
                    <tr>
                        <td class="border border-slate-700 p-2 text-center">No</td>
                        <td class="border border-slate-700 p-2 text-center">NIM</td>
                        <td class="border border-slate-700 p-2 text-center">Nama Mahasiswa</td>
                        <td class="border border-slate-700 p-2 text-center">Tanggal Pengajuan</td>
                        <td class="border border-slate-700 p-2 text-center">Judul Skripsi</td>
                        <td class="border border-slate-700 p-2 text-center">Dosen Pembimbing 1</td>
                        <td class="border border-slate-700 p-2 text-center">Dosen Pembimbing 2</td>
                        <td class="border border-slate-700 p-2 text-center">Action</td>
                    </tr>
                </thead>
                <tbody>
                <tr>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center"></td>
                        <td class="border border-slate-700 p-2 text-center">
                            <div class="flex items-center justify-center space-x-2">
                                <a href="/pemilihandosen" title="Pilih">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24"><path fill="black" d="M5.385 21.23q-.69 0-1.153-.462t-.463-1.152v-3.204l3.212-3.625l.713.713l-2.884 3.27h14.38l-2.834-3.22l.713-.713l3.162 3.575v3.204q0 .69-.463 1.152t-1.152.463zm0-1h13.23q.25 0 .433-.182t.183-.432v-1.847H4.769v1.847q0 .25.183.432q.183.183.433.183m5.51-6.317l-2.987-3.025q-.48-.48-.467-1.144t.492-1.143l4.38-4.38q.48-.48 1.137-.485t1.137.473l3.005 3.006q.48.478.485 1.13t-.473 1.131l-4.442 4.442q-.48.479-1.134.476q-.655-.003-1.134-.481m5.972-5.12q.153-.154.153-.442t-.153-.442l-2.968-2.968q-.154-.153-.442-.153t-.442.153L8.62 9.335q-.154.153-.154.442t.154.442l2.968 2.968q.153.154.442.154t.442-.154zM4.769 20.231v-2.462z"/></svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section>
        <!--pagination teks-->
        <div class="flex justify-items-center mt-20">
            <div class="flex justify-start mt-2 ml-2">
                <span class="text-black text-xl font-balsamiq font-bold">Showing you 5 out of 23</span>
            </div>

            <!--pagination button-->
            <div class="flex justify-end mt-2 ml-2">
                <div class="flex items-center justify-center space-x-2 my-4">
                    <!-- Link to page 1 -->
                    <a href="?page=1" class="px-4 py-2 bg-[#3687FF] text-white rounded hover:bg-blue-700">1</a>
                
                    <!-- Link to page 2 -->
                    <a href="?page=2" class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">2</a>
                
                    <!-- Link to page 3 -->
                    <a href="?page=3" class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">3</a>
                
                    <!-- tanda panah kanan navigation -->
                    <a href="?page=4" class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
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
<?php endif; ?>
<?php /**PATH D:\laragon\www\application\resources\views/dashboardkaprodi.blade.php ENDPATH**/ ?>