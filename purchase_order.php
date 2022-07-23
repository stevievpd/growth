<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title> Purchase Order</title>

</head>

<body>
        <div class="purchase_wrapper">
            <div class="purchase_order">
               <h2> Purchase Order </h2>
            </div>
        </div>
    <div class="container my-10">
        <form method="post">
        <div class="form-group">
                <label>Supplier</label>
                <input type="text" class="form-control"
                    placeholder="Enter Supplier" name="supplier" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Purchase Date</label>
                <input type="date" class="form-control"
                    placeholder="Enter purchase date" name="purchase_date" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Expected Date</label>
                <input type="date" class="form-control"
                    placeholder="Enter expected date" name="expected_date" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Comments</label>
                <input type="text" minlength="11" maxlength="15" class="form-control" placeholder="Enter notes" name="comments"
                    autocomplete="off" required>
            </div>
            <div class="items">
                <h3>Items</h3>
            </div>
            <div class="seach_item">
            <button class="btn btn-danger"><a href="display.php" class="text-light">Search Item</a></button>
            <div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit">Import</button>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit">Auto Fill</button>
            </div>
            <div class="form-group">
            <span>Instock</span>
            </div>
            <div class="form-group">
            <span>Incoming</span>
            </div>
            <div class="form-group">
            <span>Cost</span>
            </div>
            <div class="form-group">
            <span>Amount</span>
            </div>
            <div class="form-group">
            <span>Total</span>
            </div>
            <div class="form-group">
            <span>0.00</span>
            </div>
            <button class="btn btn-danger"><a href="display.php" class="text-light">Cancel</a></button>
            <button type="submit" class="btn btn-primary" name="submit">Create</button>
        </form>

    </div>


</body>

</html>