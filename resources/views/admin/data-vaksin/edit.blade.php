@extends('admin.app')
@section('title', 'Data Vaksin')
@section('content')

<div class = "bg-gray-100 w-full mx-4 rounded-lg">
    <div class = "mx-4 my-4 text-center font-bold text-lg">
        <p>Form Data Vaksin</p>
    </div>

    <form class="w-full mt-10 px-4 rounded-lg" action="{{route('admin.data-vaksin.update', $datavaksin->id)}}" method = "post">
    @method('PUT')    
    @csrf
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            NIK
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('nik') ? 'is-invalid' : ''}}" id="nik" name = "nik" type="text" placeholder="Masukkan NIK" value="{{old('nik' , $datavaksin->nik)}}">
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
          <option value="{{$data->id}}" {{$data->id === $datavaksin->id_penduduk ? 'selected' : ''}}> {{$data->id}}-{{$data->nama}}</option>
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
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cus_name">Tanggal Lahir</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input id="tgl_lahir" datepicker="" value="{{old('tgl_lahir' , $datavaksin->tgl_lahir)}}" datepicker-format="yyyy/mm/dd" type="text" name="tgl_lahir"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors ->has('tgl_lahir') ? 'is-invalid' : ''}} " placeholder="Pilih Tanggal">
                @if($errors->has('tgl_lahir'))
          <div class="text-red-600 italic "> 
          {{$errors->first('tgl_lahir')}}
          </div>
          @endif
            </div>
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Alamat
          </label>
          <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('alamat') ? 'is-invalid' : ''}}" id="alamat" name = "alamat" type="text" placeholder="Masukkan Alamat">{{old('alamat' , $datavaksin->alamat)}}</textarea>
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
          @if($errors->has('alamat'))
          <div class="text-red-600 italic "> 
          {{$errors->first('alamat')}}
          </div>
          @endif
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Keterangan
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
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none {{ $errors ->has('keterangan') ? 'is-invalid' : ''}}" id = "keterangan" name = "keterangan" aria-label="Default select example" value="{{old('keterangan' , $datavaksin->keterangan)}}">
        <option selected>Masukkan Keterangan</option>
        <option value="Belum Vaksin" {{ $datavaksin->keterangan == 'Belum Vaksin' ? 'selected' :'' }}>Belum Vaksin</option>
        <option value="Vaksin Dosis Pertama" {{ $datavaksin->keterangan == 'Vaksin Dosis Pertama' ? 'selected' :'' }}>Vaksin Dosis Pertama</option>
        <option value="Vaksin Dosis Kedua" {{ $datavaksin->keterangan == 'Vaksin Dosis Kedua' ? 'selected' :'' }}>Vaksin Dosis Kedua</option>
        <option value="Vaksin Dosis Ketiga" {{ $datavaksin->keterangan == 'Vaksin Dosis Ketiga' ? 'selected' :'' }}>Vaksin Dosis Ketiga</option>
    </select>
    @if($errors->has('keterangan'))
          <div class="text-red-600 italic "> 
          {{$errors->first('keterangan')}}
          </div>
          @endif
  </div>
</div>
        <div class="flex w-full h-full justify-center content-center items-center">
        <button class="rounded bg-blue-500 hover:bg-blue-700 py-2 px-4 text-white" type="submit">UBAH</button>
        </div>
      </div>
      
    </form>
    
<div>


</div>


<script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>
@endsection