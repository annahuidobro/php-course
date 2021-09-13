<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <a href="{{ route('home') }}" class="btn btn-secondary">Go to LEAGUE page</a>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .btn {
        width: 300px;
        height: 50px;
        background-color: #b400ff;
        display: inline-block;
        text-align: center;
        padding: 13px;
        color: white;
        border-radius: 15px;
        margin: 10px;
        font-weight: bold;
    }
</style>
