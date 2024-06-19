<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section>
        <!--form-->
        <div class="mt-20 flex justify-center">
            <div class="flex justify-start items-center">
                <form >
                    <div class="flex items-center space-x-3" action="">
                        <!-- Label untuk NIM -->
                        <label for="nim" class="bg-white w-60 h-14 flex items-center px-3">
                        <span class="text-black font-balsamiq font-normal text-xl">NIM</span>
                        </label>
                    <!-- Input untuk NIM -->
                        <input id="nim" class="bg-white w-60 h-14 text-black font-balsamiq p-4 focus:outline-blue-500" type="text">
                    </div>

                    <div class="flex items-center space-x-3 mt-6" action="">
                        <!-- Label untuk nama mahasiswa-->
                        <label for="namamahasiswa" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">Nama Mahasiswa</span>
                        </label>
                        <!--Input untuk nama mahasiswa -->
                        <input id="namamahasiswa" class="bg-white w-60 h-14 text-black font-balsamiq p-4 focus:outline-blue-500" type="text">
                    </div>

                    <div class="flex items-center space-x-3 mt-6" action="">
                        <!--Label jenis kelamin-->
                        <label for="jeniskelamin" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">Jenis Kelamin</span>
                        </label>
                        <!--Input jenis kelamin-->
                        <input id="jeniskelamin" name="jeniskelamin" class="form-radio text-blue-500 p-4" type="radio" value="laki-laki">
                        <span class="ml-2 text-black font-balsamiq">Laki-laki</span>
                        <input id="jeniskelamin" name="jeniskelamin" class="form-radio text-blue-500 p-4" type="radio" value="perempuan">
                        <span class="ml-2 text-black font-balsamiq">Perempuan</span>
                    </div>

                    <div class="flex items-center space-x-3 mt-6" action="">
                        <!-- Label untuk No Hp -->
                        <label for="nohp" class="bg-white w-60 h-14 flex items-center px-3">
                            <span class="text-black font-balsamiq font-normal text-xl">No Hp</span>
                        </label>
                        <!-- Input untuk No Hp -->
                        <input id="nohp" class="bg-white w-60 h-14 text-black font-balsamiq p-4 focus:outline-blue-500" type="text">
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
</x-layout>