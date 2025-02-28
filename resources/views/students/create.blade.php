<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 300px; 
            margin: auto; 
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="form-container">
            <h4 class="mb-3 text-center">Inscription</h4>
            <form>
                <div class="mb-2">
                    <label for="exampleInputlastname" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="exampleInputlastname">
                </div>
                <div class="mb-2">
                    <label for="exampleInputfirstname" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="exampleInputfirstname">
                </div>
                <div class="mb-2">
                    <label for="exampleInputage" class="form-label">Âge</label>
                    <input type="number" class="form-control" id="exampleInputage">
                </div>
                <div class="mb-2">
                    <label for="exampleInputtelephone" class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" id="exampleInputtelephone">
                </div>
                <button type="submit" class="btn btn-primary w-100">Soumettre</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
