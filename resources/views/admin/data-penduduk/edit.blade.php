@extends('admin.app')
@section('title', 'Data Penduduk')
@section('content')

<div class = "bg-gray-100 w-full mx-4 rounded-lg">
    <div class = "mx-4 my-4 text-center font-bold text-lg">
        <p>Form Data Penduduk</p>
    </div>

    <form class="w-full mt-10 px-4 rounded-lg" action="{{route('admin.data-penduduk.update', $datapenduduk->id)}}" method = "post">
    @method('PUT')  
    @csrf
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            No KK
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500
          {{ $errors ->has('no_kk') ? 'is-invalid' : ''}}" id="no_kk" name = "no_kk" type="text" placeholder="Masukkan No KK" require value="{{old('no_kk' , $datapenduduk->no_kk)}}">
          @if($errors->has('no_kk'))
          <div class="text-red-600 italic "> 
          {{$errors->first('no_kk')}}
          </div>
          @endif
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            NIK
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 
          {{ $errors ->has('nik') ? 'is-invalid' : ''}}" id="nik" name = "nik" type="text" placeholder="Masukkan NIK" value="{{old('nik' , $datapenduduk->nik)}}">
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
          {{ $errors ->has('nama') ? 'is-invalid' : ''}}" id="nama" name = "nama" type="text" placeholder="Masukkan Nama" require value="{{old('nama' , $datapenduduk->nama)}}">
          @if($errors->has('nama'))
          <div class="text-red-600 italic "> 
          {{$errors->first('nama')}}
          </div>
          @endif
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="w-full px-3 mb-6 md:mb-0 my-4">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cus_name">Tanggal Lahir</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input id="tgl_lahir" datepicker="" value="{{old('tgl_lahir' , $datapenduduk->tgl_lahir)}}" datepicker-format="yyyy/mm/dd" type="text" name="tgl_lahir"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors ->has('tgl_lahir') ? 'is-invalid' : ''}} " placeholder="Pilih Tanggal">
                @if($errors->has('tgl_lahir'))
          <div class="text-red-600 italic {{$errors->first('tgl_lahir')}}"> 
          </div>
          @endif
            </div>
        <br>
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Blok
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
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none{{ $errors ->has('blok') ? 'is-invalid' : ''}}" id = "blok" name = "blok" aria-label="Default select example" require>
        <option selected>BLOK</option>
        <option value="A" {{ $datapenduduk->blok == 'A' ? 'selected' :'' }}>A</option>
        <option value="B" {{ $datapenduduk->blok == 'B' ? 'selected' :'' }}>B</option>
        <option value="C" {{ $datapenduduk->blok == 'C' ? 'selected' :'' }}>C</option>
        <option value="D" {{ $datapenduduk->blok == 'D' ? 'selected' :'' }}>D</option>
        <option value="E" {{ $datapenduduk->blok == 'E' ? 'selected' :'' }}>E</option>
    </select>
    @if($errors->has('blok'))
          <div class="text-red-600 italic "> 
          {{$errors->first('blok')}}
          </div>
          @endif
  </div>
</div>
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            RW
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
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none{{ $errors ->has('rw') ? 'is-invalid' : ''}}" id = "rw" name = "rw" aria-label="Default select example" require>
        <option selected>RW</option>
        <option value="001" {{ $datapenduduk->rw == '001' ? 'selected' :'' }}>001</option>
        <option value="002" {{ $datapenduduk->rw == '002' ? 'selected' :'' }}>002</option>
        <option value="003" {{ $datapenduduk->rw == '003' ? 'selected' :'' }}>003</option>
        <option value="004" {{ $datapenduduk->rw == '004' ? 'selected' :'' }}>004</option>
        <option value="005" {{ $datapenduduk->rw == '005' ? 'selected' :'' }}>005</option>
        <option value="006" {{ $datapenduduk->rw == '006' ? 'selected' :'' }}>006</option>
        <option value="007" {{ $datapenduduk->rw == '007' ? 'selected' :'' }}>007</option>
        <option value="008" {{ $datapenduduk->rw == '008' ? 'selected' :'' }}>008</option>
    </select>
    @if($errors->has('rw'))
          <div class="text-red-600 italic "> 
          {{$errors->first('rw')}}
          </div>
          @endif
  </div>
</div>
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            RT
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
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none{{ $errors ->has('rt') ? 'is-invalid' : ''}}" id = "rt" name = "rt" aria-label="Default select example" require>
        <option selected>RT</option>
        <option value="001" {{ $datapenduduk->rt == '001' ? 'selected' :'' }}>001</option>
        <option value="002" {{ $datapenduduk->rt == '002' ? 'selected' :'' }}>002</option>
        <option value="003" {{ $datapenduduk->rt == '003' ? 'selected' :'' }}>003</option>
        <option value="004" {{ $datapenduduk->rt == '004' ? 'selected' :'' }}>004</option>
        <option value="005" {{ $datapenduduk->rt == '005' ? 'selected' :'' }}>005</option>
        <option value="006" {{ $datapenduduk->rt == '006' ? 'selected' :'' }}>006</option>
        <option value="007" {{ $datapenduduk->rt == '007' ? 'selected' :'' }}>007</option>
        <option value="008" {{ $datapenduduk->rt == '008' ? 'selected' :'' }}>008</option>
        <option value="009" {{ $datapenduduk->rt == '008' ? 'selected' :'' }}>009</option>
        <option value="010" {{ $datapenduduk->rt == '010' ? 'selected' :'' }}>010</option>
        <option value="011" {{ $datapenduduk->rt == '011' ? 'selected' :'' }}>011</option>
        <option value="012" {{ $datapenduduk->rt == '012' ? 'selected' :'' }}>012</option>
        <option value="013" {{ $datapenduduk->rt == '013' ? 'selected' :'' }}>013</option>
        <option value="014" {{ $datapenduduk->rt == '014' ? 'selected' :'' }}>014</option>
        <option value="015" {{ $datapenduduk->rt == '015' ? 'selected' :'' }}>015</option>
        <option value="016" {{ $datapenduduk->rt == '016' ? 'selected' :'' }}>016</option>
        <option value="017" {{ $datapenduduk->rt == '017' ? 'selected' :'' }}>017</option>
        <option value="018" {{ $datapenduduk->rt == '018' ? 'selected' :'' }}>018</option>
        <option value="019" {{ $datapenduduk->rt == '019' ? 'selected' :'' }}>019</option>
        <option value="020" {{ $datapenduduk->rt == '020' ? 'selected' :'' }}>020</option>
        <option value="021" {{ $datapenduduk->rt == '021' ? 'selected' :'' }}>021</option>
        <option value="022" {{ $datapenduduk->rt == '022' ? 'selected' :'' }}>022</option>
        <option value="023" {{ $datapenduduk->rt == '023' ? 'selected' :'' }}>023</option>
    </select>
    @if($errors->has('rt'))
          <div class="text-red-600 italic "> 
          {{$errors->first('rt')}}
          </div>
          @endif
  </div>
</div>
      <div>
      <div class="flex w-full h-full justify-center content-center items-center">
        <button class="rounded bg-blue-500 hover:bg-blue-700 py-2 px-4 text-white" type="submit"> UBAH</button>
        </div>
    </form>
<div>


</div>


<script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>
@endsection