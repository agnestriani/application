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
        <div class="flex justify-end mt-2 items-center">
            <div x-data="{ searchQuery: '', isFocused: false }" class="flex justify-end mt-2">
                <div :class="{'ring ring-blue-400': isFocused}" class="bg-gradient-custom-search rounded-full w-60 h-10 flex items-center px-3 transition duration-300 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="black" d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0c.41-.41.41-1.08 0-1.49zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14"/>
                    </svg>
                    <input type="text" placeholder="Search" name="search" id="searchInput" x-model="searchQuery" @input="performSearch" @focus="isFocused = true" @blur="isFocused = false" class="placeholder-black text-black font-balsamiq font-medium text-xl w-full bg-transparent focus:outline-none">
                </div>
            </div>
            <div id="circleButton" class="bg-[#3687FF] hover:bg-opacity-80 w-14 h-14 rounded-full ml-6 flex items-center justify-center cursor-pointer transition duration-300 active:ring-2">
                <a href="/tambahdosen" title="Tambah" class="flex items-center justify-center w-full h-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="white" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2"/></svg>
                </a>
            </div>
        </div>
    </section>

    <section>
        <!-- tabel-->
        <div class="mt-4">
            <table class="border border-slate-700 w-full">
                <thead>
                    <tr>
                        <td class="border border-slate-700 p-2 text-center">No</td>
                        <td class="border border-slate-700 p-2 text-center">NIDN</td>
                        <td class="border border-slate-700 p-2 text-center">Nama Dosen</td>
                        <td class="border border-slate-700 p-2 text-center">No Hp</td>
                        <td class="border border-slate-700 p-2 text-center">Batas Pembimbing 1</td>
                        <td class="border border-slate-700 p-2 text-center">Batas Pembimbing 2</td>
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
                        <td class="border border-slate-700 p-2 text-center">
                            <div class="flex items-center justify-center space-x-2">
                                <a href="updatedosen.php" title="Ubah">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/><path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3zM16 5l3 3"/></g></svg>
                                </a>
                                <a href="#" title="Hapus">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="black" d="M10 5h4a2 2 0 1 0-4 0M8.5 5a3.5 3.5 0 1 1 7 0h5.75a.75.75 0 0 1 0 1.5h-1.32l-1.17 12.111A3.75 3.75 0 0 1 15.026 22H8.974a3.75 3.75 0 0 1-3.733-3.389L4.07 6.5H2.75a.75.75 0 0 1 0-1.5zm2 4.75a.75.75 0 0 0-1.5 0v7.5a.75.75 0 0 0 1.5 0zM14.25 9a.75.75 0 0 1 .75.75v7.5a.75.75 0 0 1-1.5 0v-7.5a.75.75 0 0 1 .75-.75m-7.516 9.467a2.25 2.25 0 0 0 2.24 2.033h6.052a2.25 2.25 0 0 0 2.24-2.033L18.424 6.5H5.576z"/></svg>
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
                <span class="text-black text-xl font-balsamiq font-bold">Showing you 5 out of 5</span>
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
<?php endif; ?><?php /**PATH D:\laragon\www\application\resources\views/dosen.blade.php ENDPATH**/ ?>