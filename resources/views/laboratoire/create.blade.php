@extends('layouts.app')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h2 class="text-3xl font-bold text-gray-900">Créer un nouveau laboratoire</h2>
        </div>

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
                <form action="{{ route('laboratoires.store') }}" method="POST">
                    @csrf
                    <div class="space-y-6">
                        <div>
                            <label for="DesignationLabo" class="block text-lg font-medium text-gray-700">
                                Désignation du laboratoire
                            </label>
                            <div class="mt-1">
                                <input type="text" name="DesignationLabo" id="DesignationLabo"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full text-lg p-3 border-gray-300 rounded-md"
                                       value="{{ old('DesignationLabo') }}" required>
                            </div>
                        </div>

                        <div>
                            <label for="ville" class="block text-lg font-medium text-gray-700">
                                Ville
                            </label>
                            <div class="mt-1">
                                <input type="text" name="ville" id="ville"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full text-lg p-3 border-gray-300 rounded-md"
                                       value="{{ old('ville') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end space-x-3">
                        <a href="{{ route('laboratoires.index') }}"
                           class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Annuler
                        </a>
                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Créer le laboratoire
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
