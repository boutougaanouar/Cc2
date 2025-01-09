<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produit</title>
</head>

<body>


    <div class="container">
        <h1>Liste des Parfums</h1>
        <a href="{{ route('parfum.create') }}" class="btn btn-primary mb-3">Ajouter un nouveau parfum</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prix de vente</th>
                    <th>Date de production</th>
                    <th>Laboratoire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($parfums as $parfum)
                    <tr>
                        <td>{{ $parfum->id }}</td>
                        <td>{{ $parfum->NomPar }}</td>
                        <td>{{ $parfum->PrixVente }}</td>
                        <td>{{ $parfum->DateProduction }}</td>
                        <td>{{ $parfum->laboratoire->DesignationLabo }}</td>
                        <td>
                            <a href="{{ route('parfum.detailsProduit', $parfum->id) }}"
                                class="btn btn-info btn-sm">Détails Produit</a>
                            <a href="{{ route('parfum.edit', $parfum->id) }}"
                                class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('parfum.destroy', $parfum->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce parfum ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>
