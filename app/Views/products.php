<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <!-- Add Bootstrap CSS and JavaScript -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Add FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background-color: #f0f0f0; /* Light gray background */
            font-family: Arial, sans-serif;
        }

        /* Header styles */
        .header {
            background-color: #333; /* Dark gray header background */
            color: #fff; /* White font color */
            text-align: center;
            padding: 20px;
        }
        .header h1 {
            font-size: 36px; /* Larger font size for the header */
        }

        /* Form styles */
        .form-container {
            background-color: #fff; /* White form background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Box shadow for the form */
        }
        .form-label {
            color: #333; /* Dark gray form label color */
        }
        .form-control {
            background-color: #f0f0f0; /* Light gray input field background */
            color: #333; /* Dark gray input field text color */
            border-color: #ccc; /* Light gray input field border */
        }
        .btn-primary {
            background-color: #007bff; /* Blue button background */
            border-color: #007bff; /* Blue button border */
        }

        /* Table styles */
        .table {
            background-color: #fff; /* White table background */
            color: #333; /* Dark gray table text color */
            border: 1px solid #ccc; /* Light gray table border */
        }
        .table th {
            background-color: #007bff; /* Blue table header background */
            color: #fff; /* White table header text color */
        }

        /* Button styles */
        .btn-danger, .btn-warning {
            color: #fff; /* White font color for buttons */
        }

        /* Icon styles */
        .fa {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1><i class="fas fa-shopping-cart"></i> E-commerce Products ni Pareng Jeff</h1>
    </div>

    <div class="container mt-4 form-container">
        <form action="/save" method="post">
            <div class="mb-3">
                <label for="code" class="form-label">Product Code</label>
                <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                <input type="text" name="code" class="form-control" id="code" placeholder="Enter product code" value="<?= isset($pro['code']) ? $pro['code'] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter product name" value="<?= isset($pro['name']) ? $pro['name'] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Enter quantity" value="<?= isset($pro['quantity']) ? $pro['quantity'] : '' ?>">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Product</button>
        </form>
    </div>

    <div class="container mt-5">
        <h2>Products Listing</h2>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($product as $pr): ?>
                    <tr>
                        <td><?= $pr['code'] ?></td>
                        <td><?= $pr['name'] ?></td>
                        <td><?= $pr['quantity'] ?></td>
                        <td>
                            <a href="/delete/<?= $pr['id'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
                            <a href="/edit/<?= $pr['id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
