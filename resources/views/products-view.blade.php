<x-app-layout>
    {{-- display the fetched product information --}}
    <section id="products" class="w-full lg:w-10/12 m-auto h-screen bg-slate-50 p-6">
        <h2 class="text-xl text-blue-600 ml-12 my-6 font-semibold">Product view</h2>
        <div class="flex flex-wrap gap-4">
            <div class="left">
                <img src="{{ asset('storage/images/products/' . $product['image']) }} " alt="upload img"
                    class="rounded max-h-80">
            </div>
            <div class="right">
                <h2 class="text-2xl text-blue-600 font-semibold">{{ $product['name'] }}</h2>
                <p class="text-gray-600 my-4">{{ $product['description'] }}</p>
                <p class="text-gray-600 my-4">Price: {{ $product['price'] }}</p>
                <a href="/wallet/{{ $product['id'] }}"
                    class="cta border py-3 px-6 bg-blue-700 mt-4 text-gray-50 rounded-sm hover:bg-blue-800 duration-150 text-center">Buy
                    now</a>
            </div>
        </div>

</x-app-layout>
