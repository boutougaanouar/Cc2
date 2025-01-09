<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Liste des Parfums</h1>
        <a href="{{ route('parfum.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-6 inline-block">Ajouter un nouveau parfum</a>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">#</th>
                        <th class="py-2 px-4 border-b">Nom</th>
                        <th class="py-2 px-4 border-b">Prix de vente</th>
                        <th class="py-2 px-4 border-b">Date de production</th>
                        <th class="py-2 px-4 border-b">Laboratoire</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($parfums as $parfum)
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b">{{ $parfum->id }}</td>
                            <td class="py-2 px-4 border-b">{{ $parfum->NomPar }}</td>
                            <td class="py-2 px-4 border-b">{{ $parfum->PrixVente }}</td>
                            <td class="py-2 px-4 border-b">{{ $parfum->DateProduction }}</td>
                            <td class="py-2 px-4 border-b">{{ $parfum->laboratoire->DesignationLabo }}</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('parfum.detailsProduit', $parfum->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded mr-2">Détails Produit</a>
                                <a href="{{ route('parfum.edit', $parfum->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded mr-2">Modifier</a>
                                <form action="{{ route('parfum.destroy', $parfum->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce parfum ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>
