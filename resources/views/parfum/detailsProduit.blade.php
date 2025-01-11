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

    <div class="min-h-screen bg-gray-100">
        <div class="container mx-auto px-4 py-8">
            <!-- Header -->
            <h1 class="text-5xl font-bold text-gray-900 mb-8 text-center">
                Détails du Parfum {{ $parfum->NomPar }}
            </h1>

            <!-- Back Button -->
            <div class="mb-8">
                <a href="{{ route('parfum.index') }}" 
                   class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition-all duration-300 ease-in-out">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Retour à la liste
                </a>
            </div>

            <!-- Product Details Card -->
            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Card Header -->
                <div class="bg-gradient-to-r from-indigo-600 to-purple-600 px-8 py-6">
                    <h2 class="text-3xl font-bold text-white">
                        {{ $parfum->NomPar }}
                    </h2>
                </div>

                <!-- Card Content -->
                <div class="p-8 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Product Information -->
                        <div class="space-y-4">
                            <div class="flex items-center border-b border-gray-200 pb-4">
                                <span class="text-gray-600 font-semibold w-40">Nom:</span>
                                <span class="text-gray-800">{{ $parfum->NomPar }}</span>
                            </div>
                            <div class="flex items-center border-b border-gray-200 pb-4">
                                <span class="text-gray-600 font-semibold w-40">Prix de vente:</span>
                                <span class="text-green-600 font-bold text-xl">{{ $parfum->PrixVente }}€</span>
                            </div>
                            <div class="flex items-center border-b border-gray-200 pb-4">
                                <span class="text-gray-600 font-semibold w-40">Date de production:</span>
                                <span class="text-gray-800">{{ $parfum->DateProduction }}</span>
                            </div>
                            <div class="flex items-center pb-4">
                                <span class="text-gray-600 font-semibold w-40">Laboratoire:</span>
                                <span class="text-gray-800">{{ $parfum->laboratoire->DesignationLabo }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
