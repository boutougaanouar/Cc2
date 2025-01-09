<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un produit </title>
</head>

<body>


    <div class="container">
        <h1>Ajouter un nouveau Parfum</h1>
        <form action="{{ route('parfum.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="NomPar" class="form-label">Nom du Parfum</label>
                <input type="text" name="NomPar" id="NomPar" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="PrixVente" class="form-label">Prix de Vente</label>
                <input type="number" name="PrixVente" id="PrixVente" class="form-control" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="DateProduction" class="form-label">Date de Production</label>
                <input type="date" name="DateProduction" id="DateProduction" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="laboratoire_id" class="form-label">Laboratoire</label>
                <select name="laboratoire_id" id="laboratoire_id" class="form-control" required>
                    @foreach ($laboratoires as $laboratoire)
                        <option value="{{ $laboratoire->id }}">{{ $laboratoire->DesignationLabo }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>



</body>

</html>
