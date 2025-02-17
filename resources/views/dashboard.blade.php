<x-app-layout>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">
                    <div class="flex flex-wrap gap-4"> 
                        @foreach ($cocktails as $cocktail)
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
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
