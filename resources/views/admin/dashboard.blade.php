<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrator Panel') }}
        </h2>
    </x-slot>

    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 flex-none">
            <ul class="text-sm">
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#" class="block">Dashboard</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#" class="block">Cashier</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#" class="block">Product</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#" class="block">Sales</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#" class="block">Settings</a>
                </li>
                <!-- Add more menu items here -->
            </ul>
        </div>

        <!-- Content -->
        <div class="flex-1 p-4">
            <!-- Add content for each menu item here -->
        </div>
    </div>
</x-app-layout>
