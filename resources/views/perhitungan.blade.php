<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
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
</x-layout>
