@extends('layout.app')
@section('content')
<x-sidebar> </x-sidebar>
<x-header> </x-header>

               

        <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
          <div class="page-content">
            <div class="transition-all duration-150 container-fluid" id="page_layout">
              <div id="content_layout">
                  <div class="card">
                    <header class=" card-header noborder">
                      <h4 class="card-title">Advanced Table Two
                      </h4>
                    </header>
                    <div class="card-body px-6 pb-6">
                      <div class="overflow-x-auto -mx-6 dashcode-data-table">
                        <span class=" col-span-8  hidden"></span>
                        <span class="  col-span-4 hidden"></span>
                        <div class="inline-block min-w-full align-middle">
                          <div class="overflow-hidden ">
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700 data-table">
                              <thead class=" bg-slate-200 dark:bg-slate-700">
                                <tr>

                                  <th scope="col" class=" table-th ">
                                    Id
                                  </th>

                                  <th scope="col" class=" table-th ">
                                    Order
                                  </th>

                                  <th scope="col" class=" table-th ">
                                    Customer
                                  </th>

                                  <th scope="col" class=" table-th ">
                                    Date
                                  </th>

                                  <th scope="col" class=" table-th ">
                                    Quantity
                                  </th>

                                  <th scope="col" class=" table-th ">
                                    Amount
                                  </th>

                                  <th scope="col" class=" table-th ">
                                    Status
                                  </th>

                                  <th scope="col" class=" table-th ">
                                    Action
                                  </th>

                                </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">

                                <tr>
                                  <td class="table-td">1</td>
                                  <td class="table-td ">#951</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="1" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">3/26/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      13
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $1779.53
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">2</td>
                                  <td class="table-td ">#238</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="2" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">2/6/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      13
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $2215.78
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">3</td>
                                  <td class="table-td ">#339</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="3" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">9/6/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      1
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $3183.60
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">4</td>
                                  <td class="table-td ">#365</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="4" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">11/7/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      13
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $2587.86
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">5</td>
                                  <td class="table-td ">#513</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="5" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">5/6/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      12
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $3840.73
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">6</td>
                                  <td class="table-td ">#534</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="6" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">2/14/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      12
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $4764.18
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">7</td>
                                  <td class="table-td ">#77</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="7" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">7/30/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      6
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $2875.05
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">8</td>
                                  <td class="table-td ">#238</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="8" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">6/30/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      9
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $2491.02
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">9</td>
                                  <td class="table-td ">#886</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="9" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">8/9/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      8
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $3006.95
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">10</td>
                                  <td class="table-td ">#3</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="10" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">8/4/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      12
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $2160.32
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">11</td>
                                  <td class="table-td ">#198</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="11" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">4/5/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      8
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $1272.66
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">12</td>
                                  <td class="table-td ">#829</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="12" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">8/9/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      2
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $4327.86
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">13</td>
                                  <td class="table-td ">#595</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="13" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">2/10/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      11
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $3671.81
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">14</td>
                                  <td class="table-td ">#374</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="14" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">2/10/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      2
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $3401.82
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">15</td>
                                  <td class="table-td ">#32</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="15" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">5/20/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      4
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $2387.49
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">16</td>
                                  <td class="table-td ">#89</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="16" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">5/3/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      15
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $4236.61
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">17</td>
                                  <td class="table-td ">#912</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="17" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">10/31/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      11
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $2975.66
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">18</td>
                                  <td class="table-td ">#621</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="18" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">1/13/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      5
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $4576.13
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">19</td>
                                  <td class="table-td ">#459</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="19" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">6/14/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      5
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $1276.56
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">20</td>
                                  <td class="table-td ">#108</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="20" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">10/8/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      4
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $1078.64
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">21</td>
                                  <td class="table-td ">#492</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="21" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">11/17/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      9
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $1678.19
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">22</td>
                                  <td class="table-td ">#42</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="22" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">4/4/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      9
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $1822.02
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">23</td>
                                  <td class="table-td ">#841</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="23" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">3/21/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      5
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $1578.39
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">24</td>
                                  <td class="table-td ">#561</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="24" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">6/18/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      12
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $2130.49
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">25</td>
                                  <td class="table-td ">#720</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="25" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">8/15/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      8
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $3721.11
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">26</td>
                                  <td class="table-td ">#309</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="26" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">4/28/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      8
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $4683.45
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">27</td>
                                  <td class="table-td ">#24</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="27" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">9/6/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      7
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $2863.71
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">28</td>
                                  <td class="table-td ">#518</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="28" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">9/11/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      4
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $3879.41
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">29</td>
                                  <td class="table-td ">#98</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="29" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">1/27/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      5
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $4660.81
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">30</td>
                                  <td class="table-td ">#940</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="30" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">9/16/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      6
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $4800.75
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">31</td>
                                  <td class="table-td ">#925</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="31" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">1/8/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      1
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $2299.05
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">32</td>
                                  <td class="table-td ">#122</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="32" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">11/18/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      1
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $3578.02
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">33</td>
                                  <td class="table-td ">#371</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="33" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">3/30/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      13
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $1996.06
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">34</td>
                                  <td class="table-td ">#296</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="34" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">11/13/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      5
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $2749.00
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">35</td>
                                  <td class="table-td ">#887</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="35" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">12/7/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      11
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $4353.01
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">36</td>
                                  <td class="table-td ">#30</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="36" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">9/9/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      15
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $3252.37
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">37</td>
                                  <td class="table-td ">#365</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="37" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">2/12/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      5
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $4044.10
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">38</td>
                                  <td class="table-td ">#649</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="38" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">3/6/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      5
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $3859.92
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">39</td>
                                  <td class="table-td ">#923</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="39" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">7/25/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      14
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $1652.47
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">40</td>
                                  <td class="table-td ">#423</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="40" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">3/2/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      8
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $2700.12
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">41</td>
                                  <td class="table-td ">#703</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="41" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">12/8/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      8
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $4508.13
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">42</td>
                                  <td class="table-td ">#792</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="42" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">11/22/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      11
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $4938.04
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">43</td>
                                  <td class="table-td ">#400</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="43" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">4/6/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      1
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $3471.32
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">44</td>
                                  <td class="table-td ">#718</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="44" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">2/4/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      4
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $4011.60
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">45</td>
                                  <td class="table-td ">#970</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="45" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">3/30/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      15
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $3723.64
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">46</td>
                                  <td class="table-td ">#786</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="46" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">11/20/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      2
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $2441.15
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">47</td>
                                  <td class="table-td ">#925</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="47" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">10/24/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      11
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $1196.76
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">48</td>
                                  <td class="table-td ">#929</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="48" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">6/30/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      10
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $3579.57
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500
                              bg-danger-500">
                                      cancled
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">49</td>
                                  <td class="table-td ">#377</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="49" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">11/16/2021</td>
                                  <td class="table-td ">
                                    <div>
                                      4
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $2657.84
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-warning-500
                              bg-warning-500">
                                      due
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="table-td">50</td>
                                  <td class="table-td ">#661</td>
                                  <td class="table-td">
                                    <span class="flex">
                          <span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none">
                            <img src="assets/images/all-img/customer_1.png" alt="50" class="object-cover w-full h-full rounded-full">
                          </span>
                                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span>
                                    </span>
                                  </td>
                                  <td class="table-td ">8/15/2022</td>
                                  <td class="table-td ">
                                    <div>
                                      6
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      $2905.94
                                    </div>
                                  </td>
                                  <td class="table-td ">

                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                              bg-success-500">
                                      paid
                                    </div>

                                  </td>
                                  <td class="table-td ">
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:eye"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                      </button>
                                      <button class="action-btn" type="button">
                                        <iconify-icon icon="heroicons:trash"></iconify-icon>
                                      </button>
                                    </div>
                                  </td>
                                </tr>

                              </tbody>
                            </table>
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
