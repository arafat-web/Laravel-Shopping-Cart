<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add to cart</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="bg-white">
        <header>
            <div class="mx-auto">
                <div class="border-b-2 fixed top-0 right-0 left-0 z-20">
                    <nav class="bg-white border-gray-200 dark:bg-gray-900 ">
                        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                            <a href="/" class="flex items-center">
                                <svg class="fill-current text-blue-700 h-8 w-8 mr-2" width="54" height="54"
                                    viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
                                </svg>
                                <span class="font-semibold text-xl tracking-tight">Shopping Cart</span>
                            </a>
                            <div class="flex md:order-2">
                                <a href="{{ route('cart.list') }}" type="button"
                                    class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg mt-2 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded text-blue-100 text-xs px-4 py-2 dark:focus:ring-blue-800">
                                    <svg class="w-5 h-5 inline" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                    {{ Cart::getTotalQuantity() }}

                                </a>
                            </div>
                            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                                id="navbar-cta">
                                <ul
                                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                                    <li>
                                        <a href="{{ route('index') }}"
                                            class="block py-2 pl-3 pr-4 rounded bg-transparent {{ request()->routeIs('index') ? 'text-blue-700' : 'text-gray-900' }} md:p-0 ">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('products.list') }}"
                                            class="block py-2 pl-3 pr-4 rounded bg-transparent {{ request()->routeIs('products.list') ? 'text-blue-700' : 'text-gray-900' }} md:p-0">Products</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}"
                                            class="block py-2 pl-3 pr-4 rounded bg-transparent {{ request()->routeIs('contact') ? 'text-blue-700' : 'text-gray-900' }} md:p-0">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <main style="margin-top: 100px" class="my-8">
            @yield('content')
        </main>

        <footer class="bg-white border-t-2">
            <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="/" class="flex items-center mb-4 sm:mb-0">
                        <svg class="fill-current text-blue-700 h-8 w-8 mr-2" width="54" height="54"
                            viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
                        </svg>
                        <span class="font-semibold text-xl tracking-tight">Shopping Cart</span>
                    </a>
                    <ul
                        class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                        <li>
                            <a href="{{route('index')}}" class="mr-4 hover:underline md:mr-6 ">Home</a>
                        </li>
                        <li>
                            <a href="{{route('products.list')}}" class="mr-4 hover:underline md:mr-6">Products</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© <script>document.write(new Date().getFullYear());</script> <a
                        href="https://arafat-web.github.io/" class="hover:underline">Arafat Hossain Ar™</a>. All Rights Reserved.</span>
            </div>
        </footer>


    </div>
</body>

</html>
