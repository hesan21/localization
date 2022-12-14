<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center">
                <div class="p-6 bg-white border-b border-gray-200">
                    <span class="text-4xl">
                        {{-- You're logged in. --}}
                        {{ __('profile.welcome', ['name' => auth()->user()->name])}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
