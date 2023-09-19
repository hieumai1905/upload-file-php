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

    <form method="post" enctype="multipart/form-data" action="/upload-mul.php">
        <p>Chọn file để upload:
            (Cỡ lớn nhất mà PHP đang cấu hình cho phép upload là
            <?=ini_get('upload_max_filesize')?>)</p>

        <input name="fileUpload[]" type="file" multiple="multiple" />
        <input type="submit" value="Đăng ảnh" name="submit">
    </form>

</body>
</html>