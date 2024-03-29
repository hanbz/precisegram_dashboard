@extends('app')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 mb-2">
        <div class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64">
            <div class="relative overflow-x-auto overflow-y-auto max-h-64 shadow-md sm:rounded-lg">
                <div class="inline-flex p-2">
                    <div class="text-lg font-semibold text-gray-900 bg-white">"昊霖診所"關鍵字聲量總數：11</div>
                    <button id="dropdownDefaultButton1" data-dropdown-toggle="dropdown-keyword1"
                            class="ml-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-lg text-sm px-3 py-1 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">Facebook
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown-keyword1"
                         class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton1">
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Instagram</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Youtube</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">論壇</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">媒體</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 h-32">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            貼文
                        </th>
                        <th scope="col" class="px-6 py-3">
                            發文者
                        </th>
                        <th scope="col" class="px-6 py-3">
                            聲量
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            🧨🍊開工大吉 新春一路發..
                        </th>
                        <td class="px-6 py-4">
                            IZO 健康運動館
                        </td>
                        <td class="px-6 py-4">
                            12
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            🧨開工上班好厭世…. IZO給..
                        </th>
                        <td class="px-6 py-4">
                            IZO 健康運動館
                        </td>
                        <td class="px-6 py-4">
                            5
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            新年的腳步將近..
                        </th>
                        <td class="px-6 py-4">
                            IZO 健康運動館..
                        </td>
                        <td class="px-6 py-4">
                            4
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            你們知道有種手術..
                        </th>
                        <td class="px-6 py-4">
                            梨寶..
                        </td>
                        <td class="px-6 py-4">
                            242
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            台灣研究發現，讓兒..
                        </th>
                        <td class="px-6 py-4">
                            一分..
                        </td>
                        <td class="px-6 py-4">
                            228
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64">
            <div class="relative overflow-x-auto overflow-y-auto max-h-64 shadow-md sm:rounded-lg">
                <div class="inline-flex p-2">
                    <div class="text-lg font-semibold text-gray-900 bg-white">"聯安預防醫學"關鍵字聲量總數：178</div>
                    <button id="dropdownDefaultButton2" data-dropdown-toggle="dropdown-keyword2"
                            class="ml-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-lg text-sm px-3 py-1 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">Facebook
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown-keyword2"
                         class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton2">
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Instagram</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Youtube</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">論壇</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">媒體</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 h-32">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            貼文
                        </th>
                        <th scope="col" class="px-6 py-3">
                            發文者
                        </th>
                        <th scope="col" class="px-6 py-3">
                            聲量
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            骨盆前傾者不但..
                        </th>
                        <td class="px-6 py-4">
                            早安健康..
                        </td>
                        <td class="px-6 py-4">
                            398
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            🎉🎉🎉🎉🎉🎉 [卡卡園地..
                        </th>
                        <td class="px-6 py-4">
                            中臺灣卡訊..
                        </td>
                        <td class="px-6 py-4">
                            245
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #什麼這也20幾年..
                        </th>
                        <td class="px-6 py-4">
                            爆米..
                        </td>
                        <td class="px-6 py-4">
                            321
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Life爵士樂團..
                        </th>
                        <td class="px-6 py-4">
                            Life爵士樂團..
                        </td>
                        <td class="px-6 py-4">
                            95
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            INES 王以甯...
                        </th>
                        <td class="px-6 py-4">
                            IN..
                        </td>
                        <td class="px-6 py-4">
                            238
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64">
            <div class="relative overflow-x-auto overflow-y-auto max-h-64 shadow-md sm:rounded-lg">
                <div class="inline-flex p-2">
                    <div class="text-lg font-semibold text-gray-900 bg-white">"高禾"關鍵字聲量總數：54</div>
                    <button id="dropdownDefaultButton3" data-dropdown-toggle="dropdown-keyword3"
                            class="ml-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-lg text-sm px-3 py-1 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">Facebook
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown-keyword3"
                         class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton3">
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Instagram</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Youtube</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">論壇</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">媒體</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 h-32">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            貼文
                        </th>
                        <th scope="col" class="px-6 py-3">
                            發文者
                        </th>
                        <th scope="col" class="px-6 py-3">
                            聲量
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            和大家聊得開心..
                        </th>
                        <td class="px-6 py-4">
                            陳建大明..
                        </td>
                        <td class="px-6 py-4">
                            23
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            感謝🦷 高禾醫院牙科部..
                        </th>
                        <td class="px-6 py-4">
                            BenQ AB..
                        </td>
                        <td class="px-6 py-4">
                            23
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            明德醫院台北旗..
                        </th>
                        <td class="px-6 py-4">
                            澄清..
                        </td>
                        <td class="px-6 py-4">
                            22
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            受邀到6城市心靈..
                        </th>
                        <td class="px-6 py-4">
                            陳建大明..
                        </td>
                        <td class="px-6 py-4">
                            20
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            40歲以後，老..
                        </th>
                        <td class="px-6 py-4">
                            照護..
                        </td>
                        <td class="px-6 py-4">
                            14
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{--        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div>--}}
    <div class="grid grid-cols-2 gap-2 mb-1">
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72">
            <div class="mb-1 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                    data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                                data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">企業品牌正向文章
                        </button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">企業品牌負向文章
                        </button>
                    </li>
                    <li role="presentation" class="ml-auto items-center justify-center flex pr-2">
                        <button id="dropdownDefaultButton4" data-dropdown-toggle="dropdown-keyword4"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-lg text-sm px-3 py-1 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">Facebook
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                    </li>
                </ul>
                <!-- Dropdown menu -->
                <div id="dropdown-keyword4"
                     class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownDefaultButton4">
                        <li>
                            <a href="#"
                               class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Instagram</a>
                        </li>
                        <li>
                            <a href="#"
                               class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Youtube</a>
                        </li>
                        <li>
                            <a href="#"
                               class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">論壇</a>
                        </li>
                        <li>
                            <a href="#"
                               class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">媒體</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-1 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                     aria-labelledby="profile-tab">
                    <div class="relative overflow-x-auto overflow-y-auto max-h-[220px] shadow-md sm:rounded-lg">
                        <table
                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 h-32">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    文章標題
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    熱度
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    發文者
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    劉盈盈 is at 新北市愛笑瑜伽協會...
                                </th>
                                <td class="px-6 py-4">
                                    385
                                </td>
                                <td class="px-6 py-4">
                                    劉盈盈
                                </td>
                            </tr>
{{--                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">--}}
{{--                                <th scope="row"--}}
{{--                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">--}}
{{--                                    VivoX10..--}}
{{--                                </th>--}}
{{--                                <td class="px-6 py-4">--}}
{{--                                    1394--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4">--}}
{{--                                    傑昇..--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">--}}
{{--                                <th scope="row"--}}
{{--                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">--}}
{{--                                    【展望新年🌟..--}}
{{--                                </th>--}}
{{--                                <td class="px-6 py-4">--}}
{{--                                    757--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4">--}}
{{--                                    ZE..--}}
{{--                                </td>--}}
{{--                            </tr>--}}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="hidden p-1 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                     aria-labelledby="dashboard-tab">
                    <div class="relative overflow-x-auto overflow-y-auto max-h-64 shadow-md sm:rounded-lg">
                        <table
                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 h-32">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    文章標題
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    熱度
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    發文者
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                </th>
                                <td class="px-6 py-4">
                                    (無搜尋結果)
                                </td>
                                <td class="px-6 py-4">

                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{--                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"--}}
                {{--                         aria-labelledby="settings-tab">--}}
                {{--                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong--}}
                {{--                                class="font-medium text-gray-800 dark:text-white">Settings tab's associated--}}
                {{--                                content</strong>. Clicking another tab will toggle the visibility of this one for the--}}
                {{--                            next. The tab JavaScript swaps classes to control the content visibility and styling.</p>--}}
                {{--                    </div>--}}
                {{--                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"--}}
                {{--                         aria-labelledby="contacts-tab">--}}
                {{--                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong--}}
                {{--                                class="font-medium text-gray-800 dark:text-white">Contacts tab's associated--}}
                {{--                                content</strong>. Clicking another tab will toggle the visibility of this one for the--}}
                {{--                            next. The tab JavaScript swaps classes to control the content visibility and styling.</p>--}}
                {{--                    </div>--}}
            </div>
        </div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72">
            <div class="w-full max-h-48 bg-white rounded-lg dark:bg-gray-800 p-4 md:p-6">
                <div class="flex justify-between">
                    <div>
                        <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">490</h5>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">G-Clinic 企業品牌總聲量</p>
                    </div>
                    <div
                        class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
                        12%
                        <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 10 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                        </svg>
                    </div>
                </div>
                <div id="area-chart"></div>
                <div
                    class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                    <div class="flex justify-between items-center pt-5">
                        <!-- Button -->
                        <button
                            id="dropdownDefaultButton"
                            data-dropdown-toggle="lastDaysdropdown"
                            data-dropdown-placement="bottom"
                            class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                            type="button">
                            Last 90 days
                            {{--                            <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"--}}
                            {{--                                 fill="none" viewBox="0 0 10 6">--}}
                            {{--                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
                            {{--                                      stroke-width="2" d="m1 1 4 4 4-4"/>--}}
                            {{--                            </svg>--}}
                        </button>
                        <!-- Dropdown menu -->
{{--                        <div id="lastDaysdropdown"--}}
{{--                             class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">--}}
{{--                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"--}}
{{--                                aria-labelledby="dropdownDefaultButton">--}}

{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 mb-2">
        <div class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64">
            <div class="relative overflow-x-auto overflow-y-auto max-h-64 shadow-md sm:rounded-lg">
                <div class="inline-flex p-2">
                    <div class="text-lg font-semibold text-gray-900 bg-white">全台診所熱度</div>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 h-32">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            診所名稱
                        </th>
                        <th scope="col" class="px-6 py-3">
                            總聲量
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            聯安預防醫學
                        </th>
                        <td class="px-6 py-4">
                            179
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            高禾
                        </th>
                        <td class="px-6 py-4">
                            54
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            昊霖診所
                        </th>
                        <td class="px-6 py-4">
                            11
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            華康醫療集團
                        </th>
                        <td class="px-6 py-4">
                            522
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            環保健康醫院
                        </th>
                        <td class="px-6 py-4">
                            487
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64">
            <div class="relative overflow-x-auto overflow-y-auto max-h-64 shadow-md sm:rounded-lg">
                <div class="inline-flex p-2">
                    <div class="text-lg font-semibold text-gray-900 bg-white">競品熱度</div>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 h-32">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            產品名稱
                        </th>
                        <th scope="col" class="px-6 py-3">
                            總聲量
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            銀髮保健膠囊
                        </th>
                        <td class="px-6 py-4">
                            494
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            老年人專用骨骼保健奶粉
                        </th>
                        <td class="px-6 py-4">
                            376
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            銀髮專用智慧手錶
                        </th>
                        <td class="px-6 py-4">
                            357
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            老年人護理床墊
                        </th>
                        <td class="px-6 py-4">
                            145
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            銀髮專用記憶力營養補充品
                        </th>
                        <td class="px-6 py-4">
                            115
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64">
            <div class="relative overflow-x-auto overflow-y-auto max-h-64 shadow-md sm:rounded-lg">
                <div class="inline-flex p-2">
                    <div class="text-lg font-semibold text-gray-900 bg-white">銀髮族最關心的關鍵字</div>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 h-32">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            症狀
                        </th>
                        <th scope="col" class="px-6 py-3">
                            負向文章數
                        </th>
                        <th scope="col" class="px-6 py-3">
                            總文章數
                        </th>
                        <th scope="col" class="px-6 py-3">
                            負向文章佔比
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            骨質疏鬆症
                        </th>
                        <td class="px-6 py-4">
                            13
                        </td>
                        <td class="px-6 py-4">
                            958
                        </td>
                        <td class="px-6 py-4">
                            0.014
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            心血管疾病
                        </th>
                        <td class="px-6 py-4">
                            8
                        </td>
                        <td class="px-6 py-4">
                            513
                        </td>
                        <td class="px-6 py-4">
                            0.016
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            關節炎
                        </th>
                        <td class="px-6 py-4">
                            4
                        </td>
                        <td class="px-6 py-4">
                            357
                        </td>
                        <td class="px-6 py-4">
                            0.011
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            老年癡呆症
                        </th>
                        <td class="px-6 py-4">
                            2
                        </td>
                        <td class="px-6 py-4">
                            156
                        </td>
                        <td class="px-6 py-4">
                            0.013
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{--        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div>--}}
    {{--        <div class="grid grid-cols-2 gap-2">--}}
    {{--            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>--}}
    {{--            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>--}}
    {{--            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>--}}
    {{--            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>--}}
    {{--        </div>--}}
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>

        const options = {
            chart: {
                height: "100%",
                maxWidth: "100%",
                type: "area",
                fontFamily: "Inter, sans-serif",
                dropShadow: {
                    enabled: false,
                },
                toolbar: {
                    show: false,
                },
            },
            tooltip: {
                enabled: true,
                x: {
                    show: false,
                },
            },
            fill: {
                type: "gradient",
                gradient: {
                    opacityFrom: 0.55,
                    opacityTo: 0,
                    shade: "#1C64F2",
                    gradientToColors: ["#1C64F2"],
                },
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                width: 2,
            },
            grid: {
                show: false,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: 0
                },
            },
            series: [
                {
                    name: "New users",
                    data: [6500, 6418, 6456, 6526, 6356, 6456],
                    color: "#1A56DB",
                },
            ],
            xaxis: {
                categories: ['01 February', '02 February', '03 February', '04 February', '05 February', '06 February', '07 February'],
                labels: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
            },
            yaxis: {
                show: false,
            },
        }

        if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("area-chart"), options);
            chart.render();
        }
    </script>
@endsection
