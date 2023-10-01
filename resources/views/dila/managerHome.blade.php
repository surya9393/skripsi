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
                <a href="/"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-chart-pie text-xs mr-2"></i>
                    Dashboard
                </a>
                <!-- end link -->

                
                <!-- end link -->


            </div>
            <!-- end sidebar content -->

        </div>
        <!-- end sidbar -->

        <!-- strat content -->
        <div class="bg-gray-100 flex-1 p-6 md:mt-16">

            <div class="grid grid-cols-4 gap-6 xl:grid-cols-1 mb-5">


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

                            <!-- bottom -->
                            <div class="mt-8">
                                <h1 class="h5"> {{ Str::limit($voltage, 6) }} V</h1>
                                <p>Voltage Average</p>
                            </div>
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
                            <div class="mt-8">
                                <h1 class="h5"> {{ Str::limit($current, 6) }} A</h1>
                                <p>Currrent Average</p>
                            </div>
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
                                <div class="h6 text-orange-600 fa fa-battery-full"></div>
                                {{-- <span class="rounded-full text-white badge bg-red-400 text-xs">
                                    6%
                                    <i class="fal fa-chevron-down ml-1"></i>
                                </span> --}}
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            <div class="mt-8">
                                <h1 class="h5"> {{ Str::limit($power_avg, 6) }} Watt</h1>
                                <p>Power Average</p>
                            </div>
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
                                <div class="h6 text-orange-600 fa fa-battery-full"></div>
                                {{-- <span class="rounded-full text-white badge bg-red-400 text-xs">
                                    6%
                                    <i class="fal fa-chevron-down ml-1"></i>
                                </span> --}}
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            <div class="mt-8">
                                <h1 class="h5"> {{ Str::limit($power, 6) }} KWh</h1>
                                <p>Enegry Average</p>
                            </div>
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>



            </div>
            
            <div class="grid grid-cols-2 gap-6 xl:grid-cols-1 mb-6">
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
                            <div class="text-center content-center">
                                <h1 class="h5">Current</h1>
                                <div class="" id="chart2">
                                </div>
                            </div>
                            
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
                            <div class="text-center content-center">
                                <h1 class="h5">Voltage</h1>
                                <div class="" id="chart">
                                </div>
                            </div>
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-6 xl:grid-cols-1 mb-6">
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
                            <div class="text-center content-center">
                                <h1 class="h5">Power</h1>
                                <div class="" id="chart3">
                                </div>
                            </div>
                            
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
                            <div class="text-center content-center">
                                <h1 class="h5">Energy</h1>
                                <div class="" id="chart4">
                                </div>
                            </div>
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>
            </div>
            <!-- General Report -->
           
            <!-- End General Report -->

            <!-- strat Analytics -->
            <div class="mt-6 grid grid-cols-1 gap-6 xl:grid-cols-1">

                <!-- update section -->
                <div class="card bg-blue-400 border-blue-400 shadow-md text-white">
                    <div class="card-body flex flex-row justify-center items-center mx-6">

                        <!-- image -->
                        <div class="img-wrapper w-3/6 flex justify-center items-center">
                            <img src="{{ url('img/163d2767ef1304.svg') }}" alt="img title">
                        </div>
                        <!-- end image -->

                        <!-- info -->
                        <div class="py-2 ml-10">
                            <h1 class="h6">Simulation</h1>
                            <p class="text-white text-xs">Maximum Power Point Tracking</p>

                            <ul class="mt-4">
                                <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i>Show Data</li>
                                <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i>Show Graph</li>
                                <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i>Export Data</li>
                            </ul>
                        </div>
                        <!-- end info -->

                    </div>
                </div>
                <!-- end update section -->

                <!-- carts -->
                
                <!-- end charts -->


            </div>
            
            

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
                data: chartData.data_voltage
            }],
            xaxis: {
                categories: chartData.label
            }
        }

        var chart1 = new ApexCharts(document.querySelector("#chart"), options1);

        chart1.render();
    </script>

    <script>
        var options3 = {
            chart: {
                type: 'line'
            },
            series: [{
                name: 'sales',
                data: chartData.data_power
            }],
            xaxis: {
                categories: chartData.label
            }
        }

        var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);

        chart3.render();
    </script>

    <script>
        var options4 = {
            chart: {
                type: 'line'
            },
            series: [{
                name: 'sales',
                data: chartData.data_energy
            }],
            xaxis: {
                categories: chartData.label
            }
        }

        var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);

        chart4.render();
    </script>
    <script>
        var options2 = {
            chart: {
                type: 'line'
            },
            series: [{
                name: 'sales',
                data: chartData.data_current
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
                name: 'Data Forecast',
                data: chartData.data_forecast
            }, {
                name: 'Data Real',
                data: chartData.data_real
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
