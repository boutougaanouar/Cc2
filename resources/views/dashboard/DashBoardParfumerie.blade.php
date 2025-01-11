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

    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
        <!-- Navigation Bar -->
        <nav class="bg-white shadow-md">
            <div class="container mx-auto px-6 py-4">
                <h1 class="text-3xl font-bold text-indigo-600">Parfumerie Dashboard</h1>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="container mx-auto px-6 py-8">
            <div class="mb-12">
                <h2 class="text-4xl font-extrabold text-gray-800 text-center">
                    Tableau de bord de la Parfumerie
                </h2>
                <div class="h-1 w-24 bg-indigo-600 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Nombre de Laboratoires -->
                <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 p-6 border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-700">Laboratoires</h3>
                        <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <p class="text-3xl font-bold text-gray-900">{{ $totalLaboratoires }}</p>
                </div>

                <!-- Nombre de Parfums -->
                <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 p-6 border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-700">Parfums</h3>
                        <svg class="w-8 h-8 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <p class="text-3xl font-bold text-gray-900">{{ $totalParfums }}</p>
                </div>

                <!-- Dernier Parfum Créé -->
                <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 p-6 border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-700">Dernier Parfum</h3>
                        <svg class="w-8 h-8 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <p class="text-xl font-bold text-gray-900 mb-2">{{ $lastParfum->NomPar }}</p>
                    <div class="space-y-1 text-sm text-gray-600">
                        <p>Prix: <span class="font-semibold">{{ $lastParfum->PrixVente }}€</span></p>
                        <p>Production: <span class="font-semibold">{{ $lastParfum->DateProduction }}</span></p>
                        <p>Labo: <span class="font-semibold">{{ $lastParfum->laboratoire->DesignationLabo }}</span></p>
                    </div>
                </div>

                <!-- Stock Maximum -->
                <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 p-6 border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-700">Stock Maximum</h3>
                        <svg class="w-8 h-8 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <p class="text-xl font-bold text-gray-900 mb-2">{{ $productWithMaxStock->DesignationPro }}</p>
                    <div class="space-y-1 text-sm text-gray-600">
                        <p>Quantité: <span class="font-semibold">{{ $productWithMaxStock->QteStock }}</span></p>
                        <p>Unité: <span class="font-semibold">{{ $productWithMaxStock->UniteMesurePro }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
