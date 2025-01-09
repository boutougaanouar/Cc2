<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Laboratoires</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Liste des Laboratoires</h1>

        <!-- Formulaire de recherche par ville -->
        <form method="GET" action="{{ route('laboratoire.index') }}" class="mb-6">
            <div class="flex items-center">
                <input type="text" name="search" class="form-input flex-grow rounded-l-md border-gray-300" placeholder="Rechercher par ville" value="{{ $search }}">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-r-md hover:bg-blue-600" type="submit">Rechercher</button>
            </div>
        </form>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-2 px-4 border-b">Nom du laboratoire</th>
                        <th class="py-2 px-4 border-b">Ville</th>
                        <th class="py-2 px-4 border-b">Nombre de parfums</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($laboratoires as $laboratoire)
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">{{ $laboratoire->DesignationLabo }}</td>
                            <td class="py-2 px-4 border-b">{{ $laboratoire->ville }}</td>
                            <td class="py-2 px-4 border-b">{{ $laboratoire->parfums_count }}</td> <!-- Affichage du nombre de parfums -->
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="py-4 text-center text-gray-500">Aucun laboratoire trouvé</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
