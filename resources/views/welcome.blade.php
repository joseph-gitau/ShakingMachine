<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-gray-50 ">
    <div class="container w-10/12 m-auto">
        <header>
            <nav class="bg-white border-gray-200 px-2 sm:px-4 py-7 rounded text-xl">
                <div class="container flex flex-wrap items-center justify-between mx-auto">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="{{ asset('images/favs/apple-touch-icon.png') }}" class="h-6 mr-3 sm:h-9"
                            alt="Flowbite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap ">Shaking machine</span>
                    </a>
                    <button data-collapse-toggle="navbar-default" type="button"
                        class="inline-flex items-center p-2 ml-3 text-base text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                        aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                        <ul
                            class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-base md:font-medium md:border-0 md:bg-white ">
                            <li>
                                <a href="/"
                                    class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 "
                                    aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="#about"
                                    class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">About</a>
                            </li>
                            <li>
                                <a href="/products"
                                    class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Products</a>
                            </li>
                            <li>
                                <a href="#contact"
                                    class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Contact</a>
                            </li>
                            <li>
                                <a href="/login"
                                    class="block py-2 pl-3 pr-4 ml-20 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Login</a>
                            </li>
                            <li>
                                <a href="/register"
                                    class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
        </header>
        {{-- hero section --}}
        <section id="hero" class="w-full h-screen flex flex-row">
            <div class="w-2/4 flex flex-col">
                <h1 class="text-xl text-blue-600 my-1 font-semibold">Shaking Machine</h1>
                <p class="text-[70px] font-bold"><span class="text-blue-700">Upload</span> and <span
                        class="text-blue-700 pb-6"> buy</span> 3D models with
                    virtual
                    currency</p>
                <a href="#products"
                    class="w-52 cta border py-3 px-6 bg-blue-700 mt-8 text-gray-50 rounded-sm hover:bg-blue-800 duration-150">Explore
                    our products</a>

                <blockquote class="text-xl font-medium italic p-4 bg-gray-200 rounded-lg mt-4">Design without limits,
                    buy
                    without boundaries with our virtual currency for 3D models!</blockquote>

            </div>
            <div class="w-2/4">
                <img src="{{ asset('images/Upload and buy 3D models with virtual currencyv1.png') }}" alt="upload img"
                    class="rounded-tl-[80px] rounded-br-[80px]">
            </div>

        </section>
        <section id="about" class="w-full h-screen">
            <h2 class="text-xl text-blue-600 mb-6 font-semibold">About Us</h2>
            <div class="flex flex-row">


                <div class="w-2/4w-2/4 flex flex-col">
                    <img src="{{ asset('images/a company.png') }}" alt="about img"
                        class="rounded-tl-[80px] rounded-br-[80px]">
                </div>
                <div class="w-2/4w-2/4 flex flex-wrap items-center">
                    <p class="mx-4 ml-8 text-xl leading-10">We are a company that specializes in creating and selling 3D
                        models.
                        Our
                        models are unique and
                        can
                        only be purchased with virtual currency. </p>
                    {{-- get started button --}}
                    <a href="#products"
                        class="cta border py-3 px-6 bg-blue-700 mt-4 text-gray-50 rounded-sm hover:bg-blue-800 duration-150 ml-[30%]">Get
                        Started</a>
                </div>
            </div>
        </section>
        {{-- start using section --}}
        <section id="start-using" class="w-full h-screen">
            <h2 class="text-xl text-blue-600 mb-6 font-semibold">Start Using Our Virtual Currency</h2>
            <div class="flex flex-row">
                <div class="w-2/4 flex">
                    <img src="{{ asset('images/Start using our virtual currency.png') }}" alt="start using img"
                        class="rounded-tl-[80px] rounded-br-[80px]">
                </div>
                <div class="w-2/4 flex
                flex-wrap items-center">
                    <p class="mx-4 ml-8 text-xl leading-10">Our virtual currency is easy to use. You can buy it with
                        real
                        money
                        and
                        use it to buy our 3D models. </p>
                    {{-- get started button --}}
                    <a href="#products"
                        class="cta border py-3 px-6 bg-blue-700 mt-4 text-gray-50 rounded-sm hover:bg-blue-800 duration-150 ml-[30%]">Get
                        Started</a>
                </div>
            </div>
        </section>
        <section id="products" class="w-full h-screen">
            <h2>Our Products</h2>
            <ul>
                <li>
                    <h3>Product 1</h3>
                    <img src="product1.jpg" alt="Product 1">
                    <p>This is a brief description of Product 1</p>
                    <a href="#" class="cta">Buy with virtual currency</a>
                </li>
                <li>
                    <h3>Product 2</h3>
                    <img src="product2.jpg" alt="Product 2">
                    <p>This is a brief description of Product 2</p>
                    <a href="#" class="cta">Buy with virtual currency</a>
                </li>
            </ul>
        </section>
        <section id="contact" class="w-full h-screen">
            <h2>Contact Us</h2>
            <p>Email: info@shakingmachine.com</p>
            <p>Phone: 555-555-5555</p>
            <p>Address: 123 Main Street, Anytown USA</p>
        </section>
        <footer class="w-full h-auto">
            <div class="row">
                <div class="1"></div>
                <div class="1"></div>
                <div class="1"></div>
            </div>
            <p>Copyright © 2022 Shaking Machine <small><span>Powered by. Openisoft</small></span></p>
        </footer>

    </div>
</body>

</html>
