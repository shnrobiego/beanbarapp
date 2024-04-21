<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrator Panel') }}
        </h2>
    </x-slot>

    <div class="relative min-h-screen md:flex">
        <!-- Include the sidebar -->
        @include('sidebar')

        <!-- Main content -->
        <div class="flex-1 p-4">
            <!-- Your product management content goes here -->
            <!-- For example, add a form for adding/editing products -->
            <div class="bg-white p-4 rounded-md shadow-md">
                <h1 class="text-xl font-bold mb-4">Product Management</h1>
                <!-- Add your product management content here -->
            </div>
        </div>
    </div>
</x-app-layout>
