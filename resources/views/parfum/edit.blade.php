@extends('layouts.app')

@section('content')
<div class="py-6">
    <header class="mb-6">
        <h2 class="text-3xl font-bold text-gray-900">Modifier le parfum : {{ $parfum->NomPar }}</h2>
    </header>

    @if($errors->any())
        <div class="rounded-md bg-red-50 p-4 mb-6">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">Erreurs de validation</h3>
                    <div class="mt-2 text-sm text-red-700">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <form action="{{ route('parfums.update', $parfum) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="space-y-6">
                    <div>
                        <label for="NomPar" class="block text-sm font-medium text-gray-700">Nom du parfum</label>
                        <div class="mt-1">
                            <input type="text" name="NomPar" id="NomPar" 
                                   value="{{ old('NomPar', $parfum->NomPar) }}"
                                   class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                   required>
                        </div>
                    </div>

                    <div>
                        <label for="PrixVente" class="block text-sm font-medium text-gray-700">Prix de vente</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="number" name="PrixVente" id="PrixVente" 
                                   value="{{ old('PrixVente', $parfum->PrixVente) }}"
                                   class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md"
                                   step="0.01" min="0" required>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">€</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="DateProduction" class="block text-sm font-medium text-gray-700">Date de production</label>
                        <div class="mt-1">
                            <input type="date" name="DateProduction" id="DateProduction" 
                                   value="{{ old('DateProduction', $parfum->DateProduction->format('Y-m-d')) }}"
                                   class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                   required>
                        </div>
                    </div>

                    <div>
                        <label for="DateSortie" class="block text-sm font-medium text-gray-700">Date de sortie prévue</label>
                        <div class="mt-1">
                            <input type="date" name="DateSortie" id="DateSortie" 
                                   value="{{ old('DateSortie', $parfum->DateSortie->format('Y-m-d')) }}"
                                   class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                   required>
                        </div>
                    </div>

                    <div>
                        <label for="NumLabo" class="block text-sm font-medium text-gray-700">Laboratoire</label>
                        <div class="mt-1">
                            <select name="NumLabo" id="NumLabo"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                    required>
                                <option value="">Sélectionnez un laboratoire</option>
                                @foreach($laboratoires as $laboratoire)
                                    <option value="{{ $laboratoire->NumLabo }}" 
                                            {{ (old('NumLabo', $parfum->NumLabo) == $laboratoire->NumLabo) ? 'selected' : '' }}>
                                        {{ $laboratoire->DesignationLabo }} ({{ $laboratoire->ville }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <a href="{{ route('parfums.index') }}"
                       class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Annuler
                    </a>
                    <button type="submit"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Mettre à jour le parfum
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
