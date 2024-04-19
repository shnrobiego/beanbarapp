<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrator Panel') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <style>
            aside {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                width: 250px;
                background-color: #263544;
                color: #fff;
                padding: 20px;
                }
        </style>
        
    </head>
    <body class="font-sans antialiased">
        <div class="relative min-h-screen md:flex">
            <!--sidebar-->
            <aside class="z-10 bg-blue-800 text-blue-100 w-64 px-2 py-4  inset-y-0 left-0 md:relative transform- md:translate-x-0 overflow-y-auto transition ease-in-out duration-200 shadow-lg">
                <ul class="text-sm">
                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="{{ route('admin.dashboard') }}" class="block">Dashboard</a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="{{ route('admin.cashier') }}" class="block">Cashier Management</a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="{{ route('admin.product') }}" class="block">Product Management</a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="{{ route('admin.sales') }}" class="block">Sales Report</a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="{{ route('admin.settings') }}" class="block">Settings</a>
                    </li>
                </ul>
                <!--
                <ul class="text-sm">
                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="#" class="block">Dashboard</a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="#" class="block">Cashier Management</a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="#" class="block">Product Management</a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="#" class="block">Sales Report</a>
                    </li>
                    <li class="px-4 py-2 hover:bg-gray-700">
                        <a href="#" class="block">Settings</a>
                    </li>
                </ul>
                --> 
            </aside>
        </div>
    </body>
    </html>

    <!--
    <div class="flex">
        
        <div class="bg-gray-800 text-white w-64 flex-none">
            <ul class="text-sm">
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#" class="block">Dashboard</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#" class="block">Cashier Management</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#" class="block">Product Management</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#" class="block">Sales Report</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#" class="block">Settings</a>
                </li>
            </ul>
        </div>-->

        <!-- Content 
        <div class="flex-1 p-4">
            
        </div>-->
    </div>
</x-app-layout>
