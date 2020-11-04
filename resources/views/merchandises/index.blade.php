<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Management | Merchandises</title>
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
                        <a class="nav-link" href="{{url('/')}}">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/units')}}">Units</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/categories')}}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/merchandises')}}">Merchandise</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row mt-4">
            <h1>Merchandises</h1>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Brand Name</th>
                        <th>Qty Stock</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($merchandises as $merchandise): ?>

                        <tr>
                            <td>{{$merchandise->id}}</td>
                            <td>{{$merchandise->product_name}}</td>
                            <td>{{$merchandise->brand_name}}</td>
                            <td>{{$merchandise->qty_stock}}</td>
                            <td>{{$merchandise->category->category}}</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>