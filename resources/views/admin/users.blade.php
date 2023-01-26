<x-app-layout>
    <div class="main flex flex-wrap w-full">
        <div class="w-1/4 bg-gray-200 min-h-screen">
            {{-- include admin-sidebar component --}}
            <x-admin-sidebar />
        </div>
        <div class="w-3/4">
            {{-- loop and display $user with crud operations in a table --}}
            <div class="content m-auto ml-6">
                @if (session('message'))
                    <div class="bg-green-500 text-white p-4">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="title">
                    <h1 class="text-xl text-center font-bold my-4">Shaking Machine Users</h1>
                </div>
                <hr>
                <table>
                    <thead class="border-b bg-blue-300">
                        <tr class="">
                            <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 text-left">Id</th>
                            <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 text-left">Name</th>
                            <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 text-left">Email</th>
                            <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 text-left">Created At
                            </th>
                            {{-- <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Updated At
                            </th> --}}
                            <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 text-left">Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $user)
                            <tr class="border-b {{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-gray-200' }}">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $user->id }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-3 whitespace-nowrap">
                                    {{ $user->name }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-3 whitespace-nowrap">
                                    {{ $user->email }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-3 whitespace-nowrap">
                                    {{ $user->created_at }}</td>
                                {{-- <td class="text-sm text-gray-900 font-light px-6 py-3 whitespace-nowrap">
                                    {{ $user->updated_at }}</td> --}}
                                <td class="text-sm text-gray-900 font-light px-6 py-3 whitespace-nowrap flex flex-wrap">
                                    <a href="#" class="bg-blue-500 text-white p-2 rounded-lg">Edit</a>
                                    {{-- <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white p-2 rounded-lg ml-4">Delete</button>
                                    </form> --}}
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#"
                                            onclick="if(confirm('Are you sure you want to delete this user?')){this.parentNode.submit();}else{return false;}"
                                            class="bg-red-500 text-white p-2 rounded-lg ml-4">Delete</a>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- nw --}}
                {{-- pagination --}}
                <div class="mt-4 w-10/12 m-auto mb-6">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
