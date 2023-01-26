<x-app-layout>
    <div class="main flex flex-wrap w-full">
        <div class="w-1/4 bg-gray-200 min-h-screen">
            {{-- include admin-sidebar component --}}
            <x-admin-sidebar />
        </div>
        <div class="w-3/4">
            {{-- loop and display $user with crud operations in a table --}}
            <div class="content m-auto ml-6 my-10">
                {{-- add new upload button --}}
                <div class="add-new">
                    <a href="{{ route('admin.products.create') }}" class="bg-blue-500 text-white p-2 rounded">Add New</a>
                </div>
                @if (session('message'))
                    <div class="bg-green-500 text-white p-4">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="bg-red-500 text-white p-4">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="bg-green-500 text-white p-4">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="title">
                    <h1 class="text-xl text-center font-bold my-4">Shaking Machine Products</h1>
                </div>
                <hr>

                {{-- list the products --}}
                <div class="products">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Name</th>
                                <th class="border px-4 py-2">Description</th>
                                <th class="border px-4 py-2">Price</th>
                                {{-- <th class="border px-4 py-2">Image</th> --}}
                                <th class="border px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="border px-4 py-2">{{ $product->id }}</td>
                                    <td class="border px-4 py-2">{{ $product->name }}</td>
                                    <td class="border px-4 py-2">{{ $product->description }}</td>
                                    <td class="border px-4 py-2">{{ $product->price }}</td>
                                    {{-- <td class="border px-4 py-2">{{ $product->image }}</td> --}}
                                    <td class="border px-4 py-2">
                                        <a href="#" class="bg-blue-500 text-white p-2 rounded">Edit</a>
                                        <form action="" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 text-white p-2 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- nw --}}
                    {{-- pagination --}}
                    <div class="mt-4 w-10/12 m-auto mb-6">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
