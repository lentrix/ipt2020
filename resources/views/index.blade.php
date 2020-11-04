<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Management | Units</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/bootstrap.js')}}"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Store Manager</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Units</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Merchandise</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-4 offset-md-4 mt-4">
                <h2 style="text-align:center">Main Menu</h2>
                <a href="{{url('/units')}}" class="btn btn-block btn-primary">Units</a>
                <a href="{{url('/categories')}}" class="btn btn-block btn-primary">Categories</a>
                <a href="{{url('/merchandise')}}" class="btn btn-block btn-primary">Merchandises</a>
            </div>
        </div>
    </div>
</body>
</html>