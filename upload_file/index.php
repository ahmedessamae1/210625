<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uploading file</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="image">Image</label>
    <input type="file" name="image" accept="image/*">

    <input type="submit">
</form>
</body>
</html>