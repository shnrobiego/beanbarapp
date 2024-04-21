<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrator Panel') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="flex">
            <!-- Sidebar -->
            <div class="col-lg-2">
                <div class="relative min-h-screen md:flex md:flex-col">
                    <!-- Include the sidebar -->
                    @include('admin.sidebar')
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-10">
                <div class="p-4">
                    <!-- Main content -->
                    <div class="bg-white p-4 rounded-md shadow-md">
                        <h1 class="text-xl font-bold mb-4">Product Management</h1>
                        <!-- Product form -->
                        <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="block font-semibold mb-1">Product Name:</label>
                                <input type="text" id="name" name="name" class="form-input" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="block font-semibold mb-1">Product Price:</label>
                                <input type="number" id="price" name="price" class="form-input" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="block font-semibold mb-1">Product Description:</label>
                                <textarea id="description" name="description" class="form-input" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="photo" class="block font-semibold mb-1">Product Photo:</label>
                                <input type="file" id="photo" name="photo" accept="image/*" class="form-input" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>

                        <!-- Existing products list -->
                        <h2 class="text-xl font-bold mt-8 mb-4">Existing Products</h2>
                        <table class="table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Product Name</th>
                                    <th class="px-4 py-2">Price</th>
                                    <th class="px-4 py-2">Description</th>
                                    <th class="px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop through existing products and display them here -->
                                @foreach($products as $product)
                                    <tr>
                                        <td class="px-4 py-2">{{ $product->name }}</td>
                                        <td class="px-4 py-2">{{ $product->price }}</td>
                                        <td class="px-4 py-2">{{ $product->description }}</td>
                                        <td class="px-4 py-2">
                                            <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
