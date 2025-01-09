<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    
    <div class="container">
        <h1>Liste des Laboratoires</h1>

        <!-- Formulaire de recherche par ville -->
        <form method="GET" action="{{ route('laboratoire.index') }}" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Rechercher par ville"
                    value="{{ $search }}">
                <button class="btn btn-primary" type="submit">Rechercher</button>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom du laboratoire</th>
                    <th>Ville</th>
                    <th>Nombre de parfums</th>
                </tr>
            </thead>
            <tbody>
                @forelse($laboratoires as $laboratoire)
                    <tr>
                        <td>{{ $laboratoire->DesignationLabo }}</td>
                        <td>{{ $laboratoire->ville }}</td>
                        <td>{{ $laboratoire->parfums_count }}</td> <!-- Affichage du nombre de parfums -->
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Aucun laboratoire trouvé</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
