<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    @vite('resources/css/app.css')
</head>
<body class="flex font-poppins items-center justify-center">
    <section>
        <div class="min-h-screen flex justify-center items-center bg-center bg-no-repeat bg-cover bg-black bg-opacity-60" style="background-image: url('/images/spacebg.jpg'); filter: contrast(10px); backdrop-filter: blur(3px); -webkit-backdrop-filter: blur(3px);">
            <div class="h-screen w-screen flex justify-center items-center dark:bg-gray-900">
                <div class="grid gap-8">
                    <div id="back-div" class="bg-gradient-to-r from-purple to-blue-500 rounded-[26px] m-4">
                        <div class="border-[1px] border-transparent rounded-[20px] dark:bg-gray-900 bg-zinc-800 shadow-lg xl:p-10 2xl:p-10 lg:p-10 md:p-10 sm:p-2 m-2">
                        <h1 class="pt-8 pb-6 font-bold text-white text-5xl text-center cursor-default">
                            Sign Up
                        </h1>
                        <form action="#" method="post" class="space-y-4">
                            <div>
                            <label for="email" class="mb-2  text-white text-lg">Email</label>
                            <input id="email" class="border p-2 dark:bg-indigo-700 dark:text-gray-300  dark:border-gray-700 shadow-md placeholder:text-base focus:scale-105 ease-in-out duration-300 border-gray-300 rounded-lg w-full" type="email" placeholder="Email" required/>
                            </div>
                            <div class="pb-3">
                            <label for="password" class="mb-2 text-white text-lg">Password</label>
                            <input id="password" class="border p-2 shadow-md dark:bg-indigo-700 text-white  dark:border-gray-700 placeholder:text-base focus:scale-105 ease-in-out duration-300 border-gray-300 rounded-lg w-full" type="password" placeholder="Password" required/>
                            </div>
                            <button
                            class="bg-gradient-to-r dark:text-gray-300 from-purple to-blue-500 shadow-lg mt-6 p-3 text-white rounded-lg w-full hover:scale-105 hover:from-purple-500 hover:to-blue-500 transition duration-300 ease-in-out"
                            type="submit"
                            >
                            LOG IN
                            </button>
                        </form>
                        <div class="flex flex-col mt-4 items-center justify-center text-sm">
                            <h3 class="text-gray-200">
                                Have an account?
                            <a class="group text-blue-400 transition-all duration-100 ease-in-out" href="#">
                                <span class="bg-left-bottom bg-gradient-to-r from-purple to-blue-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out">Log in</span>
                            </a>
                            </h3>
                        </div>
                        <div id="third-party-auth" class="flex items-center justify-center mt-5 flex-wrap">
                            <button href="#" class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                            <img class="max-w-[25px]" src="https://ucarecdn.com/8f25a2ba-bdcf-4ff1-b596-088f330416ef/" alt="Google"/>
                            </button>
                        </div>

                        <div
                            class="text-gray-400 flex text-center flex-col mt-4 items-center text-sm">
                            <p class="cursor-default">
                            By signing up, you agree to our
                            <a class="group text-blue-400 transition-all duration-100 ease-in-out" href="#">
                                <span class="cursor-pointer bg-left-bottom bg-gradient-to-r from-purple to-blue-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out">Terms</span>
                            </a>
                            and
                            <a class="group text-blue-400 transition-all duration-100 ease-in-out" href="#">
                                <span class="cursor-pointer bg-left-bottom bg-gradient-to-r from-purple to-blue-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out">Privacy Policy</span>
                            </a>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</body>
</html>
