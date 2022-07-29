@extends('admin.app')
@section('title', 'Surat Keterangan Tanah')
@section('content')

<div class = "bg-gray-100 w-full mx-4 rounded-lg">
    <div class = "mx-4 my-4 text-center font-bold text-lg">
        <p>Form Surat Keterangan Tanah</p>
    </div>

    <form class="w-full mt-10 px-4 rounded-lg" action="{{route('admin.skt.store')}}" method = "post">
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
            Nama Lembaga
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('nama_lembaga') ? 'is-invalid' : ''}}" id="nama_lembaga" name = "nama_lembaga" type="text" placeholder="Masukkan Nomor Registrasi">
          @if($errors->has('nama_lembaga'))
          <div class="text-red-600 italic "> 
          {{$errors->first('nama_lembaga')}}
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