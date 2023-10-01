@extends('layouts.main')
@section('content')
    <!-- strat wrapper -->
    <div class="h-screen flex flex-row flex-wrap">

        <!-- start sidebar -->
        <div id="sideBar"
            class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


            <!-- sidebar content -->
            <div class="flex flex-col">

                <!-- sidebar toggle -->
                <div class="text-right hidden md:block mb-4">
                    <button id="sideBarHideBtn">
                        <i class="fad fa-times-circle"></i>
                    </button>
                </div>
                <!-- end sidebar toggle -->

                <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

                <!-- link -->
                <a href="/"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-chart-pie text-xs mr-2"></i>
                    Dashboard
                </a>
                <!-- end link -->

                <!-- link -->
                <a href="/voltage"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fa fa-area-chart text-xs mr-2" aria-hidden="true"></i>
                    Realtime Chart
                </a>

                <a href="./index-1.html"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fa fa-area-chart text-xs mr-2" aria-hidden="true"></i>
                    Panel Surya Dinamis
                </a>

                <a href="./index-1.html"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fa fa-bar-chart text-xs mr-2" aria-hidden="true"></i>
                    Panel Surya Statis
                </a>

                <a href="./index-1.html"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fa fa-line-chart text-xs mr-2" aria-hidden="true"></i>
                    Perbandingan
                </a>
                <!-- end link -->

                <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">apps</p>

                <!-- link -->
                <a href="./email.html"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-envelope-open-text text-xs mr-2"></i>
                    Peramalan
                </a>
                <!-- end link -->

                <!-- link -->
                <a href="#"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-comments text-xs mr-2"></i>
                    Export Data
                </a>
                <!-- end link -->

                <!-- link -->
                <a href="#"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-shield-check text-xs mr-2"></i>
                    Export Log
                </a>
                <!-- end link -->

                <!-- link -->
                <a href="#"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-calendar-edit text-xs mr-2"></i>
                    Masukan
                </a>
                <!-- end link -->

            </div>
            <!-- end sidebar content -->

        </div>
        <!-- end sidbar -->

        <!-- strat content -->
        <div class="bg-gray-100 flex-1 p-6 md:mt-16">


            <!-- General Report -->
            <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">


                <!-- card -->
                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">

                            <!-- top -->
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-indigo-700 fa fa-bolt"></div>
                                {{-- <span class="rounded-full text-white badge bg-teal-400 text-xs">
                                    {{ $percentage }} %
                                    <i class="fal fa-chevron-up ml-1"></i>
                                </span> --}}
                            </div>
                            <!-- end top -->
                            @foreach ($voltage as $data)
                            <div class="mt-8">
                                <h1 class="h5">{{ $data->tegangan_statis }} V</h1>
                                <p>Tegangan Statis Terakhir</p>
                            </div>                                
                            @endforeach
                            <!-- bottom -->

                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>
                <!-- end card -->


                <!-- card -->
                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">

                            <!-- top -->
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-red-700 fa fa-plug"></div>
                                {{-- <span class="rounded-full text-white badge bg-red-400 text-xs">
                                    6%
                                    <i class="fal fa-chevron-down ml-1"></i>
                                </span> --}}
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            @foreach ($voltage as $data)
                            <div class="mt-8">
                                <h1 class="h5">{{ $data->arus_statis }} V</h1>
                                <p>Arus Statis Terakhir</p>
                            </div>                                
                            @endforeach
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>

                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">

                            <!-- top -->
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-orange-600 fa fa-thermometer-three-quarters"></div>
                                {{-- <span class="rounded-full text-white badge bg-red-400 text-xs">
                                    6%
                                    <i class="fal fa-chevron-down ml-1"></i>
                                </span> --}}
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            @foreach ($weather as $cuaca)
                            <div class="mt-8">
                                <h1 class="h5">{{ $cuaca->suhu }} °C</h1>
                                <p>Suhu</p>
                            </div>                                
                            @endforeach
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>


                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">

                            <!-- top -->
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-green-700 fa fa-tint"></div>
                                {{-- <span class="rounded-full text-white badge bg-red-400 text-xs">
                                    6%
                                    <i class="fal fa-chevron-down ml-1"></i>
                                </span> --}}
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            @foreach ($weather as $cuaca)
                            <div class="mt-8">
                                <h1 class="h5">{{ $cuaca->kelembaban }} %</h1>
                                <p>Kelembaban</p>
                            </div>                                
                            @endforeach
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>

                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">

                            <!-- top -->
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-indigo-700 fa fa-bolt"></div>
                                {{-- <span class="rounded-full text-white badge bg-teal-400 text-xs">
                                    {{ $percentage }} %
                                    <i class="fal fa-chevron-up ml-1"></i>
                                </span> --}}
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            @foreach ($voltage as $data)
                            <div class="mt-8">
                                <h1 class="h5">{{ $data->tegangan_dinamis }} V</h1>
                                <p>Tegangan Dinamis Terakhir</p>
                            </div>                                
                            @endforeach
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>

                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">

                            <!-- top -->
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-red-700 fa fa-plug"></div>
                                {{-- <span class="rounded-full text-white badge bg-red-400 text-xs">
                                    6%
                                    <i class="fal fa-chevron-down ml-1"></i>
                                </span> --}}
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            @foreach ($voltage as $data)
                            <div class="mt-8">
                                <h1 class="h5">{{ $data->arus_dinamis }} V</h1>
                                <p>Arus Dinamis Terakhir</p>
                            </div>                                
                            @endforeach
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>
                <!-- end card -->


                <!-- card -->
                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">

                            <!-- top -->
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-yellow-600 fa fa-long-arrow-up"></div>
                                {{-- <span class="rounded-full text-white badge bg-teal-400 text-xs">
                                    72%
                                    <i class="fal fa-chevron-up ml-1"></i>
                                </span> --}}
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            @foreach ($weather as $cuaca)
                            <div class="mt-8">
                                <h1 class="h5">{{ $cuaca->altitude }} Mdpl</h1>
                                <p>Ketinggian</p>
                            </div>                                
                            @endforeach
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>
                <!-- end card -->


                <!-- card -->
                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">

                            <!-- top -->
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-green-700 fa fa-tachometer"></div>
                                {{-- <span class="rounded-full text-white badge bg-teal-400 text-xs">
                                    150%
                                    <i class="fal fa-chevron-up ml-1"></i>
                                </span> --}}
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            @foreach ($weather as $cuaca)
                            <div class="mt-8">
                                <h1 class="h5">{{ $cuaca->tekanan }} Pa</h1>
                                <p>Tekanan udara</p>
                            </div>                                
                            @endforeach
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>
                <!-- end card -->


            </div>
            <!-- End General Report -->

            <!-- strat Analytics -->
            <div class="mt-6 grid grid-cols-2 gap-6 xl:grid-cols-1">

                <!-- update section -->
                <div class="card bg-teal-400 border-teal-400 shadow-md text-white">
                    <div class="card-body flex flex-row justify-center items-center my-3">

                        <!-- image -->
                        <div class="img-wrapper w-2/6 flex justify-center items-center">
                            <img src="./img/panel_surya.png" alt="img title">
                        </div>
                        <!-- end image -->

                        <!-- info -->
                        <div class="py-2 ml-10">
                            <h1 class="h6">Sun Tracking System</h1>
                            <p class="text-white text-xs">with Dual Axis Technology</p>

                            <ul class="mt-4">
                                <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Monitoring
                                    Solar Panel</li>
                                <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Monitoring
                                    Battery</li>
                                <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Forcasting
                                </li>
                                <li class="text-sm font-light"><i class="fad fa-check-double mr-2"></i> Export Data</li>
                            </ul>
                        </div>
                        <!-- end info -->

                    </div>
                </div>
                <!-- end update section -->

                <!-- carts -->
                <div class="flex flex-col">

                    <!-- alert -->
                    <div class="alert alert-dark mb-6 text-center">
                        Monitoring Panel Surya
                    </div>
                    <!-- end alert -->

                    <!-- charts -->
                    <div class="grid grid-cols-2 gap-6 h-full">

                        <div class="card">
                            <div class="py-3 px-4 flex flex-row justify-between">
                                <h1 class="h6">
                                    <span>Grafik Tegangan</span>
                                    <p>Dinamis</p>
                                </h1>

                                <div
                                    class="bg-teal-200 text-teal-700 border-teal-300 border w-10 h-10 rounded-full flex justify-center items-center">
                                    <i class="fad fa-eye"></i>
                                </div>
                            </div>
                            <div id="chart">
                            </div>
                        </div>

                        <div class="card">
                            <div class="py-3 px-4 flex flex-row justify-between">
                                <h1 class="h6">
                                    <span>Grafik Tegangan</span>
                                    <p>Statis</p>
                                </h1>

                                <div
                                    class="bg-indigo-200 text-indigo-700 border-indigo-300 border w-10 h-10 rounded-full flex justify-center items-center">
                                    <i class="fad fa-users-crown"></i>
                                </div>
                            </div>
                            <div id="chart2">
                            </div>
                        </div>

                    </div>
                    <!-- charts    -->

                </div>
                <!-- end charts -->


            </div>
            <!-- end Analytics -->

            <!-- Sales Overview -->
            <div class="card mt-6">

                <!-- header -->
                <div class="card-header flex flex-row justify-between">
                    <h1 class="h6">Perbandingan Daya Panel Surya Statis & Dinamis</h1>

                    <div class="flex flex-row justify-center items-center">

                        <a href="">
                            <i class="fad fa-chevron-double-down mr-6"></i>
                        </a>

                        <a href="">
                            <i class="fad fa-ellipsis-v"></i>
                        </a>

                    </div>

                </div>
                <!-- end header -->

                <!-- body -->
                <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">

                    <div class="p-8">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.7334623513636!2d106.77051162651654!3d-6.55505102917987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c48786b9897b%3A0x7e7fd31907ed0f54!2sJl.%20Komp.%20Bogor%20Raya%20Permai%20Blok%20FA4%20No.24%2C%20RT.03%2FRW.05%2C%20Curug%2C%20Kec.%20Bogor%20Bar.%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016113!5e0!3m2!1sen!2sid!4v1674535720137!5m2!1sen!2sid"
                            class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                    <div class="">
                        <div id="perbandingan"></div>
                    </div>

                </div>
                <!-- end body -->

            </div>
            <!-- end Sales Overview -->

            <!-- start numbers -->
            
            <!-- end nmbers -->

            <!-- start quick Info -->
            
            <!-- end quick Info -->


        </div>
        <!-- end content -->

    </div>

    <!-- end wrapper -->
@endsection

@push('js')
    <script>
        var chartData = JSON.parse('<?php echo $test; ?>');
        console.log(chartData);
        var options1 = {
            chart: {
                type: 'line'
            },
            series: [{
                name: 'sales',
                data: chartData.data_dinamis
            }],
            xaxis: {
                categories: chartData.label
            }
        }

        var chart1 = new ApexCharts(document.querySelector("#chart"), options1);

        chart1.render();
    </script>

    <script>
        var options2 = {
            chart: {
                type: 'line'
            },
            series: [{
                name: 'sales',
                data: chartData.data_statis
            }],
            xaxis: {
                categories: chartData.label
            }
        }

        var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);

        chart2.render();
    </script>

    <script>
        var options = {
            series: [{
                name: 'Data Dinamis',
                data: chartData.power_dinamis
            }, {
                name: 'Data Statis',
                data: chartData.power_statis
            }],
            chart: {
                height: 350,
                type: 'area'
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            xaxis: {
                categories: chartData.label
            },

        };

        var chart = new ApexCharts(document.querySelector("#perbandingan"), options);
        chart.render();
    </script>
@endpush
