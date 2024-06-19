<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
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
</x-layout>