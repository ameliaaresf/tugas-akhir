@extends('admin.app')
@section('title', 'Surat Keterangan Tanah')
@section('content')

<div class = "bg-gray-100 w-full mx-4 rounded-lg">
    <div class = "mx-4 my-4 text-center font-bold text-lg">
        <p>Form Surat Keterangan Tanah</p>
    </div>

    <form class="w-full mt-10 px-4 rounded-lg" action="{{route('admin.skt.update', $skt->id)}}" method = "post">
    @method('PUT')    
    @csrf
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            No Registrasi
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('no_regis') ? 'is-invalid' : ''}}" id="no_regis" name = "no_regis" type="text" placeholder="Masukkan Nomor Registrasi" value="{{old('no_regis' , $skt->no_regis)}}">
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
          {{ $errors ->has('nama_lembaga') ? 'is-invalid' : ''}}" id="nama_lembaga" name = "nama_lembaga" type="text" placeholder="Masukkan nama_lembaga" value="{{old('nama_lembaga' , $skt->nama_lembaga)}}">
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
          {{ $errors ->has('alamat') ? 'is-invalid' : ''}}" id="alamat" name = "alamat" type="text" placeholder="Masukkan Alamat">{{old('alamat' , $skt->alamat)}}</textarea>
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
          @if($errors->has('alamat'))
          <div class="text-red-600 italic "> 
          {{$errors->first('alamat')}}
          </div>
          @endif
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Desa
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('desa') ? 'is-invalid' : ''}}" id="desa" name = "desa" type="text" placeholder="Masukkan desa" value="{{old('desa' , $skt->desa)}}">
          @if($errors->has('desa'))
          <div class="text-red-600 italic "> 
          {{$errors->first('desa')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Kecamatan
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('kec') ? 'is-invalid' : ''}}" id="kec" name = "kec" type="text" placeholder="Masukkan kec" value="{{old('kec' , $skt->kec)}}">
          @if($errors->has('kec'))
          <div class="text-red-600 italic "> 
          {{$errors->first('kec')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Kabupaten
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('kab') ? 'is-invalid' : ''}}" id="kab" name = "kab" type="text" placeholder="Masukkan kab" value="{{old('kab' , $skt->kab)}}">
          @if($errors->has('kab'))
          <div class="text-red-600 italic "> 
          {{$errors->first('kab')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Utara
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('utara') ? 'is-invalid' : ''}}" id="utara" name = "utara" type="text" placeholder="Masukkan utara" value="{{old('utara' , $skt->utara)}}">
          @if($errors->has('utara'))
          <div class="text-red-600 italic "> 
          {{$errors->first('utara')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Timur
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('timur') ? 'is-invalid' : ''}}" id="timur" name = "timur" type="text" placeholder="Masukkan timur" value="{{old('timur' , $skt->timur)}}">
          @if($errors->has('timur'))
          <div class="text-red-600 italic "> 
          {{$errors->first('timur')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Selatan
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('selatan') ? 'is-invalid' : ''}}" id="selatan" name = "selatan" type="text" placeholder="Masukkan selatan" value="{{old('selatan' , $skt->selatan)}}">
          @if($errors->has('selatan'))
          <div class="text-red-600 italic "> 
          {{$errors->first('selatan')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Barat
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('barat') ? 'is-invalid' : ''}}" id="barat" name = "barat" type="text" placeholder="Masukkan barat" value="{{old('barat' , $skt->barat)}}">
          @if($errors->has('barat'))
          <div class="text-red-600 italic "> 
          {{$errors->first('barat')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cus_name">Tanggal Pembuatan</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input id="tgl_buat" datepicker="" value="{{old('tgl_buat' , $skt->tgl_buat)}}" datepicker-format="dd/mm/yyyy" type="text" name="tgl_buat"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors ->has('tgl_buat') ? 'is-invalid' : ''}} " placeholder="Pilih Tanggal">
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
        <option value="Kuwu Tugu" {{ $skt->ttd == 'Kuwu Tugu' ? 'selected' :'' }}>Kuwu Tugu</option>
        <option value="Sekretaris Desa" {{ $skt->ttd == 'Sekretaris Desa' ? 'selected' :'' }}>Sekretaris Desa</option>
        <option value="Lainnya" {{ $skt->ttd == 'Lainnya' ? 'selected' :'' }}>Lainnya</option>
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
    <input id="sudah-ditandatangani" type="radio" name="keterangan" class="hidden {{ $errors ->has('keterangan') ? 'is-invalid' : ''}}" value = "Sudah Ditandatangani" {{ ($skt->keterangan=="Sudah Ditandatangani")? "checked" : "" }} />
    <label for="sudah-ditandatangani" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     Sudah Ditandatangani</label>
   </div>

   <div class="flex items-center mr-4 mb-4">
    <input id="belum-ditandatangani" type="radio" name="keterangan" class="hidden {{ $errors ->has('keterangan') ? 'is-invalid' : ''}}" value = "Sudah Ditandatangani" {{ ($skt->keterangan=="Belum Ditandatangani")? "checked" : "" }} />
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