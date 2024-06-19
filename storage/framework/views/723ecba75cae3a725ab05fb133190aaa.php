<nav class="bg-gradient-custom flex flex-col">
    <div class="mb-8 flex items-center space-x-3">
        <div class="mb-8 flex items-center space-x-3 mt-6 p-4">
            <img class="w-16 h-16" src="gambar/logo_bosowa.png" alt="logo_unibos">
            <span class="text-white font-poppins tracking-widest text-4xl font-bold">SPENDOS</span>
        </div>
    </div>

    <!--sidebar-->
    <div class="flex-1">
        <div class="flex items-center space-x-4 ml-20 -mt-14">
            <!--svg dashboard-->
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24"><path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.557 2.75H4.682A1.932 1.932 0 0 0 2.75 4.682v3.875a1.942 1.942 0 0 0 1.932 1.942h3.875a1.942 1.942 0 0 0 1.942-1.942V4.682A1.942 1.942 0 0 0 8.557 2.75m10.761 0h-3.875a1.942 1.942 0 0 0-1.942 1.932v3.875a1.943 1.943 0 0 0 1.942 1.942h3.875a1.942 1.942 0 0 0 1.932-1.942V4.682a1.932 1.932 0 0 0-1.932-1.932m0 10.75h-3.875a1.942 1.942 0 0 0-1.942 1.933v3.875a1.942 1.942 0 0 0 1.942 1.942h3.875a1.942 1.942 0 0 0 1.932-1.942v-3.875a1.932 1.932 0 0 0-1.932-1.932M8.557 13.5H4.682a1.943 1.943 0 0 0-1.932 1.943v3.875a1.932 1.932 0 0 0 1.932 1.932h3.875a1.942 1.942 0 0 0 1.942-1.932v-3.875a1.942 1.942 0 0 0-1.942-1.942"/></svg>

            <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => '/dashboardkaprodi','active' => request()->is('dashboardkaprodi')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/dashboardkaprodi','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('dashboardkaprodi'))]); ?>Dashboard <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
        </div>
        
        <div class="flex items-center space-x-4 ml-20 mt-10">
            <!--svg dosen-->
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 28 28"><path fill="white" d="M11.768 3.496a4.25 4.25 0 0 1 4.464 0l9.912 6.116a.75.75 0 0 1 .017 1.266L22 13.598v6.652c0 .296-.162.48-.353.665a8 8 0 0 1-.409.373a11.3 11.3 0 0 1-1.54 1.105C18.366 23.193 16.421 24 14 24c-2.42 0-4.366-.807-5.698-1.607a11.3 11.3 0 0 1-1.54-1.105a9 9 0 0 1-.41-.373C6.163 20.73 6 20.55 6 20.25v-6.652l-3-1.961v6.113a.75.75 0 0 1-1.5 0V10.5q0-.065.01-.125a.75.75 0 0 1 .346-.763zM7.5 14.579v5.358q.097.09.238.212c.302.26.752.608 1.335.958c1.168.7 2.848 1.393 4.927 1.393c2.08 0 3.76-.693 4.927-1.393a10 10 0 0 0 1.573-1.17v-5.358l-4.174 2.73a4.25 4.25 0 0 1-4.652 0zm7.944-9.807a2.75 2.75 0 0 0-2.888 0l-8.908 5.496l8.847 5.785a2.75 2.75 0 0 0 3.01 0l8.847-5.785z"/></svg>

            <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => '/dosen','active' => request()->is('dosen')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/dosen','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('dosen'))]); ?>Dosen <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
        </div>

        <div class="flex items-center space-x-4 ml-20 mt-10">
            <!--svg mahasiswa-->
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 512 512"><path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M402 168c-2.93 40.67-33.1 72-66 72s-63.12-31.32-66-72c-3-42.31 26.37-72 66-72s69 30.46 66 72"/><path fill="none" stroke="white" stroke-miterlimit="10" stroke-width="32" d="M336 304c-65.17 0-127.84 32.37-143.54 95.41c-2.08 8.34 3.15 16.59 11.72 16.59h263.65c8.57 0 13.77-8.25 11.72-16.59C463.85 335.36 401.18 304 336 304Z"/><path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M200 185.94c-2.34 32.48-26.72 58.06-53 58.06s-50.7-25.57-53-58.06C91.61 152.15 115.34 128 147 128s55.39 24.77 53 57.94"/><path fill="none" stroke="white" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M206 306c-18.05-8.27-37.93-11.45-59-11.45c-52 0-102.1 25.85-114.65 76.2c-1.65 6.66 2.53 13.25 9.37 13.25H154"/></svg>

            <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => '/mahasiswa','active' => request()->is('mahasiswa')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/mahasiswa','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('mahasiswa'))]); ?>Mahasiswa <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
        </div>

        <div class="flex items-center space-x-4 ml-20 mt-10">
            <!--svg aspek-->
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24"><path fill="white" d="M13.885 9.592v-.93q.806-.408 1.726-.612t1.889-.204q.554 0 1.064.071q.509.072 1.052.202v.908q-.524-.167-1.02-.232q-.498-.064-1.096-.064q-.97 0-1.892.218q-.924.218-1.724.643m0 5.462v-.97q.768-.407 1.717-.611t1.899-.204q.554 0 1.064.072q.509.07 1.052.201v.908q-.524-.167-1.02-.232q-.498-.064-1.096-.064q-.97 0-1.892.235q-.924.234-1.724.665m0-2.712v-.969q.806-.408 1.726-.611t1.89-.204q.554 0 1.063.07q.51.072 1.052.203v.908q-.523-.168-1.02-.232q-.497-.065-1.095-.065q-.97 0-1.892.238q-.924.237-1.724.662M6.5 16.038q1.31 0 2.547.301t2.453.98V7.508q-1.083-.773-2.386-1.16q-1.305-.386-2.614-.386q-.9 0-1.576.107t-1.501.4q-.23.077-.327.222Q3 6.835 3 7.008v9.015q0 .27.192.394t.423.03q.548-.185 1.267-.297t1.618-.111m6 1.28q1.216-.678 2.453-.98t2.547-.3q.9 0 1.618.111t1.267.296q.23.096.423-.029t.192-.394V7.008q0-.173-.096-.308q-.096-.134-.327-.23q-.825-.293-1.501-.4T17.5 5.961q-1.31 0-2.613.386q-1.304.387-2.387 1.16zm-.5 1.45q-1.22-.834-2.62-1.282t-2.88-.448q-.78 0-1.534.13q-.753.131-1.466.42q-.544.217-1.022-.131T2 16.496V6.831q0-.371.195-.689t.547-.442q.881-.388 1.833-.563T6.5 4.962q1.47 0 2.866.423q1.398.423 2.634 1.23q1.237-.807 2.634-1.23t2.866-.423q.973 0 1.925.175t1.833.563q.352.125.547.442t.195.689v9.665q0 .614-.516.943q-.517.328-1.1.111q-.693-.27-1.418-.39q-.724-.121-1.466-.121q-1.48 0-2.88.448T12 18.769m-4.75-7.253"/></svg>

            <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => '/aspek','active' => request()->is('aspek')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/aspek','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('aspek'))]); ?>Aspek <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
        </div>

        <div class="flex items-center space-x-4 ml-20 mt-10">
            <!--svg kriteria-->
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 16 16"><path fill="white" fill-rule="evenodd" d="M4.5 3h7A1.5 1.5 0 0 1 13 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-7A1.5 1.5 0 0 1 3 11.5v-7A1.5 1.5 0 0 1 4.5 3m-3 1.5a3 3 0 0 1 3-3h7a3 3 0 0 1 3 3v7a3 3 0 0 1-3 3h-7a3 3 0 0 1-3-3zm4.75.75a1 1 0 1 1-2 0a1 1 0 0 1 2 0m1 0A.75.75 0 0 1 8 4.5h2.75a.75.75 0 0 1 0 1.5H8a.75.75 0 0 1-.75-.75M5.25 9a1 1 0 1 0 0-2a1 1 0 0 0 0 2m1 1.75a1 1 0 1 1-2 0a1 1 0 0 1 2 0M8 7.25a.75.75 0 0 0 0 1.5h2.75a.75.75 0 0 0 0-1.5zm-.75 3.5A.75.75 0 0 1 8 10h2.75a.75.75 0 0 1 0 1.5H8a.75.75 0 0 1-.75-.75" clip-rule="evenodd"/></svg>

            <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => '/kriteria','active' => request()->is('kriteria')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/kriteria','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('kriteria'))]); ?>Kriteria <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
        </div>

        <div class="flex items-center space-x-4 ml-20 mt-10">
            <!--svg nilai profile-->
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 32 32"><path fill="white" d="M14 8h-4V4H8v4H4v2h4v4h2v-4h4zM4 19h10v2H4zm0 5h10v2H4zM18 8h10v2H18zm6.41 14L28 18.41L26.59 17L23 20.59L19.41 17L18 18.41L21.59 22L18 25.59L19.41 27L23 23.41L26.59 27L28 25.59z"/></svg>
            
            <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => '/nilaiprofile','active' => request()->is('nilaiprofile')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/nilaiprofile','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('nilaiprofile'))]); ?>Nilai Profile <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
        </div>
        
        <!--card-->
        <div x-data="{ open: false }" class="container relative bg-gradient-custom-card rounded-xl w-64 h-40 mt-14 ml-6 mb-14 cursor-pointer">

            <!-- Avatar dan username -->
            <div class="pt-6">
                <div @click="open = !open" id="userAvatar" class="bg-white w-14 h-14 rounded-full ml-6 flex items-center justify-center text-black font-balsamiq text-center cursor-pointer hover:bg-opacity-75 transition duration-300 active:ring-2 active:ring-white">
                    AT
                </div>
                <div class="mt-6 ml-9">
                   <!-- Username yang login -->
                    <span class="text-xl font-balsamiq font-bold">Agnes Triani</span>
                </div>
            </div>

            <!-- Dropdown menu -->
            <div x-show="open" @click.away="open = false" id="dropdownMenu" class="absolute right-11 top-3 bg-red-600 shadow-lg rounded-md overflow-hidden z-10 w-32">
                <a href="/login" class="block px-4 py-2 text-xl text-center font-bold text-white font-balsamiq ">Log Out</a>
            </div>
        </div>
    </div>
</nav><?php /**PATH D:\laragon\www\application\resources\views/components/sidebar.blade.php ENDPATH**/ ?>