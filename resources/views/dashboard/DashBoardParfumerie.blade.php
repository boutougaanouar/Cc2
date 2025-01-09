<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DashBoard Parfumerie</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="container mx-auto p-6 bg-gray-100 min-h-screen">
        <h1 class="text-3xl font-extrabold text-gray-800 mb-6">Tableau de bord de la Parfumerie</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Nombre de Laboratoires -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="font-semibold text-xl text-gray-700 mb-2">
                    Nombre de Laboratoires
                </div>
                <div class="text-3xl text-gray-900">
                    {{ $totalLaboratoires }}
                </div>
            </div>

            <!-- Nombre de Parfums -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="font-semibold text-xl text-gray-700 mb-2">
                    Nombre de Parfums
                </div>
                <div class="text-3xl text-gray-900">
                    {{ $totalParfums }}
                </div>
            </div>

            <!-- Dernier Parfum Créé -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="font-semibold text-xl text-gray-700 mb-2">
                    Dernier Parfum Créé
                </div>
                <div class="text-2xl text-gray-900">
                    {{ $lastParfum->NomPar }}
                </div>
                <p class="text-gray-600"><strong>Prix de Vente:</strong> {{ $lastParfum->PrixVente }}€</p>
                <p class="text-gray-600"><strong>Date de Production:</strong> {{ $lastParfum->DateProduction }}</p>
                <p class="text-gray-600"><strong>Laboratoire:</strong> {{ $lastParfum->laboratoire->DesignationLabo }}</p>
            </div>

            <!-- Produit avec le Plus Grand Stock -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="font-semibold text-xl text-gray-700 mb-2">
                    Produit avec le Plus Grand Stock
                </div>
                <div class="text-2xl text-gray-900">
                    {{ $productWithMaxStock->DesignationPro }}
                </div>
                <p class="text-gray-600"><strong>Quantité en Stock:</strong> {{ $productWithMaxStock->QteStock }}</p>
                <p class="text-gray-600"><strong>Unité de Mesure:</strong> {{ $productWithMaxStock->UniteMesurePro }}</p>
            </div>
        </div>
    </div>

</body>

</html>
