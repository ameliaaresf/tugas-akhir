@extends('admin.app')
@section('title', 'Data Kelahiran')
@section('content')

<div class = "bg-gray-100 w-full mx-4 rounded-lg">
    <div class = "mx-4 my-4 text-center font-bold text-lg">
        <p>Form Data Kelahiran</p>
    </div>

    <form class="w-full mt-10 px-4 rounded-lg" action="{{route('admin.data-kelahiran.update', $datakelahiran->id)}}" method = "post">
    @method('PUT')    
    @csrf
      <div class="flex flex-wrap -mx-3 mb-6">
        <!-- <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            NIK
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('nik') ? 'is-invalid' : ''}}" id="nik" name = "nik" type="text" placeholder="Masukkan NIK" value="{{old('nik' , $datakelahiran->nik)}}">
          @if($errors->has('nik'))
          <div class="text-red-600 italic "> 
          {{$errors->first('nik')}}
          </div>
          @endif
          <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        </div> -->
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Nama Bayi
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('nama_bayi') ? 'is-invalid' : ''}}" id="nama_bayi" name = "nama_bayi" type="text" placeholder="Masukkan Nama Bayi" value="{{old('nama_bayi' , $datakelahiran->nama_bayi)}}">
          @if($errors->has('nama_bayi'))
          <div class="text-red-600 italic "> 
          {{$errors->first('nama_bayi')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Nama Ayah
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 {{ $errors ->has('nama_ayah') ? 'is-invalid' : ''}}" id="nama_ayah" name = "nama_ayah" type="text" placeholder="Masukkan Nama Ayah" value="{{old('nama_ayah' , $datakelahiran->nama_ayah)}}">
          @if($errors->has('nama_ayah'))
          <div class="text-red-600 italic "> 
          {{$errors->first('nama_ayah')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Nama Ibu
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 {{ $errors ->has('nama_ibu') ? 'is-invalid' : ''}}" id="nama_ibu" name = "nama_ibu" type="text" placeholder="Masukkan Nama Ibu" value="{{old('nama_ibu' , $datakelahiran->nama_ibu)}}">
          @if($errors->has('nama_ibu'))
          <div class="text-red-600 italic "> 
          {{$errors->first('nama_ibu')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Tempat Lahir
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('tempat_lahir') ? 'is-invalid' : ''}}" id="tempat_lahir" name = "tempat_lahir" type="text" placeholder="Masukkan Tempat Lahir" value="{{old('tempat_lahir' , $datakelahiran->tempat_lahir)}}">
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
                <input datepicker id = "tgl_lahir" name = "tgl_lahir" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 
                {{ $errors ->has('tgl_lahir') ? 'is-invalid' : ''}} " placeholder="Pilih Tanggal" value="{{old('tgl_lahir' , $datakelahiran->tgl_lahir)}}">
          @if($errors->has('tgl_lahir'))
          <div class="text-red-600 italic "> 
          {{$errors->first('tgl_lahir')}}
          </div>
          @endif
            </div>
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Jam Lahir
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 {{ $errors ->has('jam_lahir') ? 'is-invalid' : ''}}" id="jam_lahir" name="jam_lahir" type="time" placeholder="Masukkan Jam Lahir" value="{{old('jam_lahir' , $datakelahiran->jam_lahir)}}">
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
          @if($errors->has('jam_lahir'))
          <div class="text-red-600 italic "> 
          {{$errors->first('jam_lahir')}}
          </div>
          @endif
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Jenis Kelamin
          </label>
  <div class="flex items-center mr-4 mb-4">
    <input id="laki-laki" type="radio" name="jk" class="hidden {{ $errors ->has('jk') ? 'is-invalid' : ''}}" value = "Laki-laki" {{ ($datakelahiran->jk=="Laki-laki")? "checked" : "" }} />
    <label for="laki-laki" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     Laki-laki</label>
   </div>

   <div class="flex items-center mr-4 mb-4">
    <input id="perempuan" type="radio" name="jk"  class="hidden {{ $errors ->has('jk') ? 'is-invalid' : ''}}" value = "Perempuan" {{ ($datakelahiran->jk=="Perempuan")? "checked" : "" }} />
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
            Alamat
          </label>
          <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('alamat') ? 'is-invalid' : ''}}" id="alamat" name = "alamat" type="text" placeholder="Masukkan Alamat" >{{old('alamat' , $datakelahiran->alamat)}}</textarea>
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
          @if($errors->has('alamat'))
          <div class="text-red-600 italic "> 
          {{$errors->first('alamat')}}
          </div>
          @endif
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
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none {{ $errors ->has('agama') ? 'is-invalid' : ''}}" id = "agama" name = "agama" aria-label="Default select example" value="{{old('agama' , $datakelahiran->agama)}}">
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
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Kewarganegaraan
          </label>
          <div class="flex items-center mr-4 mb-4">
    <input id="wni" type="radio" name="kw" value="{{old('kw' , $datakelahiran->kw)}}" class="hidden {{ $errors ->has('kw') ? 'is-invalid' : ''}}" value = "WNI" {{ ($datakelahiran->kw=="WNI")? "checked" : "" }}  />
    <label for="wni" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     WNI</label>
   </div>

   <div class="flex items-center mr-4 mb-4">
    <input id="wna" type="radio" name="kw" value="{{old('kw' , $datakelahiran->kw)}}" class="hidden {{ $errors ->has('kw') ? 'is-invalid' : ''}}" value = "WNA" {{ ($datakelahiran->kw=="WNA")? "checked" : "" }}  />
    <label for="wna" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     WNA</label>
     @if($errors->has('kw'))
          <div class="text-red-600 italic {{$errors->first('kw')}}"> 
          </div>
          @endif
   </div>
        </div>
        <div class="flex w-full h-full justify-center content-center items-center">
        <button class="rounded bg-blue-500 hover:bg-blue-700 py-2 px-4 text-white" type="submit"> UBAH</button>
        </div>
      </div>
      
    </form>
    
<div>


</div>


<script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>
@endsection