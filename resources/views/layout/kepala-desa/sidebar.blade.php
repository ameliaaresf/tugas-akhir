<nav aria-label="alternative nav">
            <div class="bg-blue-900 h-20 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 content-center">

                <div class="md:mt-12 md:w-48 md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                    <ul class=" flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                        <li class="mr-3 flex-1">
                            <div class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                                <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Layanan Data</span>
                            </div>
                        </li>
                        <!-- <li class="mr-3 flex-1">
                            <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                                <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Beranda</span>
                            </a>
                        </li> -->
                        <li class="mr-3 flex-1 hover:bg-blue-600 px-1 rounded-lg ">
                            <a href="{{ route ('desa.index') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline ">
                                <i class="fas fa-chart-area pr-0 md:pr-3 text-white"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Dashboard</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1 hover:bg-blue-600 px-1 rounded-lg">
                            <a href="{{ route ('penduduk')}}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline ">
                                <i class="fas fa-users pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Data Penduduk</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1 hover:bg-blue-600 px-1 rounded-lg">
                            <a href="{{ route ('kelahiran')}}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline ">
                                <i class="fas fa-user-plus pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Data Kelahiran</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1 hover:bg-blue-600 px-1 rounded-lg">
                            <a href="{{ route ('kematian')}}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline ">
                                <i class="fas fa-user-minus pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Data Kematian</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1 hover:bg-blue-600 px-1 rounded-lg">
                            <a href="{{ route ('perkawinan')}}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline ">
                                <i class="fas fa-server pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Data Perkawinan</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1 hover:bg-blue-600 px-1 rounded-lg">
                            <a href="{{ route ('perceraian')}}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline ">
                                <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Data Perceraian</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1 hover:bg-blue-600 px-1 rounded-lg">
                            <a href="{{ route ('pendatang')}}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline ">
                                <i class="fas fa-indent pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Data Pendatang</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1 hover:bg-blue-600 px-1 rounded-lg">
                            <a href="{{ route ('perpindahan')}}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline ">
                                <i class="fas fa-outdent pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Data Perpindahan</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1 hover:bg-blue-600 px-1 rounded-lg">
                            <a href="{{ route ('pekerja')}}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline ">
                                <i class="fas fa-briefcase pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Data Pekerja </span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1 hover:bg-blue-600 px-1 rounded-lg">
                            <a href="{{ route ('vaksin')}}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline ">
                                <i class="fas fa-syringe pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Data Vaksin</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1 hover:bg-blue-600 px-1 rounded-lg">
                            <a href="{{ route ('bansos')}}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline ">
                                <i class="fas fa-coins pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Data BANSOS</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1 hover:bg-blue-600 px-1 rounded-lg">
                            <a href="{{ route ('surat')}}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline ">
                            <i class="fas fa-calendar-check pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Surat Menyurat</span>
                            </a>
                        </li>
                    </ul>
                </div>


            </div>
        </nav>