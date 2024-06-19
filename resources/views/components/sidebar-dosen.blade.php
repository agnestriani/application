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

            <x-nav-link href="/dashboarddosen" :active="request()->is('dashboarddosen')">Dashboard</x-nav-link>
        </div>
        
        <div class="flex items-center space-x-4 ml-20 mt-10">
            <!--svg dosen-->
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 28 28"><path fill="white" d="M11.768 3.496a4.25 4.25 0 0 1 4.464 0l9.912 6.116a.75.75 0 0 1 .017 1.266L22 13.598v6.652c0 .296-.162.48-.353.665a8 8 0 0 1-.409.373a11.3 11.3 0 0 1-1.54 1.105C18.366 23.193 16.421 24 14 24c-2.42 0-4.366-.807-5.698-1.607a11.3 11.3 0 0 1-1.54-1.105a9 9 0 0 1-.41-.373C6.163 20.73 6 20.55 6 20.25v-6.652l-3-1.961v6.113a.75.75 0 0 1-1.5 0V10.5q0-.065.01-.125a.75.75 0 0 1 .346-.763zM7.5 14.579v5.358q.097.09.238.212c.302.26.752.608 1.335.958c1.168.7 2.848 1.393 4.927 1.393c2.08 0 3.76-.693 4.927-1.393a10 10 0 0 0 1.573-1.17v-5.358l-4.174 2.73a4.25 4.25 0 0 1-4.652 0zm7.944-9.807a2.75 2.75 0 0 0-2.888 0l-8.908 5.496l8.847 5.785a2.75 2.75 0 0 0 3.01 0l8.847-5.785z"/></svg>

            <x-nav-link href="/dosen" :active="request()->is('dosen')">Dosen</x-nav-link>
        </div>

        <!--card-->
        <div class="container relative bg-gradient-custom-card rounded-xl w-64 h-40 mt-14 ml-6 mb-14 cursor-pointer">

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
</nav>