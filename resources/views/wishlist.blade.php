<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class=" bg-contentbg">
    <section>
        <nav class="flex items-center justify-between p-5 bg-navbg text-white">
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

    <section class=" flex sticky top-0 z-10 bg-contentbg bg-opacity-90 backdrop-blur-sm">
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
        <div class="text-white font-bold text-3xl px-40 pt-7">
            My Wishlist
        </div>
        <div>
            <div class="px-40">
                <div class="bg-raisinblack p-6 rounded-xl flex flex-row">
                    <div class="">
                        <img width="90rem" class=" pb-2 rounded-md" src="\images\persona3.jpg" alt="">
                        <svg width="1rem" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>windows [#ffffff]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7439.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M13.1458647,7289.43426 C13.1508772,7291.43316 13.1568922,7294.82929 13.1619048,7297.46884 C16.7759398,7297.95757 20.3899749,7298.4613 23.997995,7299 C23.997995,7295.84873 24.002005,7292.71146 23.997995,7289.71311 C20.3809524,7289.71311 16.7649123,7289.43426 13.1458647,7289.43426 M4,7289.43526 L4,7296.22153 C6.72581454,7296.58933 9.45162907,7296.94113 12.1724311,7297.34291 C12.1774436,7294.71736 12.1704261,7292.0908 12.1704261,7289.46524 C9.44661654,7289.47024 6.72380952,7289.42627 4,7289.43526 M4,7281.84344 L4,7288.61071 C6.72581454,7288.61771 9.45162907,7288.57673 12.1774436,7288.57973 C12.1754386,7285.96017 12.1754386,7283.34361 12.1724311,7280.72405 C9.44461153,7281.06486 6.71679198,7281.42567 4,7281.84344 M24,7288.47179 C20.3879699,7288.48578 16.7759398,7288.54075 13.1619048,7288.55175 C13.1598997,7285.88921 13.1598997,7283.22967 13.1619048,7280.56914 C16.7689223,7280.01844 20.3839599,7279.50072 23.997995,7279 C24,7282.15826 23.997995,7285.31353 24,7288.47179" id="windows-[#ffffff]"> </path> </g> </g> </g> </g></svg>
                    </div>
                    <div class=" bg-zinc-500 w-24 h-7 rounded-lg px-2">
                        <div class="text-white">
                            Base Game
                        </div>
                        <div class="text-white font-bold text-2xl">
                            Persona
                        </div>
                        <div class="text-white font-bold text-2xl">
                            Free
                        </div>
                    </div>
                </div>
            </div>
            <div class="">

            </div>
        </div>
    </section>
</body>
</html>
