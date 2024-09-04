<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class=" bg-contentbg">

<section>
        <nav class="flex items-center justify-between p-5 bg-navbg text-white max-w-screen-2xl">
            <div class="flex items-center space-x-4">
                <a href="#" class="text-2xl font-bold flex items-center space-x-1">
                    <span class="text-green-500">⚡</span>
                    <span>GStores</span>
                </a>
                <a href="#" class="text-lg"></a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#">
                <svg class=" w-6" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="#ffff" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><circle cx="32" cy="32" r="24.86"></circle><path d="M32,6.84A34.09,34.09,0,0,1,43.66,32.31c0,16.19-7.28,21-11.66,24.24"></path><path d="M32,6.84A34.09,34.09,0,0,0,20.31,32.31c0,16.19,7.28,21,11.66,24.24"></path><line x1="10.37" y1="19.75" x2="53.75" y2="19.75"></line><line x1="32" y1="6.84" x2="32" y2="56.55"></line><line x1="11.05" y1="45.33" x2="52.98" y2="45.33"></line><line x1="7.14" y1="32.31" x2="56.86" y2="31.69"></line></g></svg>
                </a>
                <a href="#" class=" px-4 py-1 rounded-lg bg-zinc-700 hover:bg-zinc-500">Sign in</a>
            </div>
        </nav>
    </section>

    <section class=" flex sticky top-0 z-20 bg-contentbg bg-opacity-90 backdrop-blur-sm">
        <div class="pt-5 pb-5 px-36 flex gap-36">
            <input type="text" placeholder="Search Store" class="bg-raisinblack rounded-full ml-3 p-2 pl-10">
            <svg class="absolute m-2 ml-5" width="20px" height="20px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10.77 18.3C9.2807 18.3 7.82485 17.8584 6.58655 17.031C5.34825 16.2036 4.38311 15.0275 3.81318 13.6516C3.24325 12.2757 3.09413 10.7616 3.38468 9.30096C3.67523 7.84029 4.39239 6.49857 5.44548 5.44548C6.49857 4.39239 7.84029 3.67523 9.30096 3.38468C10.7616 3.09413 12.2757 3.24325 13.6516 3.81318C15.0275 4.38311 16.2036 5.34825 17.031 6.58655C17.8584 7.82485 18.3 9.2807 18.3 10.77C18.3 11.7588 18.1052 12.738 17.7268 13.6516C17.3484 14.5652 16.7937 15.3953 16.0945 16.0945C15.3953 16.7937 14.5652 17.3484 13.6516 17.7268C12.738 18.1052 11.7588 18.3 10.77 18.3ZM10.77 4.74999C9.58331 4.74999 8.42327 5.10189 7.43657 5.76118C6.44988 6.42046 5.68084 7.35754 5.22672 8.45389C4.77259 9.55025 4.65377 10.7566 4.88528 11.9205C5.11679 13.0844 5.68824 14.1535 6.52735 14.9926C7.36647 15.8317 8.43556 16.4032 9.59945 16.6347C10.7633 16.8662 11.9697 16.7474 13.0661 16.2933C14.1624 15.8391 15.0995 15.0701 15.7588 14.0834C16.4181 13.0967 16.77 11.9367 16.77 10.75C16.77 9.15869 16.1379 7.63257 15.0126 6.50735C13.8874 5.38213 12.3613 4.74999 10.77 4.74999Z" fill="#8c8c8c"></path> <path d="M20 20.75C19.9015 20.7504 19.8038 20.7312 19.7128 20.6934C19.6218 20.6557 19.5392 20.6001 19.47 20.53L15.34 16.4C15.2075 16.2578 15.1354 16.0697 15.1388 15.8754C15.1422 15.6811 15.221 15.4958 15.3584 15.3583C15.4958 15.2209 15.6812 15.1422 15.8755 15.1388C16.0698 15.1354 16.2578 15.2075 16.4 15.34L20.53 19.47C20.6704 19.6106 20.7493 19.8012 20.7493 20C20.7493 20.1987 20.6704 20.3893 20.53 20.53C20.4608 20.6001 20.3782 20.6557 20.2872 20.6934C20.1962 20.7312 20.0985 20.7504 20 20.75Z" fill="#8c8c8c"></path> </g></svg>
            <div class="flex flex-row p-2">
                <div class=" text-gray-400 px-3">
                    <a href="#">Discover</a>
                </div>
                <div class="text-gray-400 px-3">
                    <a href="#">Browse</a>
                </div>
                <div class="text-gray-400 px-3">
                    <a href="#">News</a></a>
                </div>
            </div>
            <div class="flex flex-row p-2">
                <div class="text-gray-400 px-3">
                    <a href="#">Whislist</a>
                </div>
                <div class="text-gray-400 px-3">
                    <a href="#">Cart</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="relative flex flex-col overflow-hidden rounded-3xl w-7/12 px-8 pt-40 mx-40 mt-11">
            <img src="\images\Persona_4.png" alt="Persona 4" class="absolute inset-0 h-full w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-tr from-gray-900 via-gray-900/40"></div>
            <div class="z-10 py-3">
                <h3 class="mt-3 text-3xl font-bold text-white">Persona 4</h3>
                <div class="gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">City of love</div>
                <div class="mt-3 text-sm font-bold text-white">IDR 100.000</div>
                <div class="py-5">
                    <div class="bg-white rounded-xl text-center hover:bg-gray-200 p-4 w-40">
                        <a href="">
                            <div class="text-black font-medium text-base">
                                Purchase Now
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-between pb-5 pt-14 px-32">
            <div class="text-white font-bold text-2xl">Top New Releases</div>
        </div>
        <div class="px-32">
            <div class="flex flex-row overflow-auto scrollbar-none w-[60rem]">
                <div class="pr-5">
                    <img src="\images\persona3.jpg" alt="" class="flex rounded-xl max-w-screen-md object-cover w-44 h-60">
                    <div class=" text-gray-400 pt-3 text-sm font-medium">Base Game</div>
                    <div class="text-white text-xl font-bold">Persona 3</div>
                    <div class=" text-gray-300 pt-2 text-sm font-medium">IDR 799.000</div>
                </div>
                <div class="pr-5">
                    <img src="\images\persona3.jpg" alt="" class="rounded-xl max-w-screen-md object-cover w-44 h-60">
                    <div class=" text-gray-400 pt-3 text-sm font-medium">Base Game</div>
                    <div class="text-white text-xl font-bold">Persona 3</div>
                    <div class=" text-gray-300 pt-2 text-sm font-medium">IDR 799.000</div>
                </div>
                <div class="pr-5">
                    <img src="\images\persona3.jpg" alt="" class="rounded-xl max-w-screen-md object-cover w-44 h-60">
                    <div class=" text-gray-400 pt-3 text-sm font-medium">Base Game</div>
                    <div class="text-white text-xl font-bold">Persona 3</div>
                    <div class=" text-gray-300 pt-2 text-sm font-medium">IDR 799.000</div>
                </div>
                <div class="pr-5">
                    <img src="\images\persona3.jpg" alt="" class="rounded-xl max-w-screen-md object-cover w-44 h-60">
                    <div class=" text-gray-400 pt-3 text-sm font-medium">Base Game</div>
                    <div class="text-white text-xl font-bold">Persona 3</div>
                    <div class=" text-gray-300 pt-2 text-sm font-medium">IDR 799.000</div>
                </div>
                <div class="pr-5">
                    <img src="\images\persona3.jpg" alt="" class="rounded-xl max-w-screen-md object-cover w-44 h-60">
                    <div class=" text-gray-400 pt-3 text-sm font-medium">Base Game</div>
                    <div class="text-white text-xl font-bold">Persona 3</div>
                    <div class=" text-gray-300 pt-2 text-sm font-medium">IDR 799.000</div>
                </div>
                <div class="pr-5">
                    <img src="\images\persona3.jpg" alt="" class="rounded-xl max-w-screen-md object-cover w-44 h-60">
                    <div class=" text-gray-400 pt-3 text-sm font-medium">Base Game</div>
                    <div class="text-white text-xl font-bold">Persona 3</div>
                    <div class=" text-gray-300 pt-2 text-sm font-medium">IDR 799.000</div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="flex items-center justify-between pb-5 pt-28 px-32">
            <div class="text-white font-bold text-2xl">Featured Discounts</div>
        </div>
        <div class=" px-32 flex flex-row">
            <div class="pr-5">
                <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-44 h-60">
                <div class=" text-gray-400 pt-3 text-sm font-medium">Base Game</div>
                <div class="text-white text-xl font-bold">Persona 3</div>
                <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                    <div class="pt-2">
                        <div class=" text-black bg-purple text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div>
                        <div class="line-through">IDR 799.000</div>
                        <div>IDR 50.000</div>
                    </div>
                </div>
            </div>
            <div class="pr-5">
                <img src="\images\persona5r.jpg" alt="" class="rounded-xl max-w-screen-md object-cover w-44 h-60">
                <div class=" text-gray-400 pt-3 text-sm font-medium">Base Game</div>
                <div class="text-white text-xl font-bold">Persona 5 Royal</div>
                <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                    <div class="pt-2">
                        <div class=" text-black bg-purple text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div>
                        <div class="line-through">IDR 699.000</div>
                        <div>IDR 50.000</div>
                    </div>
                </div>
            </div>
            <div class="pr-5">
                <img src="\images\persona4g.jpg" alt="" class="rounded-xl max-w-screen-md object-cover w-44 h-60">
                <div class=" text-gray-400 pt-3 text-sm font-medium">Base Game</div>
                <div class="text-white text-xl font-bold">Persona 4 Golden</div>
                <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                    <div class="pt-2">
                        <div class=" text-black bg-purple text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div>
                        <div class="line-through">IDR 499.000</div>
                        <div>IDR 50.000</div>
                    </div>
                </div>
            </div>
            <div class="pr-5">
                <img src="\images\persona3.jpg" alt="" class="rounded-xl max-w-screen-md object-cover w-44 h-60">
                <div class=" text-gray-400 pt-3 text-sm font-medium">Base Game</div>
                <div class="text-white text-xl font-bold">Persona 3</div>
                <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                    <div class="pt-2">
                        <div class=" text-black bg-purple text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div>
                        <div class="line-through">IDR 799.000</div>
                        <div>IDR 50.000</div>
                    </div>
                </div>
            </div>
            <div class="pr-5">
                <img src="\images\persona3.jpg" alt="" class="rounded-xl max-w-screen-md object-cover w-44 h-60">
                <div class=" text-gray-400 pt-3 text-sm font-medium">Base Game</div>
                <div class="text-white text-xl font-bold">Persona 3</div>
                <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                    <div class="pt-2">
                        <div class=" text-black bg-purple text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div>
                        <div class="line-through">IDR 799.000</div>
                        <div>IDR 50.000</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="flex flex-row my-20 gap-10">
            <div class="pl-40 flex flex-col border-r-2 border-zinc-600">
                <div class=" pb-5">
                    <div class="text-white font-bold text-xl">Top Sellers</div>
                </div>
                <div class="pr-5 flex">
                    <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-16 h-20">
                    <div>
                        <div class="text-white text-xl font-bold pl-5">Persona 3</div>
                        <div class=" text-gray-300 text-sm pl-2 pt-7 font-medium text-center rounded-xl">IDR 799.000</div>
                    </div>
                </div>
                <div class="pr-5 pt-7 flex">
                    <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-16 h-20">
                    <div>
                        <div class="text-white text-xl font-bold pl-5">Persona 3</div>
                        <div class=" text-black bg-purple ml-5 mt-6 text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div class="pt-8">
                        <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                            <div>
                                <div class="line-through">IDR 799.000</div>
                                <div>IDR 50.000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-5 pt-7 flex">
                    <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-16 h-20">
                    <div>
                        <div class="text-white text-xl font-bold pl-5">Persona 3</div>
                        <div class=" text-black bg-purple ml-5 mt-6 text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div class="pt-8">
                        <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                            <div>
                                <div class="line-through">IDR 799.000</div>
                                <div>IDR 50.000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-5 pt-7 flex">
                    <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-16 h-20">
                    <div>
                        <div class="text-white text-xl font-bold pl-5">Persona 3</div>
                        <div class=" text-black bg-purple ml-5 mt-6 text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div class="pt-8">
                        <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                            <div>
                                <div class="line-through">IDR 799.000</div>
                                <div>IDR 50.000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-5 pt-7 flex">
                    <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-16 h-20">
                    <div>
                        <div class="text-white text-xl font-bold pl-5">Persona 3</div>
                        <div class=" text-black bg-purple ml-5 mt-6 text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div class="pt-8">
                        <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                            <div>
                                <div class="line-through">IDR 799.000</div>
                                <div>IDR 50.000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col border-r-2 border-zinc-600">
                <div class="pb-5">
                    <div class="text-white font-bold text-xl">Top Sellers</div>
                </div>
                <div class="pr-5 flex">
                    <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-16 h-20">
                    <div>
                        <div class="text-white text-xl font-bold pl-5">Persona 3</div>
                        <div class=" text-black bg-purple ml-5 mt-6 text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div class="pt-8">
                        <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                            <div>
                                <div class="line-through">IDR 799.000</div>
                                <div>IDR 50.000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-5 pt-7 flex">
                    <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-16 h-20">
                    <div>
                        <div class="text-white text-xl font-bold pl-5">Persona 3</div>
                        <div class=" text-black bg-purple ml-5 mt-6 text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div class="pt-8">
                        <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                            <div>
                                <div class="line-through">IDR 799.000</div>
                                <div>IDR 50.000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-5 pt-7 flex">
                    <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-16 h-20">
                    <div>
                        <div class="text-white text-xl font-bold pl-5">Persona 3</div>
                        <div class=" text-black bg-purple ml-5 mt-6 text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div class="pt-8">
                        <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                            <div>
                                <div class="line-through">IDR 799.000</div>
                                <div>IDR 50.000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-5 pt-7 flex">
                    <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-16 h-20">
                    <div>
                        <div class="text-white text-xl font-bold pl-5">Persona 3</div>
                        <div class=" text-black bg-purple ml-5 mt-6 text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div class="pt-8">
                        <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                            <div>
                                <div class="line-through">IDR 799.000</div>
                                <div>IDR 50.000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-5 pt-7 flex">
                    <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-16 h-20">
                    <div>
                        <div class="text-white text-xl font-bold pl-5">Persona 3</div>
                        <div class=" text-black bg-purple ml-5 mt-6 text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div class="pt-8">
                        <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                            <div>
                                <div class="line-through">IDR 799.000</div>
                                <div>IDR 50.000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" flex flex-col">
                <div class="pb-5">
                    <div class="text-white font-bold text-xl ">Top Sellers</div>
                </div>
                <div class="pr-5 flex">
                    <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-16 h-20">
                    <div>
                        <div class="text-white text-xl font-bold pl-5">Persona 3</div>
                        <div class=" text-black bg-purple ml-5 mt-6 text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div class="pt-8">
                        <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                            <div>
                                <div class="line-through">IDR 799.000</div>
                                <div>IDR 50.000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-5 pt-7 flex">
                    <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-16 h-20">
                    <div>
                        <div class="text-white text-xl font-bold pl-5">Persona 3</div>
                        <div class=" text-black bg-purple ml-5 mt-6 text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div class="pt-8">
                        <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                            <div>
                                <div class="line-through">IDR 799.000</div>
                                <div>IDR 50.000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-5 pt-7 flex">
                    <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-16 h-20">
                    <div>
                        <div class="text-white text-xl font-bold pl-5">Persona 3</div>
                        <div class=" text-black bg-purple ml-5 mt-6 text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div class="pt-8">
                        <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                            <div>
                                <div class="line-through">IDR 799.000</div>
                                <div>IDR 50.000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-5 pt-7 flex">
                    <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-16 h-20">
                    <div>
                        <div class="text-white text-xl font-bold pl-5">Persona 3</div>
                        <div class=" text-black bg-purple ml-5 mt-6 text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div class="pt-8">
                        <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                            <div>
                                <div class="line-through">IDR 799.000</div>
                                <div>IDR 50.000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-5 pt-7 flex">
                    <img src="\images\persona3.jpg" alt="" class=" rounded-xl object-cover max-w-screen-md w-16 h-20">
                    <div>
                        <div class="text-white text-xl font-bold pl-5">Persona 3</div>
                        <div class=" text-black bg-purple ml-5 mt-6 text-center rounded-xl w-10 bg-right h-5">-75%</div>
                    </div>
                    <div class="pt-8">
                        <div class=" text-gray-300 pt-2 text-sm font-medium flex justify-between">
                            <div>
                                <div class="line-through">IDR 799.000</div>
                                <div>IDR 50.000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="flex flex-col bg-footbg px-10 pt-5">
            <div class="px-5 flex flex-row">
                <div class="px-1">
                    <svg fill="#cccccc" width="30px" height="64px" viewBox="0 0 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#cccccc" transform="matrix(1, 0, 0, 1, 0, 0)" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z"></path> </g></svg>
                </div>
                <div class="px-1">
                    <svg fill="#cccccc" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="64px" viewBox="0 0 512 512" xml:space="preserve" stroke="#cccccc"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="7935ec95c421cee6d86eb22ecd12f847"> <path style="display: inline;" d="M459.186,151.787c0.203,4.501,0.305,9.023,0.305,13.565 c0,138.542-105.461,298.285-298.274,298.285c-59.209,0-114.322-17.357-160.716-47.104c8.212,0.973,16.546,1.47,25.012,1.47 c49.121,0,94.318-16.759,130.209-44.884c-45.887-0.841-84.596-31.154-97.938-72.804c6.408,1.227,12.968,1.886,19.73,1.886 c9.55,0,18.816-1.287,27.617-3.68c-47.955-9.633-84.1-52.001-84.1-102.795c0-0.446,0-0.882,0.011-1.318 c14.133,7.847,30.294,12.562,47.488,13.109c-28.134-18.796-46.637-50.885-46.637-87.262c0-19.212,5.16-37.218,14.193-52.7 c51.707,63.426,128.941,105.156,216.072,109.536c-1.784-7.675-2.718-15.674-2.718-23.896c0-57.891,46.941-104.832,104.832-104.832 c30.173,0,57.404,12.734,76.525,33.102c23.887-4.694,46.313-13.423,66.569-25.438c-7.827,24.485-24.434,45.025-46.089,58.002 c21.209-2.535,41.426-8.171,60.222-16.505C497.448,118.542,479.666,137.004,459.186,151.787z"> </path> </g> </g></svg>
                </div>
                <div class="px-1">
                    <svg fill="#cccccc" width="30px" height="64px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#cccccc"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>youtube</title> <path d="M12.932 20.459v-8.917l7.839 4.459zM30.368 8.735c-0.354-1.301-1.354-2.307-2.625-2.663l-0.027-0.006c-3.193-0.406-6.886-0.638-10.634-0.638-0.381 0-0.761 0.002-1.14 0.007l0.058-0.001c-0.322-0.004-0.701-0.007-1.082-0.007-3.748 0-7.443 0.232-11.070 0.681l0.434-0.044c-1.297 0.363-2.297 1.368-2.644 2.643l-0.006 0.026c-0.4 2.109-0.628 4.536-0.628 7.016 0 0.088 0 0.176 0.001 0.263l-0-0.014c-0 0.074-0.001 0.162-0.001 0.25 0 2.48 0.229 4.906 0.666 7.259l-0.038-0.244c0.354 1.301 1.354 2.307 2.625 2.663l0.027 0.006c3.193 0.406 6.886 0.638 10.634 0.638 0.38 0 0.76-0.002 1.14-0.007l-0.058 0.001c0.322 0.004 0.702 0.007 1.082 0.007 3.749 0 7.443-0.232 11.070-0.681l-0.434 0.044c1.298-0.362 2.298-1.368 2.646-2.643l0.006-0.026c0.399-2.109 0.627-4.536 0.627-7.015 0-0.088-0-0.176-0.001-0.263l0 0.013c0-0.074 0.001-0.162 0.001-0.25 0-2.48-0.229-4.906-0.666-7.259l0.038 0.244z"></path> </g></svg>
                </div>
            </div>
            <div class="px-7 pt-3 flex flex-col">
                <div class="text-gray-500 flex flex-row">
                    Resources
                </div>
                <div class="flex flex-row">
                    <div class="flex flex-col pr-10">
                        <a class="text-white hover:text-cyan-500" href="#">Support-A-Creator</a>
                        <a class="text-white hover:text-cyan-500" href="#">Distribute on GStores</a>
                        <a class="text-white hover:text-cyan-500" href="#">Careers</a>
                        <a class="text-white hover:text-cyan-500" href="#">Company</a>
                    </div>
                    <div class="flex flex-col px-10">
                        <a class="text-white hover:text-cyan-500" href="#">Fan Art Policy</a>
                        <a class="text-white hover:text-cyan-500" href="#">UX Research</a>
                        <a class="text-white hover:text-cyan-500" href="#">Store EULA</a>
                    </div>
                    <div class="flex flex-col px-10">
                        <a class="text-white hover:text-cyan-500" href="#">Online Services</a>
                        <a class="text-white hover:text-cyan-500" href="#">Community Rules</a>
                        <a class="text-white hover:text-cyan-500" href="#">GStores Newsroom</a>
                    </div>
                </div>
            </div>
            <div class="px-7 pt-8 flex flex-col">
                <div class="text-gray-500 flex flex-row">
                    Made By GStores
                </div>
                <div class="flex flex-row">
                    <div class="flex flex-col pr-10">
                        <a class="text-white hover:text-cyan-500" href="#">Atlus</a>
                        <a class="text-white hover:text-cyan-500" href="#">Somasi Massal</a>
                        <a class="text-white hover:text-cyan-500" href="#">Hide and Seek With Lawyer</a>
                    </div>
                    <div class="flex flex-col px-10">
                        <a class="text-white hover:text-cyan-500" href="#">Kang Bakso Part 2</a>
                        <a class="text-white hover:text-cyan-500" href="#">Government Tycoon</a>
                        <a class="text-white hover:text-cyan-500" href="#">Banteng Simulator</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
