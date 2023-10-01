@extends('ghina.layouts.main')
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
                <a href="{{ route('admin.home') }}"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-chart-pie text-xs mr-2"></i>
                    Dashboard
                </a>
                <!-- end link -->

                <a href="{{ route('admin.expo') }}"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fa fa-bar-chart text-xs mr-2" aria-hidden="true"></i>
                    Exponential Smoothing
                </a>

                
                <!-- end link -->


            </div>
            <!-- end sidebar content -->

        </div>
        <!-- end sidbar -->

        <!-- strat content -->
        <div class="bg-gray-100 flex-1 p-6 md:mt-16">


            <!-- General Report -->
            <div class="grid grid-cols-1 gap-6 xl:grid-cols-1">


                <!-- card -->
                
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
                            {{-- <div class="mt-8">
                                <h1 class="h5"> {{ Str::limit($current, 6) }} A</h1>
                                <p>Arus</p>
                            </div> --}}
                            <div id="perbandingan">
                            </div>
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>

                



            </div>
            <!-- End General Report -->

            <!-- strat Analytics -->
            <div class="mt-6 grid grid-cols-2 gap-6 xl:grid-cols-1">

                <!-- update section -->
                <div class="card bg-blue-400 border-blue-400 shadow-md text-white">
                    <div class="card-body flex flex-row justify-center items-center mx-6">

                        <!-- image -->
                        <div class="img-wrapper w-3/6 flex justify-center items-center">
                            <img src="{{ url('img/Forecast.png') }}" alt="img title">
                        </div>
                        <!-- end image -->

                        <!-- info -->
                        <div class="py-2 ml-10">
                            <h1 class="h6">Forecasting</h1>
                            <p class="text-white text-xs">with Exponential Smoothing</p>

                            <ul class="mt-4">
                                <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i>Show Data</li>
                                <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i>Forecasting</li>
                                <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i>Export Data</li>
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
                                    <span>Grafik Arus</span>
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
            
            

        </div>
        <!-- end content -->

        
        
    </div>

    

    <!-- end wrapper -->
@endsection

@push('js')
    <script>
        var chartData = JSON.parse('<?php echo $tester; ?>');
        console.log(chartData);
        var options1 = {
            chart: {
                type: 'line'
            },
            series: [{
                name: 'Tegangan',
                data: chartData.data_tegangan
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
                name: 'Arus',
                data: chartData.data_arus
            }],
            xaxis: {
                categories: chartData.label
            }
        }

        var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);

        chart2.render();
    </script>

    <script>
        var chartData1 = JSON.parse('<?php echo $test; ?>');
        var options = {
            series: [{
                name: 'Data Forecast',
                data: chartData1.data_forecast
            }, {
                name: 'Data Real',
                data: chartData1.data_real
            }],
            chart: {
                height: 350,
                type: 'bar'
            },
            dataLabels: {
                enabled: false
            },
            
            xaxis: {
                categories: chartData.label
            },

        };

        var chart = new ApexCharts(document.querySelector("#perbandingan"), options);
        chart.render();
    </script>
@endpush
