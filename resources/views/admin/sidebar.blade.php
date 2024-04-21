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

    .relative.min-h-screen.md:flex {
        display: flex;
        min-height: 100vh;
    }

    .flex-1 {
        flex: 1;
    }
</style>

<aside class="z-10 bg-blue-800 text-blue-100 w-64 px-2 py-4  inset-y-0 left-0 md:relative transform- md:translate-x-0 overflow-y-auto transition ease-in-out duration-200 shadow-lg">
    <!--sidebar menu-->     
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
</aside>