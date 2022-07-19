@extends('admin.app')
@section('title', 'Dashboard')
@section('content')
<section>
            <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

                <div class="bg-gray-800 pt-3">
                    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                        <h1 class="font-bold pl-2">DATA KEPENDUDUKAN DESA TUGU</h1>
                    </div>
                    
                </div>

                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <a href="{{ route('admin.data-penduduk.index')}}">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-green-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Data Penduduk</h2>
                                   <p class="font-bold text-3xl"> <span class="text-green-500"></span></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <a href="{{ route('admin.data-kelahiran.index')}}">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Data Kelahiran</h2>
                                    <p class="font-bold text-3xl"> <span class="text-pink-500"></span></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <a href="{{ route('admin.data-kematian.index')}}">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-user-minus fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Data Kematian</h2>
                                    <p class="font-bold text-3xl"> <span class="text-yellow-600"></span></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <a href="{{ route('admin.data-perkawinan.index')}}">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-server fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Data Perkawinan</h2>
                                    <p class="font-bold text-3xl"></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <a href="{{ route('admin.data-perceraian.index')}}">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Data Perceraian</h2>
                                    <p class="font-bold text-3xl"></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <a href="{{ route('admin.data-pendatang.index')}}">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-red-600"><i class="fas fa-indent fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Data Pendatang</h2>
                                    <p class="font-bold text-3xl"><span class="text-red-500"></span></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <a href="{{ route('admin.data-perpindahan.index')}}">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-red-600"><i class="fas fa-outdent fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Data Perpindahan</h2>
                                    <p class="font-bold text-3xl"><span class="text-red-500"></span></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <a href="{{ route('admin.data-pekerja-migran.index')}}">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-green-600"><i class="fas fa-briefcase fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Data Pekerja Migran</h2>
                                   <p class="font-bold text-3xl"><span class="text-green-500"></span></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <a href="{{ route('admin.data-vaksin.index')}}">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-syringe fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Data Vaksin</h2>
                                    <p class="font-bold text-3xl"><span class="text-pink-500"></span></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <a href="{{ route('admin.data-bansos.index')}}">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-coins fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Data Bansos</h2>
                                    <p class="font-bold text-3xl"><span class="text-yellow-600"></span></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <a href="{{ route('admin.sku.index')}}">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-calendar-check fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Surat Keterangan Usaha</h2>
                                    <p class="font-bold text-3xl"></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <a href="{{ route('admin.surat-menyurat.index')}}">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-green-600"><i class="fas fa-print fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Surat Menyurat</h2>
                                   <!-- <p class="font-bold text-3xl">5556 <span class="text-green-500"></span></p> -->
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                        </a>
                    </div>
                </div>





                </div>
            </div>
        </section>
        @endsection