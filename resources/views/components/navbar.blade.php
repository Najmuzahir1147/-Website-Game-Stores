@extends('dashboard')
@section('navbar')
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
@endsection
