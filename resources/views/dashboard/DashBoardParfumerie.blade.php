<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DashBoard Parfumerie</title>
</head>

<body>

    <div class="container">
        <h1>Tableau de bord de la Parfumerie</h1>

        <div class="row">
            <!-- Nombre de Laboratoires -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Nombre de Laboratoires
                    </div>
                    <div class="card-body">
                        <h4>{{ $totalLaboratoires }}</h4>
                    </div>
                </div>
            </div>

            <!-- Nombre de Parfums -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Nombre de Parfums
                    </div>
                    <div class="card-body">
                        <h4>{{ $totalParfums }}</h4>
                    </div>
                </div>
            </div>

            <!-- Dernier Parfum Créé -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Dernier Parfum Créé
                    </div>
                    <div class="card-body">
                        <h4>{{ $lastParfum->NomPar }}</h4>
                        <p><strong>Prix de Vente:</strong> {{ $lastParfum->PrixVente }}€</p>
                        <p><strong>Date de Production:</strong> {{ $lastParfum->DateProduction }}</p>
                        <p><strong>Laboratoire:</strong> {{ $lastParfum->laboratoire->DesignationLabo }}</p>
                    </div>
                </div>
            </div>

            <!-- Produit avec le Plus Grand Stock -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Produit avec le Plus Grand Stock
                    </div>
                    <div class="card-body">
                        <h4>{{ $productWithMaxStock->DesignationPro }}</h4>
                        <p><strong>Quantité en Stock:</strong> {{ $productWithMaxStock->QteStock }}</p>
                        <p><strong>Unité de Mesure:</strong> {{ $productWithMaxStock->UniteMesurePro }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
