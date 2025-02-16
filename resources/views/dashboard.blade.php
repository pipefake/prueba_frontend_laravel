<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-wrap gap-4"> 
                        @foreach ($cocktails as $cocktail)
                            <div class="w-64 card shadow-lg border-0 bg-white rounded-lg">
                                <img src="{{ $cocktail['strDrinkThumb'] }}" class="card-img-top img-fluid rounded-top" alt="{{ $cocktail['strDrink'] }}" style="height: 250px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title text-xl font-bold">Name: {{ $cocktail['strDrink'] }}</h5>
                                    <p class="card-text text-sm">Category: {{ $cocktail['strCategory'] }}</p>
                                    <p class="card-text text-sm">Instuctions: {{ $cocktail['strInstructions'] }}</p>
                                </div>
                                <div class="card-footer text-center">
                                    <form action="{{ route('favorites.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="name" value="{{ $cocktail['strDrink'] }}">
                                        <input type="hidden" name="image" value="{{ $cocktail['strDrinkThumb'] }}">
                                        <input type="hidden" name="drink_id" value="{{ $cocktail['idDrink'] }}">
                                        <button type="submit" class="btn btn-primary">Añadir a favoritos</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
