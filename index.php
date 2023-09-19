<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/upload.php" enctype="multipart/form-data" method="post">
    Chọn file để upload:
    <input type="file" name="fileupload" id="fileupload"><br><br>
    <input type="submit" value="Upload" name="submit">
</form>

</body>
</html>