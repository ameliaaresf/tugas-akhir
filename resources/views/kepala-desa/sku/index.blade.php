@extends('kepala-desa.app')
@section('title', 'Surat Keterangan Usaha')
@section('content')

@if (count($errors)>0) 
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ ($error) }}</li>
		@endforeach
	</ul>

</div>
@endif
        <section class="w-full">
        <div class="container mx-auto py-6 px-4" x-data="datatables()" x-cloak>
		<h1 class="text-3xl py-4 border-b mb-10 text-white">Surat Keterangan Usaha</h1>

		<div x-show="selectedRows.length" class="bg-teal-200 fixed top-0 left-0 right-0 z-40 w-full shadow">
			<div class="container mx-auto px-4 py-4">
				<div class="flex md:items-center">
					<div class="mr-4 flex-shrink-0">
						<svg class="h-8 w-8 text-teal-600"  viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
					</div>
					<div x-html="selectedRows.length + ' rows are selected'" class="text-teal-800 text-lg"></div>
				</div>
			</div>
		</div>

		<div class="mb-4 flex justify-between items-center">
			<div class="flex-1 pr-4">
				
			</div>
			<div>
				<div class="">
                    
					
				
				</div>
			</div>
		</div>

		<div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative"
			style="height: 405px;">
			<table class="border-collapse border border-slate-400 table-auto w-full whitespace-no-wrap bg-white table-striped relative">
				<thead>
					<tr class="text-left">
						<!-- <th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								<input type="checkbox" class="form-checkbox focus:outline-none focus:shadow-outline" @click="selectAllCheckbox($event);">
							</label>
						</th>  -->
						
							
                            
							<th class="border border-slate-300 bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs text-center"
								>No Registrasi</th>
							<th class="border border-slate-300 bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs text-center"
								>Nama</th>
							<th class="border border-slate-300 bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs text-center"
								>NIK</th>
							<th class="border border-slate-300 bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs text-center"
								>Tempat Lahir</th>
							<th class="border border-slate-300 bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs text-center"
								>Tanggal Lahir</th>
							<th class="border border-slate-300 bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs text-center"
								>Jenis Kelamin</th>
							<th class="border border-slate-300 bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs text-center"
								>Pekerjaan</th>
                            <th class="border border-slate-300 bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs text-center"
								>Alamat</th>
                            <th class="border border-slate-300 bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs text-center"
								>Nama Usaha</th>
							<th class="border border-slate-300 bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs text-center"
								>Tanggal Pembuatan</th>
							<th class="border border-slate-300 bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs text-center"
								>Yang Bertandatangan</th>
							<th class="border border-slate-300 bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs text-center"
								>Keterangan</th>
							
						
					</tr>
				</thead>
				<tbody>
				
					@foreach ($sku as $item)
						<tr>
							<td class="border border-slate-300 border-t border-gray-200 userId text-center">
                            	{{$item->no_regis}}
							</td>
							<td class="border border-slate-300 border-t border-gray-200 userId text-center">
                            	{{$item->nama}}
							</td>
							<td class="border border-slate-300 border-t border-gray-200 userId text-center">
                            	{{$item->nik}}
							</td>
							<td class="border border-slate-300 border-t border-gray-200 userId text-center">
                            	{{$item->tempat_lahir}}
							</td>
							<td class="border border-slate-300 border-t border-gray-200 userId text-center">
								{{ date("d F Y", strtotime($item->tgl_lahir))}}
							</td>
							<td class="border border-slate-300 border-t border-gray-200 userId text-center">
								{{$item->jk}}
							</td>
							<td class="border border-slate-300 border-t border-gray-200 userId text-center">
								{{$item->pekerjaan}}
							</td>
							<td class="border border-slate-300 border-t border-gray-200 userId text-center">
								{{$item->alamat}}
							</td>
							<td class="border border-slate-300 border-t border-gray-200 userId text-center">
								{{$item->nama_usaha}}
							</td>
							<td class="border border-slate-300 border-t border-gray-200 userId text-center">
								{{ date("d F Y", strtotime($item->tgl_buat))}}
							</td>
							<td class="border border-slate-300 border-t border-gray-200 userId text-center">
								{{$item->ttd}}
							</td>
							<td class="border border-slate-300 border-t border-gray-200 userId text-center">
								{{$item->keterangan}}
							</td>
						</tr>
						@endforeach

					
					
				</tbody>
			</table>
		</div>
	</div>
        </section>
    @endsection