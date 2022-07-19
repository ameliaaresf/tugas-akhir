@extends('admin.app')
@section('title', 'Data Perpindahan')
@section('content')

<div class = "bg-gray-100 w-full mx-4 rounded-lg">
    <div class = "mx-4 my-4 text-center font-bold text-lg">
        <p>Form Data Perpindahan</p>
    </div>

    <form class="w-full mt-10 px-4 rounded-lg" action="{{route('admin.data-perpindahan.store')}}" method = "post">
      @csrf
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            NIK
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('nik') ? 'is-invalid' : ''}}" id="nik" name = "nik" type="text" placeholder="Masukkan NIK">
          @if($errors->has('nik'))
          <div class="text-red-600 italic "> 
          {{$errors->first('nik')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Nama Lengkap
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500
          {{ $errors ->has('nama') ? 'is-invalid' : ''}}" id="nama" name = "nama" type="text" placeholder="Masukkan Nama">
          @if($errors->has('nama'))
          <div class="text-red-600 italic "> 
          {{$errors->first('nama')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cus_name">Tanggal Pindah</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input datepicker name="tgl_pindah" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors ->has('tgl_pindah') ? 'is-invalid' : ''}} " placeholder="Pilih Tanggal">
                @if($errors->has('tgl_pindah'))
          <div class="text-red-600 italic "> 
          {{$errors->first('tgl_pindah')}}
          </div>
          @endif
              </div>
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Jenis Kelamin
          </label>
  <div class="flex items-center mr-4 mb-4">
    <input id="laki-laki" type="radio" name="jk" class="hidden {{ $errors ->has('jk') ? 'is-invalid' : ''}}" value = "Laki-laki" checked />
    <label for="laki-laki" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     Laki-laki</label>
   </div>

   <div class="flex items-center mr-4 mb-4">
    <input id="perempuan" type="radio" name="jk" class="hidden {{ $errors ->has('jk') ? 'is-invalid' : ''}}" value = "Perempuan" />
    <label for="perempuan" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     Perempuan</label>
     @if($errors->has('jk'))
          <div class="text-red-600 italic "> 
          {{$errors->first('jk')}}
          </div>
          @endif
   </div>
</div>

        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Alamat Asal
          </label>
          <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('alamat_asal') ? 'is-invalid' : ''}}" id="alamat_asal" name = "alamat_asal" type="text" placeholder="Masukkan Alamat Asal"></textarea>
          @if($errors->has('alamat_asal'))
          <div class="text-red-600 italic "> 
          {{$errors->first('alamat_asal')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Alamat Pindah
          </label>
          <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500
          {{ $errors ->has('alamat_pindah') ? 'is-invalid' : ''}}" id="alamat_pindah" name = "alamat_pindah" type="text" placeholder="Masukkan Alamat Saat Ini"></textarea>
          @if($errors->has('alamat_pindah'))
          <div class="text-red-600 italic "> 
          {{$errors->first('alamat_pindah')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Status Perkawinan
          </label>
          <div class="flex items-center mr-4 mb-4">
    <input id="kawin" type="radio" name="status" class="hidden {{ $errors ->has('status') ? 'is-invalid' : ''}}" value = "Kawin" checked />
    <label for="kawin" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     Kawin</label>
   </div>

   <div class="flex items-center mr-4 mb-4">
    <input id="belumkawin" type="radio" name="status" class="hidden {{ $errors ->has('status') ? 'is-invalid' : ''}}" value = "Belum Kawin" checked/>
    <label for="belumkawin" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     Belum Kawin</label>
     @if($errors->has('status'))
          <div class="text-red-600 italic ">
          {{$errors->first('status')}}
          </div>
          @endif
   </div>
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Pekerjaan
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('pekerjaan') ? 'is-invalid' : ''}}" id="pekerjaan" name = "pekerjaan" type="text" placeholder="Masukkan Pekerjaan">
          @if($errors->has('pekerjaan'))
          <div class="text-red-600 italic "> 
          {{$errors->first('pekerjaan')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Kewarganegaraan
          </label>
          <div class="flex items-center mr-4 mb-4">
    <input id="wni" type="radio" name="kw" class="hidden {{ $errors ->has('kw') ? 'is-invalid' : ''}}" value = "WNI" checked />
    <label for="wni" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     WNI</label>
   </div>

   <div class="flex items-center mr-4 mb-4">
    <input id="wna" type="radio" name="kw" class="hidden {{ $errors ->has('kw') ? 'is-invalid' : ''}}" value = "WNA" checked />
    <label for="wna" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     WNA</label>
     @if($errors->has('kw'))
          <div class="text-red-600 italic "> 
          {{$errors->first('kw')}}
          </div>
          @endif
   </div>
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
</div>
      <div class="flex w-full h-full justify-center content-center items-center">
        <button class="rounded bg-blue-500 hover:bg-blue-700 py-2 px-4 text-white" type="submit"> SIMPAN</button>
        </div>
    </form>
<div>


</div>


<script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>
@endsection