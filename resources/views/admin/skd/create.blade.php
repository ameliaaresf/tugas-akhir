@extends('admin.app')
@section('title', 'Surat Keterangan Domisili')
@section('content')

<div class = "bg-gray-100 w-full mx-4 rounded-lg">
    <div class = "mx-4 my-4 text-center font-bold text-lg">
        <p>Form Surat Keterangan Domisili</p>
    </div>

    <form class="w-full mt-10 px-4 rounded-lg" action="{{route('admin.skd.store')}}" method = "post">
        @csrf
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            No Registrasi
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('no_regis') ? 'is-invalid' : ''}}" id="no_regis" name = "no_regis" type="text" placeholder="Masukkan Nomor Registrasi">
          @if($errors->has('no_regis'))
          <div class="text-red-600 italic "> 
          {{$errors->first('no_regis')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Nama
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
            Tempat Lahir
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('tempat_lahir') ? 'is-invalid' : ''}}" id="tempat_lahir" name = "tempat_lahir" type="text" placeholder="Masukkan Tempat Lahir">
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
          @if($errors->has('tempat_lahir'))
          <div class="text-red-600 italic "> 
          {{$errors->first('tempat_lahir')}}
          </div>
          @endif
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cus_name">Tanggal Lahir</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input id="tgl_lahir" datepicker="" datepicker-format="yyyy/mm/dd" type="text" name="tgl_lahir"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors ->has('tgl_lahir') ? 'is-invalid' : ''}} " placeholder="Pilih Tanggal">
                @if($errors->has('tgl_lahir'))
          <div class="text-red-600 italic "> 
          {{$errors->first('tgl_lahir')}}
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
            Alamat
          </label>
          <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('alamat') ? 'is-invalid' : ''}}" id="alamat" name = "alamat" type="text" placeholder="Masukkan Alamat"></textarea>
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
          @if($errors->has('alamat'))
          <div class="text-red-600 italic "> 
          {{$errors->first('alamat')}}
          </div>
          @endif
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
            Agama
          </label>
          <div class="flex ">
  <div class="mb-3 xl:w-96 relative">
    <select class="form-select appearance-none
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none {{ $errors ->has('agama') ? 'is-invalid' : ''}}" id = "agama" name = "agama" aria-label="Default select example">
        <option selected>Pilih Agama</option>
        <option value="Islam">Islam</option>
        <option value="Katolik">Katolik</option>
        <option value="Protestan">Protestan</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        <option value="Konghuchu">Konghuchu</option>
    </select>
    @if($errors->has('agama'))
          <div class="text-red-600 italic "> 
          {{$errors->first('agama')}}
          </div>
          @endif
  </div>
</div>
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cus_name">Tanggal Pembuatan</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input id="tgl_buat" datepicker="" datepicker-format="dd/mm/yyyy" type="text" name="tgl_buat"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors ->has('tgl_buat') ? 'is-invalid' : ''}} " placeholder="Pilih Tanggal">
                @if($errors->has('tgl_buat'))
          <div class="text-red-600 italic "> 
          {{$errors->first('tgl_buat')}}
          </div>
          @endif
            </div>
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Yang Bertandatangan
          </label>
          <div class="flex ">
  <div class="mb-3 xl:w-96 relative">
    <select class="form-select appearance-none
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none {{ $errors ->has('ttd') ? 'is-invalid' : ''}}" id = "ttd" name = "ttd" aria-label="Default select example">
        <option selected>Masukkan Nama</option>
        <option value="Kuwu Tugu">Kuwu Tugu</option>
        <option value="Sekretaris Desa">Sekretaris Desa</option>
        <option value="Lainnya">Lainnya</option>
    </select>
    @if($errors->has('ttd'))
          <div class="text-red-600 italic "> 
          {{$errors->first('ttd')}}
          </div>
          @endif
  </div>
</div>
<div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Keterangan
          </label>
  <div class="flex items-center mr-4 mb-4">
    <input id="sudah-ditandatangani" type="radio" name="keterangan" class="hidden {{ $errors ->has('keterangan') ? 'is-invalid' : ''}}" value = "sudah-ditandatangani" checked />
    <label for="sudah-ditandatangani" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     Sudah Ditandatangani</label>
   </div>

   <div class="flex items-center mr-4 mb-4">
    <input id="belum-ditandatangani" type="radio" name="keterangan" class="hidden {{ $errors ->has('keterangan') ? 'is-invalid' : ''}}" value = "belum-ditandatangani" />
    <label for="belum-ditandatangani" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     Belum Ditandatangani</label>
     @if($errors->has('keterangan'))
          <div class="text-red-600 italic "> 
          {{$errors->first('keterangan')}}
          </div>
          @endif
   </div>
</div>
        
        
        <div class="flex w-full h-full justify-center content-center items-center">
        <button class="rounded bg-blue-500 hover:bg-blue-700 py-2 px-4 text-white" type="submit"> SIMPAN</button>
        </div>
        </div>
        
      </div>
      </div>
      
    </form>
    
<div>


</div>


<script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>
@endsection