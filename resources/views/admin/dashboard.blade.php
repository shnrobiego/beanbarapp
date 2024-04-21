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
                        <h1 class="text-xl font-bold mb-4">Dashboard</h1>
                        <!-- Add your dashboard content here -->
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque repellendus tenetur quibusdam voluptas, iusto reprehenderit architecto totam minus debitis, omnis iste est porro consectetur! Unde officiis repellat nesciunt enim animi consequuntur et sit quidem corrupti minima eius ipsa, repudiandae nisi, in dignissimos. Dicta voluptates tempora perspiciatis cumque laboriosam quos voluptatibus.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
