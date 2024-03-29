<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{ $data['subject'] }}</h5>
                    </div>
                    <div class="card-body">
                        <p>Hello, {{ $data['name'] }}</p>
                        <p>Welcome to papersoft technologies</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>