@extends('templates.default')

@section('content')

<div class="mt-20"></div>

<!-- topSection -->

<img src="/dist/profileimg.png" alt="profile picture" class="w-fit mx-auto mb-2">
<h1 class="font-black text-5xl text-center text-black">{{Auth::user()->name}}</h1>
<h1 class="text-center text-black mb-5">{{Auth::user()->email}}</h1>

<!-- End topSection -->

<!-- labelEdit -->

<h1 class="text-xl text-center text-black">Edit Profil</h1>
<h1 class="text-center text-black">Profil hanya dapat diubah 48 jam sekali </h1>
<h1 class="text-center text-black italic text-xs mb-8">*Beberapa informasi tidak dapat Anda ubah, silahkan hubungi admin untuk informasi lebih lanjut</h1>

<!-- End labelEdit -->

<!-- editProfile -->

<form method="POST" action="{{ route('profile.update') }}" class="max-w-sm mx-auto">
    @method('PATCH')
    @csrf
    <h1 class="ml-1 mb-1">Isi Data Dirimu</h1>
    <label for="name" id="">
        <input type="text" name="name" id="name" placeholder="Nama Lengkap" value="{{Auth::user()->name}}" class="text-black mb-2 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
    </label>
    <label for="tanggallahir" id="">
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{Auth::user()->tanggal_lahir}}" onfocus="this.showPicker()" class="text-black mb-2 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent cursor-pointer"/>
    </label>
    <label for="jeniskelamin" id="" class="flex mb-3">
        <input type="text" disabled name="jenis_kelamin" id="jenis_kelamin" value="{{Auth::user()->jenis_kelamin}}" class="text-slate-600 bg-slate-300 border-slate-600 mx-auto px-3 py-2 rounded-md w-full text-sm">
    </label>
    <label for="email" id="">
        <input type="email" disabled name="email" id="email" placeholder="Alamat Email" value="{{Auth::user()->email}}" class="mb-3 rounded-md border-slate-600 mx-auto px-3 py-2 border shadow w-full block text-sm bg-slate-300 text-slate-600"/>
    </label>
    <label for="telepon" id="">
        <input type="text" disabled name="notelp" id="notelp" placeholder="Nomor Telepon" value="{{Auth::user()->notelp}}" class="mb-3 rounded-md border-slate-600 mx-auto px-3 py-2 border shadow w-full block text-sm bg-slate-300 text-slate-600"/>
    </label>
    <label for="pendidikanterkahir" id="">
        <input type="text" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir (SMA/D3/S1/S2/dsb)" value="{{Auth::user()->pendidikan_terakhir}}" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm text-black placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
    </label>
    <div class="m-0 p-0 @if(Auth::user()->status == '1') block @else hidden @endif">
        <label for="Jurusan" id="">
            <input type="text" name="jurusan" id="Jurusan" placeholder="Jurusan" value="{{Auth::user()->jurusan}}" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm text-black placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <label for="institusi" id="">
            <input type="text" name="institusi" id="institusi" placeholder="Institusi" value="{{Auth::user()->institusi}}" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm text-black placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
    </div>
    <div class="m-0 p-0 @if(Auth::user()->status == '2') block @else hidden @endif">
        <label for="Perusahaan" id="">
            <input type="text" name="perusahaan" id="Perusahaan" placeholder="Perusahaan" value="{{Auth::user()->perusahaan}}" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm text-black placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <label for="jabatan" id="">
            <input type="text" name="jabatan" id="jabatan" placeholder="Jabatan dalam perusahaan" value="{{Auth::user()->jabatan}}" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm text-black placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
        <label for="masa_kerja" id="">
            <input type="text" name="masa_kerja" id="masa_kerja" placeholder="Masa Kerja" value="{{Auth::user()->masa_kerja}}" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm text-black placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 focus:placeholder:text-transparent"/>
        </label>
    </div>
    <label for="password" id="">
        <input type="text" name="password" placeholder="Password tidak dapat dirubah" value="" class="mb-3 rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full block text-sm bg-slate-300" disabled/>
    </label>
    <div class="flex mt-12 mb-36 w-full">
        <button type="submit" class="w-fit border-solid rounded-lg bg-[#8404F4] hover:ring-indigo-800 hover:ring-2 transition-colors duration-200 ease-in-out px-3 py-1 mx-auto">
            <h1 class="text-[#F7F1F1] text-center font-semibold italic m-1">Ubah Profile</h1>
        </button>
    </div>

</form>

<!-- End editProfile -->
@endsection