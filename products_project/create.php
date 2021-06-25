<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adding New Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <style>
        .mt-10 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!--NAVBAR LINK    -->
    <?php include "views/_navbar.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>+ Adding new product</h2>
                    </div>

                    <form action="controllers/AddingProductController.php" method="post" enctype="multipart/form-data">
                        <div class="panel-body">
                            <label for="name">Product Name:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your product name" required>

                            <label for="price" class="mt-10">Product Price:</label>
                            <input type="number" name="price" id="price" class="form-control" placeholder="Enter your product price" required>

                            <label for="description" class="mt-10">Product Description:</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Enter your product description" required></textarea>

                            <label for="image" class="mt-10">Product Image:</label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary btn-block">+ Store Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>