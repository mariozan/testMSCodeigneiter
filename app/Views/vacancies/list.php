<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vacantes</title>
    <!-- Agrega aquí enlaces a tus archivos CSS si es necesario -->
</head>
<body>
    <h1>Lista de Vacantes</h1>

    <table class="table">
        <thead>
            <th>Name</th>
            <th>Description</th>
        </thead>
        <tbody>
        <?php foreach($data as $item): ?>

        <tr>
            <td><h2><?php echo $item->name ?></h2></td>
            <td><p><?php echo $item->description ?></p></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Agrega aquí enlaces a tus archivos JavaScript si es necesario -->
</body>
</html>
