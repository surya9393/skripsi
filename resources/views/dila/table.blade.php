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

                <a href="{{ route('dila.table') }}"
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fa fa-area-chart text-xs mr-2" aria-hidden="true"></i>
                    Data table
                </a>

                
                <!-- end link -->


            </div>
            <!-- end sidebar content -->

        </div>
        <!-- end sidbar -->

        <!-- strat content -->
        <div class="bg-gray-100 flex-1 p-6 md:mt-16">


            
            <div class="grid grid-cols- gap-6 xl:grid-cols-1 mb-6">
                <div class="report-card">
                    <div class="card">
                        <div class="card-body flex flex-col">

                            <!-- top -->
                            <div class="flex flex-row justify-between items-center">
                                <div class="h6 text-indigo-700 fa fa-bolt"></div>
                                <span class="rounded-full text-white badge bg-teal-400 text-xs">
                                    {{ $percentage }} %
                                    <i class="fal fa-chevron-up ml-1"></i>
                                </span>
                            </div>
                            <!-- end top -->

                            <!-- bottom -->
                            <div class="text-center content-center">
                                <h1 class="h5">Current</h1>
                                <div class="flex flex-col">
                                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                          <table class="min-w-full border text-center">
                                            <thead class="border-b">
                                              <tr>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                                                  #
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                                                  First
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                                                  Last
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                                  Handle
                                                </th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr class="border-b">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border-r">1</td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                                  Mark
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                                  Otto
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                  @mdo
                                                </td>
                                              </tr>
                                              <tr class="bg-white border-b">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border-r">2</td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                                  Jacob
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                                  Thornton
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                  @fat
                                                </td>
                                              </tr>
                                              <tr class="bg-white border-b">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border-r">3</td>
                                                <td colspan="2" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center border-r">
                                                  Larry the Bird
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                  @twitter
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            
                            <!-- end bottom -->

                        </div>
                    </div>
                    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                </div>
                <!-- end card -->


                <!-- card -->
                
            </div>
            
            <!-- General Report -->
            <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">


                <!-- card -->
                



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
                <!-- end charts -->


            </div>
            
           

        </div>
        <!-- end content -->

        
        
    </div>

    

    <!-- end wrapper -->
@endsection

