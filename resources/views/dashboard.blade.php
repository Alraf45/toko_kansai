<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-dark bg-danger">
    <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Admin Dashboard</span>
    </div>
</nav>

<div class="container-fluid mt-3">
    <div class="row">
    <div class="col-md-2 bg-light vh-100 p-3">
        <h5>Menu</h5>
        <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
        </ul>
    </div>
    <div class="col-md-10">
        <h2>Welcome, Admin!</h2>
        <p>This is your dashboard overview.</p>
        <!-- Example cards -->
        <div class="row">
        <div class="col-md-4">
            <div class="card text-bg-primary mb-3">
            <div class="card-body">
                <h5 class="card-title">Users</h5>
                <p class="card-text">1,024 Active Users</p>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Sales</h5>
                <p class="card-text">$12,340 This Month</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
