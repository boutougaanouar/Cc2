<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>deitail produit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Détails des Produits pour le Parfum : {{ $parfum->NomPar }}</h1>
        <a href="{{ route('parfum.index') }}" class="inline-block bg-gray-500 text-white py-2 px-4 rounded mb-6 hover:bg-gray-600">Retour à la liste</a>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="bg-gray-800 text-white p-4">
                <h2 class="text-2xl font-semibold">{{ $parfum->NomPar }}</h2>
            </div>
            <div class="p-6">
                <p class="mb-4"><strong>Nom:</strong> {{ $parfum->NomPar }}</p>
                <p class="mb-4"><strong>Prix de vente:</strong> {{ $parfum->PrixVente }}€</p>
                <p class="mb-4"><strong>Date de production:</strong> {{ $parfum->DateProduction }}</p>
                <p class="mb-4"><strong>Laboratoire:</strong> {{ $parfum->laboratoire->DesignationLabo }}</p>
            </div>
        </div>
    </div>



</body>

</html>
