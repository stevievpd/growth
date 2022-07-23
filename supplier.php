<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title> supplier </title>

</head>

<body>
        <div class="purchase_wrapper">
            <div class="purchase_order">
               <h2> Supplier </h2>
            </div>
        </div>
    <div class="container my-10">
        <form method="post">
        <div class="form-group">
                <label>Supplier Name</label>
                <input type="text" class="form-control"
                    placeholder="Enter Supplier Name" name="supplier" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control"
                    placeholder="Enter address" name="address" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="number" class="form-control"
                    placeholder="Enter number" name="phone" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control"
                    placeholder="Enter email" name="email" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control"
                    placeholder="Enter city" name="city" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Country</label>
                <input type="text" class="form-control"
                    placeholder="Enter county" name="country" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>State/Province</label>
                <input type="text" class="form-control"
                    placeholder="Enter state/province" name="state_province" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Postal/Zip Code</label>
                <input type="number" class="form-control"
                    placeholder="Enter postal/zip code" name="postal_zip" autocomplete="off" required>
            </div>
            
            <div class="form-group">
                <label>Comments</label>
                <input type="text" minlength="11" maxlength="15" class="form-control" placeholder="Enter notes" name="comments"
                    autocomplete="off" required>
            </div>
            <div class="seach_item">
            <button class="btn btn-danger"><a href="inventory.php" class="text-light">Cancel</a></button>
            <button type="submit" class="btn btn-primary" name="submit">Save</button>
        </form>
    </div>
</body>
</html>