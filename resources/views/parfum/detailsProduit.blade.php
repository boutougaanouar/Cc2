<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>deitail produit</title>
</head>

<body>

    <div class="container">
        <h1>Détails des Produits pour le Parfum : {{ $parfum->NomPar }}</h1>
        <a href="{{ route('parfum.index') }}" class="btn btn-secondary mb-3">Retour à la liste</a>

        <div class="card">
            <div class="card-header">
                <h2>{{ $parfum->NomPar }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Nom:</strong> {{ $parfum->NomPar }}</p>
                <p><strong>Prix de vente:</strong> {{ $parfum->PrixVente }}€</p>
                <p><strong>Date de production:</strong> {{ $parfum->DateProduction }}</p>
                <p><strong>Laboratoire:</strong> {{ $parfum->laboratoire->DesignationLabo }}</p>
            </div>
        </div>
    </div>



</body>

</html>
