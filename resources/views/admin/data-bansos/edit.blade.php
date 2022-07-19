@extends('admin.app')
@section('title', 'Data Bansos')
@section('content')

<div class = "bg-gray-100 w-full mx-4 rounded-lg">
    <div class = "mx-4 my-4 text-center font-bold text-lg">
        <p>Form Data Bansos</p>
    </div>

    <form class="w-full mt-10 px-4 rounded-lg" action="{{route('admin.data-bansos.update', $databansos->id)}}" method = "post">
    @method('PUT')    
    @csrf
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            NIK
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('nik') ? 'is-invalid' : ''}}" id="nik" name = "nik" type="text" placeholder="Masukkan NIK" value="{{old('nik' , $databansos->nik)}}">
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
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('nama') ? 'is-invalid' : ''}}" id="nama" name = "nama" type="text" placeholder="Masukkan Nama" value="{{old('nama' , $databansos->nama)}}">
          @if($errors->has('nama'))
          <div class="text-red-600 italic "> 
          {{$errors->first('nama')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Alamat
          </label>
          <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('alamat') ? 'is-invalid' : ''}}" id="alamat" name = "alamat" type="text" placeholder="Masukkan Alamat">{{old('alamat' , $databansos->alamat)}}</textarea>
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
          @if($errors->has('alamat'))
          <div class="text-red-600 italic "> 
          {{$errors->first('alamat')}}
          </div>
          @endif
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Jenis Bansos
          </label>
          <div class="flex items-center mr-4 mb-4">
    <input id="blt" type="radio" name="jenis_bansos" class="hidden {{ $errors ->has('jenis_bansos') ? 'is-invalid' : ''}}" value = "BLT" {{ ($databansos->jenis_bansos=="BLT")? "checked" : "" }} />
    <label for="blt" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     BLT</label>
   </div>

   <div class="flex items-center mr-4 mb-4">
    <input id="bnpt" type="radio" name="jenis_bansos" class="hidden {{ $errors ->has('jenis_bansos') ? 'is-invalid' : ''}}" value = "BNPT" {{ ($databansos->jenis_bansos=="BNPT")? "checked" : "" }} />
    <label for="bnpt" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     BNPT</label>
     @if($errors->has('jenis_bansos'))
          <div class="text-red-600 italic ">
          {{$errors->first('jenis_bansos')}}
          </div>
          @endif
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