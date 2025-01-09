<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un produit </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">Ajouter un nouveau Parfum</h1>
        <form action="{{ route('parfum.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label for="NomPar" class="block text-gray-700 text-sm font-bold mb-2">Nom du Parfum</label>
                <input type="text" name="NomPar" id="NomPar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="PrixVente" class="block text-gray-700 text-sm font-bold mb-2">Prix de Vente</label>
                <input type="number" name="PrixVente" id="PrixVente" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" step="0.01" required>
            </div>
            <div class="mb-4">
                <label for="DateProduction" class="block text-gray-700 text-sm font-bold mb-2">Date de Production</label>
                <input type="date" name="DateProduction" id="DateProduction" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="laboratoire_id" class="block text-gray-700 text-sm font-bold mb-2">Laboratoire</label>
                <select name="laboratoire_id" id="laboratoire_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @foreach ($laboratoires as $laboratoire)
                        <option value="{{ $laboratoire->id }}">{{ $laboratoire->DesignationLabo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Ajouter</button>
            </div>
        </form>
    </div>



</body>

</html>
