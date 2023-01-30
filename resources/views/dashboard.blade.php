<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- my products --}}
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-xl text-blue-600 ml-12 my-6 font-semibold">My products</h2>
                    <div class="flex flex-wrap gap-4">
                        {{-- if $products is not empty --}}
                        @if (count($products) > 0)
                            @foreach ($products as $product)
                                <div class="w-2/4 md:w-1/3 lg:w-1/4 flex flex-col">
                                    <img src="{{ asset('storage/images/products/' . $product['image']) }} "
                                        alt="upload img" class="rounded">
                                    <a href="/products-view/{{ $product['id'] }}"
                                        class="cta border py-3 px-6 bg-blue-700 mt-4 text-gray-50 rounded-sm hover:bg-blue-800 duration-150 text-center">View
                                        more details</a>
                                </div>
                            @endforeach
                        @else
                            <p class="text-gray-500">You don't any purchased products yet!</p><br>
                            {{-- button to take to products cta --}}
                            <div>
                                <a href="/products"
                                    class="cta border py-3 px-6 bg-blue-700 mt-4 text-gray-50 rounded-sm hover:bg-blue-800 duration-150 text-center">View
                                    products</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
