
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f5f5;
        }
        .card {
            border-radius: 15px;
        }
    </style>
</head>
<body>

<!-- 🔹 Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">My Website</a>

        <div class="ms-auto">
            <span class="text-white me-3">
                
            </span>
            <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>
</nav>

<!-- 🔹 Main Content -->
<div class="container mt-5">

    <div class="text-center mb-4">
        <h1>Dashboard</h1>
        <p class="text-muted">This is your home page</p>
    </div>

    <div class="row">

        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow p-3">
                <h5>Total Users</h5>
                <p class="display-6">10</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow p-3">
                <h5>Products</h5>
                <p class="display-6">25</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow p-3">
                <h5>Orders</h5>
                <p class="display-6">5</p>
            </div>
        </div>

    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>