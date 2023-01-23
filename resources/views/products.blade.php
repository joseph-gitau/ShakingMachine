<x-app-layout>
    {{-- products to be shown to customer inform of images which they can purchase --}}
    <section id="products" class="w-full h-screen">
        <h2 class="text-xl text-blue-600 ml-12 my-6 font-semibold">Products</h2>
        <div class="flex flex-wrap gap-4">
            <div class="w-2/4 md:w-1/3 lg:w-1/4 flex flex-col">
                <img src="{{ asset('images/Upload and buy 3D models with virtual currencyv1.png') }}" alt="upload img"
                    class="rounded">
                <a href="/wallet"
                    class="cta border py-3 px-6 bg-blue-700 mt-4 text-gray-50 rounded-sm hover:bg-blue-800 duration-150 text-center">Buy
                    now</a>
            </div>
            <div class="w-2/4 md:w-1/3 lg:w-1/4 flex flex-col">
                <img src="{{ asset('images/Upload and buy 3D models with virtual currencyv1.png') }}" alt="upload img"
                    class="rounded">
                <a href="/wallet"
                    class="cta border py-3 px-6 bg-blue-700 mt-4 text-gray-50 rounded-sm hover:bg-blue-800 duration-150 text-center">Buy
                    now</a>
            </div>
            <div class="w-2/4 md:w-1/3 lg:w-1/4 flex flex-col">
                <img src="{{ asset('images/Upload and buy 3D models with virtual currencyv1.png') }}" alt="upload img"
                    class="rounded">
                <a href="/wallet"
                    class="cta border py-3 px-6 bg-blue-700 mt-4 text-gray-50 rounded-sm hover:bg-blue-800 duration-150 text-center">Buy
                    now</a>
            </div>
            <div class="w-2/4 md:w-1/3 lg:w-1/4 flex flex-col">
                <img src="{{ asset('images/Upload and buy 3D models with virtual currencyv1.png') }}" alt="upload img"
                    class="rounded">
                <a href="/wallet"
                    class="cta border py-3 px-6 bg-blue-700 mt-4 text-gray-50 rounded-sm hover:bg-blue-800 duration-150 text-center">Buy
                    now</a>
            </div>

        </div>

    </section>
</x-app-layout>
