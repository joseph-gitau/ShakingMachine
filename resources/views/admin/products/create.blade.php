<x-app-layout>
    <div class="main flex flex-wrap w-full">
        <div class="w-1/4 bg-gray-200 min-h-screen">
            {{-- include admin-sidebar component --}}
            <x-admin-sidebar />
        </div>
        <div class="w-3/4">
            {{-- loop and display $user with crud operations in a table --}}
            <div class="content m-auto ml-6">
                {{-- add new upload button --}}
                <div class="add-new">
                    <a href="{{ route('admin.products.create') }}" class="bg-blue-500 text-white p-2 rounded">Add New</a>
                </div>
                @if (session('message'))
                    <div class="bg-green-500 text-white p-4">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="title">
                    <h1 class="text-xl text-center font-bold my-4">Shaking Machine add new Product</h1>
                </div>
                <hr>

                {{-- add new product form --}}
                <div class="add-new-product w-10/12 m-auto">
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-control">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('name')
                                <span class="text-danger text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-control">
                            <label for="description"
                                class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                            <textarea name="description" id="description" value="{{ old('description') }}" cols="30" rows="10"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                            @error('description')
                                <span class="text-danger text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-control">
                            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price</label>
                            <input type="text" name="price" id="price" value="{{ old('price') }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('price')
                                <span class="text-danger text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-control">
                            <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category</label>
                            <select name="category" id="category" value="{{ old('category') }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="1">Shaking Machine</option>
                                <option value="2">mild</option>
                                <option value="3">Curious</option>
                            </select>
                            @error('category')
                                <span class="text-danger text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-control">
                            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                            <input type="file" name="file" id="image" value="{{ old('image') }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('image')
                                <span class="text-danger text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-control">
                            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Add New</button>
                        </div>
                    </form>
                </div>
            </div>
</x-app-layout>
