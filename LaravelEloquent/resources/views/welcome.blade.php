<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Relationship</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center my-3">Eloquent Relationship</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Mechanic</th>
                            <th>Car Model</th>
                            <th>Car Owner</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mechanics as $mechanic)
                        <tr>
                            <td>{{ $mechanic->id }}</td>
                            <td>{{ $mechanic->name }}</td>
                            <td>{{ $mechanic->name }}</td>
                            <td>{{ $mechanic->carOwner }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>