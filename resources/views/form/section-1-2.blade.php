@extends('templates.default')

@section('content')
<div class="mt-24 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF] text-[#000000]">
    <h1 class="my-4 md:my-10 text-2xl md:text-4xl font-bold md:font-black text-center">PERSON ANALYSIS RESPONSE</h1>
</div>
<div class="mt-8 lg:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF] text-[#000000]">
    <h1 class="mt-8 text-center font-bold text-2xl">INSTRUKSI PENGERJAAN</h1>
    <h4 class="ml-12 mr-12 text-1xl mt-4">1. Setiap soal harus memiliki satu jawaban P(aling) dan satu jawaban T(idak)</h4>
    <h4 class="ml-12 mr-12 text-1xl mt-4">2. Jawaban yang sudah dipilih di baris P tidak boleh dipilih kembali di baris T, maupun sebaliknya </h4>
    <h4 class="mb-8 ml-12 mr-12 text-1xl mt-4">3. Pilihlah jawaban yang sesuai dengan karakter anda</h4>
</div>
<form action="">
    @csrf
    <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
        <div class="flex">
            <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
            <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                9
            </div>
            <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
        </div>
        <ul>
            <li class="flex h-auto">
                <input type="checkbox" id="1-1-1" class="peer/1-1-1 hidden single-checkbox check1" value="" {{ $question['1.1'] == 'd' ? 'checked' : ''}}/>
                <label for="1-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/1-1-1:bg-green-500 peer-checked/1-1-1:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Yang penting ada hasil</h1>
                </div>
                <input type="checkbox" id="1-2-1" class="peer/1-2-1 hidden single-checkbox1 check1" value="" />
                <label for="1-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/1-2-1:bg-green-500 peer-checked/1-2-1:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="1-1-2" class="peer/1-1-2 hidden single-checkbox check2" value="" />
                <label for="1-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/1-1-2:bg-green-500 peer-checked/1-1-2:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Kerjakan dengan benar, ketepatan sangat penting</h1>
                </div>
                <input type="checkbox" id="1-2-2" class="peer/1-2-2 hidden single-checkbox1 check2" />
                <label for="1-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/1-2-2:bg-green-500 peer-checked/1-2-2:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="1-1-3" class="peer/1-1-3 hidden single-checkbox check3" />
                <label for="1-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/1-1-3:bg-green-500 peer-checked/1-1-3:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Buat agar menyenangkan</h1>
                </div>
                <input type="checkbox" id="1-2-3" class="peer/1-2-3 hidden single-checkbox1 check3" />
                <label for="1-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/1-2-3:bg-green-500 peer-checked/1-2-3:border-transparent"></label>
            </li>
            <li class="flex h-auto mb-12">
                <input type="checkbox" id="1-1-4" class="peer/1-1-4 hidden single-checkbox check4" />
                <label for="1-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/1-1-4:bg-green-500 peer-checked/1-1-4:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Kerjakan bersama-sama</h1>
                </div>
                <input type="checkbox" id="1-2-4" class="peer/1-2-4 hidden single-checkbox1 check4" />
                <label for="1-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/1-2-4:bg-green-500 peer-checked/1-2-4:border-transparent"></label>
            </li>
        </ul>
    </div>
    <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
        <div class="flex">
            <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
            <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                10
            </div>
            <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
        </div>
        <ul>
            <li class="flex h-auto">
                <input type="checkbox" id="2-1-1" class="peer/2-1-1 hidden no2 single-checkbox2 check21" />
                <label for="2-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/2-1-1:bg-green-500 peer-checked/2-1-1:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Menjadi frustasi</h1>
                </div>
                <input type="checkbox" id="2-2-1" class="peer/2-2-1 hidden no2 single-checkbox21 check21" />
                <label for="2-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/2-2-1:bg-green-500 peer-checked/2-2-1:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="2-1-2" class="peer/2-1-2 hidden no2 single-checkbox2 check22" />
                <label for="2-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/2-1-2:bg-green-500 peer-checked/2-1-2:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Memendam perasaan dalam hati</h1>
                </div>
                <input type="checkbox" id="2-2-2" class="peer/2-2-2 hidden no2 single-checkbox21 check22" />
                <label for="2-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/2-2-2:bg-green-500 peer-checked/2-2-2:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="2-1-3" class="peer/2-1-3 hidden no2 single-checkbox2 check23" />
                <label for="2-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/2-1-3:bg-green-500 peer-checked/2-1-3:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Menyampaikan sudut pandang pribadi</h1>
                </div>
                <input type="checkbox" id="2-2-3" class="peer/2-2-3 hidden no2 single-checkbox21 check23" />
                <label for="2-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/2-2-3:bg-green-500 peer-checked/2-2-3:border-transparent"></label>
            </li>
            <li class="flex h-auto mb-12">
                <input type="checkbox" id="2-1-4" class="peer/2-1-4 hidden no2 single-checkbox2 check24" />
                <label for="2-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/2-1-4:bg-green-500 peer-checked/2-1-4:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Berani menghadapi oposisi</h1>
                </div>
                <input type="checkbox" id="2-2-4" class="peer/2-2-4 hidden no2 single-checkbox21 check24" />
                <label for="2-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/1-2-4:bg-green-500 peer-checked/1-2-4:border-transparent"></label>
            </li>
        </ul>
    </div>
    <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
        <div class="flex">
            <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
            <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                11
            </div>
            <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
        </div>
        <ul>
            <li class="flex h-auto">
                <input type="checkbox" id="3-1-1" class="peer/3-1-1 hidden single-checkbox3 check31" />
                <label for="3-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/3-1-1:bg-green-500 peer-checked/3-1-1:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Bersahabat dan mudah bergaul</h1>
                </div>
                <input type="checkbox" id="3-2-1" class="peer/3-2-1 hidden single-checkbox31 check31" />
                <label for="3-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/3-2-1:bg-green-500 peer-checked/3-2-1:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="3-1-2" class="peer/3-1-2 hidden single-checkbox3 check32" />
                <label for="3-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/3-1-2:bg-green-500 peer-checked/3-1-2:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Unit, bosan pada rutinitas</h1>
                </div>
                <input type="checkbox" id="3-2-2" class="peer/3-2-2 hidden single-checkbox31 check32" />
                <label for="3-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/3-2-2:bg-green-500 peer-checked/3-2-2:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="3-1-3" class="peer/3-1-3 hidden single-checkbox3 check33" />
                <label for="3-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/3-1-3:bg-green-500 peer-checked/3-1-3:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Aktif melakukan perubahan</h1>
                </div>
                <input type="checkbox" id="3-2-3" class="peer/3-2-3 hidden single-checkbox31 check33" />
                <label for="3-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/3-2-3:bg-green-500 peer-checked/3-2-3:border-transparent"></label>
            </li>
            <li class="flex h-auto mb-12">
                <input type="checkbox" id="3-1-4" class="peer/3-1-4 hidden single-checkbox3 check34" />
                <label for="3-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/3-1-4:bg-green-500 peer-checked/3-1-4:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Ingin segala akurat dan pasti</h1>
                </div>
                <input type="checkbox" id="3-2-4" class="peer/3-2-4 hidden single-checkbox31 check34" />
                <label for="3-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/3-2-4:bg-green-500 peer-checked/3-2-4:border-transparent"></label>
            </li>
        </ul>
    </div>
    <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
        <div class="flex">
            <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
            <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                12
            </div>
            <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
        </div>
        <ul>
            <li class="flex h-auto">
                <input type="checkbox" id="4-1-1" class="peer/4-1-1 hidden single-checkbox4 check41" />
                <label for="4-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/4-1-1:bg-green-500 peer-checked/4-1-1:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Mengalah tidak suka pertentangan</h1>
                </div>
                <input type="checkbox" id="4-2-1" class="peer/4-2-1 hidden single-checkbox41 check41" />
                <label for="4-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/4-2-1:bg-green-500 peer-checked/4-2-1:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="4-1-2" class="peer/4-1-2 hidden single-checkbox4 check42" />
                <label for="4-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/4-1-2:bg-green-500 peer-checked/4-1-2:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Penuh dengan hal-hal kecil/detail</h1>
                </div>
                <input type="checkbox" id="4-2-2" class="peer/4-2-2 hidden single-checkbox41 check42" />
                <label for="4-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/4-2-2:bg-green-500 peer-checked/4-2-2:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="4-1-3" class="peer/4-1-3 hidden single-checkbox4 check43" />
                <label for="4-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/4-1-3:bg-green-500 peer-checked/4-1-3:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Berubah pada menit-menit terakhir</h1>
                </div>
                <input type="checkbox" id="4-2-3" class="peer/4-2-3 hidden single-checkbox41 check43" />
                <label for="4-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/4-2-3:bg-green-500 peer-checked/4-2-3:border-transparent"></label>
            </li>
            <li class="flex h-auto mb-12">
                <input type="checkbox" id="4-1-4" class="peer/4-1-4 hidden single-checkbox4 check44" />
                <label for="4-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/4-1-4:bg-green-500 peer-checked/4-1-4:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Mendesak, memaksa, agak kasar</h1>
                </div>
                <input type="checkbox" id="4-2-4" class="peer/4-2-4 hidden single-checkbox41 check44" />
                <label for="4-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/4-2-4:bg-green-500 peer-checked/4-2-4:border-transparent"></label>
            </li>
        </ul>
    </div>
    <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
        <div class="flex">
            <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
            <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                13
            </div>
            <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
        </div>
        <ul>
            <li class="flex h-auto">
                <input type="checkbox" id="5-1-1" class="peer/5-1-1 hidden single-checkbox5 check51" />
                <label for="5-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/5-1-1:bg-green-500 peer-checked/5-1-1:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Ingin kemajuan/peningkatan</h1>
                </div>
                <input type="checkbox" id="5-2-1" class="peer/5-2-1 hidden single-checkbox51 check51" />
                <label for="5-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/5-2-1:bg-green-500 peer-checked/5-2-1:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="5-1-2" class="peer/5-1-2 hidden single-checkbox5 check52" />
                <label for="5-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/5-1-2:bg-green-500 peer-checked/5-1-2:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Puas dengan keadaan tenang/mudah puas</h1>
                </div>
                <input type="checkbox" id="5-2-2" class="peer/5-2-2 hidden single-checkbox51 check52" />
                <label for="5-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/5-2-2:bg-green-500 peer-checked/5-2-2:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="5-1-3" class="peer/5-1-3 hidden single-checkbox5 check53" />
                <label for="5-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/5-1-3:bg-green-500 peer-checked/5-1-3:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Menunjukan perasaan dengan terbuka</h1>
                </div>
                <input type="checkbox" id="5-2-3" class="peer/5-2-3 hidden single-checkbox51 check53" />
                <label for="5-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/5-2-3:bg-green-500 peer-checked/5-2-3:border-transparent"></label>
            </li>
            <li class="flex h-auto mb-12">
                <input type="checkbox" id="5-1-4" class="peer/5-1-4 hidden single-checkbox5 check54" />
                <label for="5-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/5-1-4:bg-green-500 peer-checked/5-1-4:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Rendah hati/sederhana</h1>
                </div>
                <input type="checkbox" id="5-2-4" class="peer/5-2-4 hidden single-checkbox51 check54" />
                <label for="5-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/5-2-4:bg-green-500 peer-checked/5-2-4:border-transparent"></label>
            </li>
        </ul>
    </div>

    <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
        <div class="flex">
            <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
            <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                14
            </div>
            <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
        </div>
        <ul>
            <li class="flex h-auto">
                <input type="checkbox" id="6-1-1" class="peer/6-1-1 hidden single-checkbox6 check61" />
                <label for="6-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/6-1-1:bg-green-500 peer-checked/6-1-1:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Tenang, pendiam, tertup</h1>
                </div>
                <input type="checkbox" id="6-2-1" class="peer/6-2-1 hidden single-checkbox61 check61" />
                <label for="6-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/6-2-1:bg-green-500 peer-checked/6-2-1:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="6-1-2" class="peer/6-1-2 hidden single-checkbox6 check62" />
                <label for="6-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/6-1-2:bg-green-500 peer-checked/6-1-2:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Gembira, bebas, riang</h1>
                </div>
                <input type="checkbox" id="6-2-2" class="peer/6-2-2 hidden single-checkbox61 check62" />
                <label for="6-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/6-2-2:bg-green-500 peer-checked/6-2-2:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="6-1-3" class="peer/6-1-3 hidden single-checkbox6 check63" />
                <label for="6-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/6-1-3:bg-green-500 peer-checked/6-1-3:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Menyenangkan, baik hati</h1>
                </div>
                <input type="checkbox" id="6-2-3" class="peer/6-2-3 hidden single-checkbox61 check63" />
                <label for="6-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/6-2-3:bg-green-500 peer-checked/6-2-3:border-transparent"></label>
            </li>
            <li class="flex h-auto mb-12">
                <input type="checkbox" id="6-1-4" class="peer/6-1-4 hidden single-checkbox6 check64" />
                <label for="6-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/6-1-4:bg-green-500 peer-checked/6-1-4:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Menyolok, berani</h1>
                </div>
                <input type="checkbox" id="6-2-4" class="peer/6-2-4 hidden single-checkbox61 check64" />
                <label for="6-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/6-2-4:bg-green-500 peer-checked/6-2-4:border-transparent"></label>
            </li>
        </ul>
    </div>
    <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
        <div class="flex">
            <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
            <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                15
            </div>
            <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
        </div>
        <ul>
            <li class="flex h-auto">
                <input type="checkbox" id="7-1-1" class="peer/7-1-1 hidden single-checkbox7 check71" />
                <label for="7-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/7-1-1:bg-green-500 peer-checked/7-1-1:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Menyediakan waktu untuk orang lain</h1>
                </div>
                <input type="checkbox" id="7-2-1" class="peer/7-2-1 hidden single-checkbox71 check71" />
                <label for="7-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/7-2-1:bg-green-500 peer-checked/7-2-1:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="7-1-2" class="peer/7-1-2 hidden single-checkbox7 check72" />
                <label for="7-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/7-1-2:bg-green-500 peer-checked/7-1-2:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Merencanakan masa depan, bersiap-siap</h1>
                </div>
                <input type="checkbox" id="7-2-2" class="peer/7-2-2 hidden single-checkbox71 check72" />
                <label for="7-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/7-2-2:bg-green-500 peer-checked/7-2-2:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="7-1-3" class="peer/7-1-3 hidden single-checkbox7 check73" />
                <label for="7-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/7-1-3:bg-green-500 peer-checked/7-1-3:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Menuju petualangan baru</h1>
                </div>
                <input type="checkbox" id="7-2-3" class="peer/7-2-3 hidden single-checkbox71 check73" />
                <label for="7-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/7-2-3:bg-green-500 peer-checked/7-2-3:border-transparent"></label>
            </li>
            <li class="flex h-auto mb-12">
                <input type="checkbox" id="7-1-4" class="peer/7-1-4 hidden single-checkbox7 check74" />
                <label for="7-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/7-1-4:bg-green-500 peer-checked/7-1-4:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Menerima penghargaan atas pencapaian target</h1>
                </div>
                <input type="checkbox" id="7-2-4" class="peer/7-2-4 hidden single-checkbox71 check74" />
                <label for="7-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/7-2-4:bg-green-500 peer-checked/7-2-4:border-transparent"></label>
            </li>
        </ul>
    </div>
    <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF]">
        <div class="flex">
            <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
            <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 py-3 px-5">
                16
            </div>
            <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
        </div>
        <ul>
            <li class="flex h-auto">
                <input type="checkbox" id="8-1-1" class="peer/8-1-1 hidden single-checkbox8 check81" />
                <label for="8-1-1" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/8-1-1:bg-green-500 peer-checked/8-1-1:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Peraturan perlu diuji</h1>
                </div>
                <input type="checkbox" id="8-2-1" class="peer/8-2-1 hidden single-checkbox81 check81" />
                <label for="8-2-1" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/8-2-1:bg-green-500 peer-checked/8-2-1:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="8-1-2" class="peer/8-1-2 hidden single-checkbox8 check82" />
                <label for="8-1-2" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/8-1-2:bg-green-500 peer-checked/8-1-2:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Peraturan membuat menjadi adil</h1>
                </div>
                <input type="checkbox" id="8-2-2" class="peer/8-2-2 hidden single-checkbox81 check82" />
                <label for="8-2-2" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/8-2-2:bg-green-500 peer-checked/8-2-2:border-transparent"></label>
            </li>
            <li class="flex h-auto">
                <input type="checkbox" id="8-1-3" class="peer/8-1-3 hidden single-checkbox8 check83" />
                <label for="8-1-3" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/8-1-3:bg-green-500 peer-checked/8-1-3:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Peraturan membuat menjadi membosankan</h1>
                </div>
                <input type="checkbox" id="8-2-3" class="peer/8-2-3 hidden single-checkbox81 check83" />
                <label for="8-2-3" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/8-2-3:bg-green-500 peer-checked/8-2-3:border-transparent"></label>
            </li>
            <li class="flex h-auto mb-12">
                <input type="checkbox" id="8-1-4" class="peer/8-1-4 hidden single-checkbox8 check84" />
                <label for="8-1-4" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/8-1-4:bg-green-500 peer-checked/8-1-4:border-transparent mr-1"></label>
                <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-400 rounded-full">
                    <h1 class="mt-[6px]">Peraturan membuat menjadi aman</h1>
                </div>
                <input type="checkbox" id="8-2-4" class="peer/8-2-4 hidden single-checkbox81 check84" />
                <label for="8-2-4" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-400 h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/8-2-4:bg-green-500 peer-checked/8-2-4:border-transparent"></label>
            </li>
        </ul>
    </div> 
</form>
<div class="mx-auto w-fit space-x-8 md:space-x-16">
    <button class="mt-8 text-lg md:text-xl py-2 w-[150px] md:w-[200px] h-93 border-2 rounded-full bg-[#ffffff] text-center">
        Kembali
    </button>
    <button class="mt-8 text-lg md:text-xl py-2 w-[150px] md:w-[200px] h-93 border-2 rounded-full bg-[#ffffff] text-center">
        Selanjutnya
    </button>
</div>

<!-- <label for="domisili">Pilih Domisili:</label>
<input type="text" id="domisiliInput" list="domisiliList" name="domisili">
<datalist id="domisiliList">
    <option value="Jakarta">
    <option value="Bandung">
    <option value="Surabaya">
    <option value="Yogyakarta">
    <option value="Medan">
        Tambahkan lebih banyak pilihan domisili di sini 
</datalist> -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection