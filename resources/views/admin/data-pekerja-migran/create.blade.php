@extends('admin.app')
@section('title', 'Data Pekerja Migran')
@section('content')

<div class = "bg-gray-100 w-full mx-4 rounded-lg">
    <div class = "mx-4 my-4 text-center font-bold text-lg">
        <p>Form Data Pekerja Migran</p>
    </div>

    <form class="w-full mt-10 px-4 rounded-lg" action="{{route('admin.data-pekerja-migran.store')}}" method = "post">
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
            Nama
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
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none{{ $errors ->has('id_penduduk') ? 'is-invalid' : ''}}" id = "id_penduduk" name = "id_penduduk" aria-label="Default select example" require>
        <option hidden>Pilih Nama Penduduk</option>
        @foreach ($datapenduduk as $data)
        <option value="{{$data->id}}" data-tokens="{{$data->nama}}"> {{$data->id}}-{{$data->nama}}</option>
        @endforeach
    </select>
    @if($errors->has('id_penduduk'))
          <div class="text-red-600 italic "> 
          {{$errors->first('id_penduduk')}}
          </div>
          @endif
  </div>
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
            Tempat Bekerja
          </label>
          <div class="flex items-center mr-4 mb-4">
    <input id="dalamnegeri" type="radio" name="tempat_bekerja" class="hidden {{ $errors ->has('tempat_bekerja') ? 'is-invalid' : ''}}" value = "Dalam Negeri" checked />
    <label for="dalamnegeri" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     Dalam Negeri</label>
   </div>

   <div class="flex items-center mr-4 mb-4">
    <input id="luarnegeri" type="radio" name="tempat_bekerja" class="hidden {{ $errors ->has('tempat_bekerja') ? 'is-invalid' : ''}}" value = "Luar Negeri" checked/>
    <label for="luarnegeri" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     Luar Negeri</label>
     @if($errors->has('tempat_bekerja'))
          <div class="text-red-600 italic ">
          {{$errors->first('tempat_bekerja')}}
          </div>
          @endif
   </div>
   <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Tujuan
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('tujuan') ? 'is-invalid' : ''}}" id="tujuan" name = "tujuan" type="text" placeholder="Masukkan tujuan">
          @if($errors->has('tujuan'))
          <div class="text-red-600 italic "> 
          {{$errors->first('tujuan')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
   <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Keterangan
          </label>
          <div class="flex items-center mr-4 mb-4">
    <input id="berangkat" type="radio" name="keterangan" class="hidden {{ $errors ->has('keterangan') ? 'is-invalid' : ''}}" value = "Berangkat" checked />
    <label for="berangkat" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     Berangkat</label>
   </div>

   <div class="flex items-center mr-4 mb-4">
    <input id="pulang" type="radio" name="keterangan" class="hidden {{ $errors ->has('keterangan') ? 'is-invalid' : ''}}" value = "Pulang" checked/>
    <label for="pulang" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     Pulang</label>
     @if($errors->has('keterangan'))
          <div class="text-red-600 italic ">
          {{$errors->first('keterangan')}}
          </div>
          @endif
   </div>
        <div class="flex w-full h-full justify-center content-center items-center">
        <button class="rounded bg-blue-500 hover:bg-blue-700 py-2 px-4 text-white" type="submit"> SIMPAN</button>
        </div>
      </div>
      
    </form>
    
<div>


</div>


<script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>
@endsection