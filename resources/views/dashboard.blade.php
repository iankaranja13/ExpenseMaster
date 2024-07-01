<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/4 bg-gray-800 text-white min-h-screen">
            <nav class="mt-10">
                <!-- Move buttons to the top -->
                <a href="{{ route('expenses.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white mb-2">
                    {{ __('Expenses') }}
                </a>
                <a href="{{ route('budget.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white mb-2">
                    {{ __('Budget') }}
                </a>
                <a href="{{ route('savings.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white mb-2">
                    {{ __('Savings Packages') }}
                </a>
                <!-- End of buttons -->
            </nav>
        </div>
        
        <!-- Main Content -->
        <div class="w-3/4 p-6">
            <h3 class="text-2xl mb-4">{{ __('Welcome to your dashboard') }}</h3>
            <!-- Main content goes here -->
            <p>Hi there! Here we figure out how to achieve financial literacy</p>
        </div>
    </div>
</x-app-layout>
