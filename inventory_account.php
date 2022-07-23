<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Inventory Account</title>

</head>

<body>
        <div class="purchase_wrapper">
            <div class="purchase_order">
               <h2> Inventory Account</h2>
            </div>
        </div>
    <div class="container my-10">
        <form method="post">
            <div class="form-group">
                <label>Comments</label>
                <input type="text" minlength="11" maxlength="15" class="form-control" placeholder="Enter notes" name="comments"
                    autocomplete="off" required>
            </div>
            <div class="form-group">
            <span>Partian</span>
            </div>
            <div class="form-group">
            <span>Full</span>
            </div>
            <div class="items">
                <h3>Items</h3>
            </div>
            <div class="seach_item">
            <button class="btn btn-danger"><a href="display.php" class="text-light">Add Categort</a></button>
            <button class="btn btn-danger"><a href="display.php" class="text-light">Add Supplier</a></button>
            <div>
            <div class="form-group">
            <span>Item</span>
            </div>
            <div class="form-group">
            <span>Expected Stock</span>
            </div>
            <div class="seach_item">
            <button class="btn btn-danger"><a href="display.php" class="text-light">Search Item</a></button>
             </div>
            <button class="btn btn-danger"><a href="display.php" class="text-light">Cancel</a></button>
            <button type="submit" class="btn btn-primary" name="submit">Adjust</button>
        </form>

    </div>


</body>

</html>