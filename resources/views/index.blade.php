
@extends('layout.app')
@section('content')
   <x-sidebar></x-sidebar>
    <div class="flex flex-col justify-between min-h-screen">
      <div>

        <!-- BEGIN: Search Modal -->
        <x-header></x-header>

        <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
          <div class="page-content">
            <div class="transition-all duration-150 container-fluid" id="page_layout">
              <div id="content_layout">

                <div>
                  <div class="flex justify-between flex-wrap items-center mb-6">
                    <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 flex space-x-3 rtl:space-x-reverse mb-4 sm:mb-0">Dashboard</h4>
                </div>
                <div class="grid grid-cols-none gap-5 mb-5">
                  <div class="2xl:col-span-9 lg:col-span-8 col-span-12">
                    <div class="p-4 card">
                      <div class="grid md:grid-cols-4 col-span-1 gap-4">
                
                        <!-- BEGIN: Group Chart2 -->
                
                        <div class="py-[18px] px-4 rounded-[6px] bg-blue-500 dark:bg-slate-900">
                          <div class="flex items-center space-x-6 rtl:space-x-reverse">
                            <div class="flex-none">
                              <div></div>
                            </div>
                            <div class="flex-1">
                              <div class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                Total Revenue
                              </div>
                              <div class="text-slate-900 dark:text-white text-lg font-medium">
                                3,564
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="py-[18px] px-4 rounded-[6px] bg-blue-500 dark:bg-slate-900">
                          <div class="flex items-center space-x-6 rtl:space-x-reverse">
                            <div class="flex-none">
                              <div id=""></div>
                            </div>
                            <div class="flex-1">
                              <div class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                Products Sold
                              </div>
                              <div class="text-slate-900 dark:text-white text-lg font-medium">
                                564
                              </div>
                            </div>
                          </div>
                        </div>
                
                        <div class="py-[18px] px-4 rounded-[6px] bg-blue-500 dark:bg-slate-900">
                          <div class="flex items-center space-x-6 rtl:space-x-reverse">
                            <div class="flex-none">
                              <div id=""></div>
                            </div>
                            <div class="flex-1">
                              <div class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                Products Sold
                              </div>
                              <div class="text-slate-900 dark:text-white text-lg font-medium">
                                564
                              </div>
                            </div>
                          </div>
                        </div>
                
                        <!-- Kotak keempat - Menyusul agar sejajar dengan lainnya -->
                       
                        <div class="py-[18px] px-4 rounded-[6px] bg-blue-500 dark:bg-slate-900">
                          <div class="flex items-center space-x-6 rtl:space-x-reverse">
                            <div class="flex-none">
                              <div id=""></div>
                            </div>
                            <div class="flex-1">
                              <div class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                Products Sold
                              </div>
                              <div class="text-slate-900 dark:text-white text-lg font-medium">
                                564
                              </div>
                            </div>
                          </div>
                        </div>
                
                        <!-- END: Group Chart2 -->
                      </div>
                    </div>
                  </div>
                </div>
                
                      </div>
                    </div>
                  </div>
                  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                    <div class="lg:col-span-8 col-span-12">
                      <div class="card">
                        <header class="card-header noborder">
                          <h4 class="card-title">Report</h4>
                          <div>
                            <!-- BEGIN: Card Dropdown -->
                            <div class="relative">
                              <div class="dropdown relative">
                                <button class="text-xl text-center block w-full " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <span class="text-lg inline-flex h-6 w-6 flex-col items-center justify-center border border-slate-200 dark:border-slate-700
                    rounded dark:text-slate-400">
                <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
            </span>
                                </button>
                                <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                  <li>
                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                      Last 28 Days</a>
                                  </li>
                                  <li>
                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                      Last Month</a>
                                  </li>
                                  <li>
                                    <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                        dark:hover:text-white">
                                      Last Year</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <!-- END: Card Droopdown -->
                          </div>
                        </header>
                        <div class="card-body p-6">

                          <!-- BEGIN: Company Table -->


                          <div class="overflow-x-auto -mx-6">
                            <div class="inline-block min-w-full align-middle">
                              <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                  <thead class="  bg-slate-200 dark:bg-slate-700">
                                    <tr>

                                      <th scope="col" class=" table-th ">
                                        Company
                                      </th>

                                      <th scope="col" class=" table-th ">
                                        Category
                                      </th>

                                      <th scope="col" class=" table-th ">
                                        Sales
                                      </th>

                                      <th scope="col" class=" table-th ">
                                        Views
                                      </th>

                                      <th scope="col" class=" table-th ">
                                        revenue
                                      </th>

                                    </tr>
                                  </thead>
                                  <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                    <tr>
                                      <td class="table-td">
                                        <div class="flex items-center">
                                          <div class="flex-none">
                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                              <img src=assets/images/users/user-1.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                            </div>
                                          </div>
                                          <div class="flex-1 text-start">
                                            <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                              Biffco Enterprises Ltd.
                                            </h4>
                                            <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                              Biffco@example.com
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="table-td">Technology</td>
                                      <td class="table-td ">
                                        <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                          <span>
                                        95%</span>
                                          <span class=" text-xl  text-danger-500 ">

                                            <iconify-icon icon="heroicons-outline:trending-down"></iconify-icon>
                                        
                                    </span>
                                        </div>
                                      </td>
                                      <td class="table-td ">343</td>
                                      <td class="table-td ">$231.26</td>
                                    </tr>

                                    <tr>
                                      <td class="table-td">
                                        <div class="flex items-center">
                                          <div class="flex-none">
                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                              <img src=assets/images/users/user-2.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                            </div>
                                          </div>
                                          <div class="flex-1 text-start">
                                            <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                              Biffco Enterprises Ltd.
                                            </h4>
                                            <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                              Biffco@example.com
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="table-td">Technology</td>
                                      <td class="table-td ">
                                        <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                          <span>
                                        197%</span>
                                          <span class=" text-xl  text-success-500 ">

                                            <iconify-icon icon="heroicons-outline:trending-up"></iconify-icon>
                                        
                                    </span>
                                        </div>
                                      </td>
                                      <td class="table-td ">315</td>
                                      <td class="table-td ">$432.81</td>
                                    </tr>

                                    <tr>
                                      <td class="table-td">
                                        <div class="flex items-center">
                                          <div class="flex-none">
                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                              <img src=assets/images/users/user-3.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                            </div>
                                          </div>
                                          <div class="flex-1 text-start">
                                            <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                              Biffco Enterprises Ltd.
                                            </h4>
                                            <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                              Biffco@example.com
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="table-td">Technology</td>
                                      <td class="table-td ">
                                        <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                          <span>
                                        137%</span>
                                          <span class=" text-xl  text-success-500 ">

                                            <iconify-icon icon="heroicons-outline:trending-up"></iconify-icon>
                                        
                                    </span>
                                        </div>
                                      </td>
                                      <td class="table-td ">329</td>
                                      <td class="table-td ">$437.65</td>
                                    </tr>

                                    <tr>
                                      <td class="table-td">
                                        <div class="flex items-center">
                                          <div class="flex-none">
                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                              <img src=assets/images/users/user-4.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                            </div>
                                          </div>
                                          <div class="flex-1 text-start">
                                            <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                              Biffco Enterprises Ltd.
                                            </h4>
                                            <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                              Biffco@example.com
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="table-td">Technology</td>
                                      <td class="table-td ">
                                        <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                          <span>
                                        101%</span>
                                          <span class=" text-xl  text-success-500 ">

                                            <iconify-icon icon="heroicons-outline:trending-up"></iconify-icon>
                                        
                                    </span>
                                        </div>
                                      </td>
                                      <td class="table-td ">336</td>
                                      <td class="table-td ">$387.55</td>
                                    </tr>

                                    <tr>
                                      <td class="table-td">
                                        <div class="flex items-center">
                                          <div class="flex-none">
                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                              <img src=assets/images/users/user-5.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                            </div>
                                          </div>
                                          <div class="flex-1 text-start">
                                            <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                              Biffco Enterprises Ltd.
                                            </h4>
                                            <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                              Biffco@example.com
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="table-td">Technology</td>
                                      <td class="table-td ">
                                        <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                          <span>
                                        99%</span>
                                          <span class=" text-xl  text-danger-500 ">

                                            <iconify-icon icon="heroicons-outline:trending-down"></iconify-icon>
                                        
                                    </span>
                                        </div>
                                      </td>
                                      <td class="table-td ">375</td>
                                      <td class="table-td ">$489.80</td>
                                    </tr>

                                    <tr>
                                      <td class="table-td">
                                        <div class="flex items-center">
                                          <div class="flex-none">
                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                              <img src=assets/images/users/user-6.jpg alt="" class="w-full h-full rounded-[100%] object-cover">
                                            </div>
                                          </div>
                                          <div class="flex-1 text-start">
                                            <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                              Biffco Enterprises Ltd.
                                            </h4>
                                            <div class="text-xs font-normal text-slate-600 dark:text-slate-400">
                                              Biffco@example.com
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="table-td">Technology</td>
                                      <td class="table-td ">
                                        <div class="flex space-x-6 items-center rtl:space-x-reverse">
                                          <span>
                                        101%</span>
                                          <span class=" text-xl  text-success-500 ">

                                            <iconify-icon icon="heroicons-outline:trending-up"></iconify-icon>
                                        
                                    </span>
                                        </div>
                                      </td>
                                      <td class="table-td ">490</td>
                                      <td class="table-td ">$421.45</td>
                                    </tr>

                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                          <!-- END: Company Table -->
                        </div>
                      </div>
                    </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center
    backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
        <a href="chat.html">
          <div>
            <span class="relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900 ">
        <iconify-icon icon="heroicons-outline:mail"></iconify-icon>
        <span class="absolute right-[5px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
            justify-center rounded-full text-white z-[99]">
          10
        </span>
            </span>
            <span class="block text-[11px] text-slate-600 dark:text-slate-300">
        Messages
      </span>
          </div>
        </a>
        <a href="profile.html" class="relative bg-white bg-no-repeat backdrop-filter backdrop-blur-[40px] rounded-full footer-bg dark:bg-slate-700
      h-[65px] w-[65px] z-[-1] -mt-[40px] flex justify-center items-center">
          <div class="h-[50px] w-[50px] rounded-full relative left-[0px] hrefp-[0px] custom-dropshadow">
            <img src="assets/images/users/user-1.jpg" alt="" class="w-full h-full rounded-full border-2 border-slate-100">
          </div>
        </a>
        <a href="#">
          <div>
            <span class=" relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900">
        <iconify-icon icon="heroicons-outline:bell"></iconify-icon>
        <span class="absolute right-[17px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
            justify-center rounded-full text-white z-[99]">
          2
        </span>
            </span>
            <span class=" block text-[11px] text-slate-600 dark:text-slate-300">
        Notifications
      </span>
          </div>
        </a>
      </div>
    </div>
@endsection