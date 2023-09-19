<?php

if (($_SERVER['REQUEST_METHOD'] === 'POST') &&
    (isset($_FILES['fileUpload']))) {

    $files = $_FILES['fileUpload'];

    $names = $files['name'];
    $types = $files['type'];
    $tmp_names = $files['tmp_name'];
    $errors = $files['error'];
    $sizes = $files['size'];

    // lấy số file upload
    $numitems = count($names);
    $numfiles = 0;
    //Thư mục bạn sẽ lưu file upload
    $target_dir = "uploads/";

    for ($i = 0; $i < $numitems; $i++) {
        //Kiểm tra file thứ $i trong mảng file, up thành công không
        if ($errors[$i] == 0) {
            $numfiles++;
            echo "Bạn upload file thứ $numfiles:<br>";
            echo "Tên file: $names[$i] <br>";
            echo "Lưu tại: $tmp_names[$i] <br>";
            echo "Cỡ file: $sizes[$i] <br><hr>";
            //Code xử lý di chuyển file đến thư mục cần thiết ở đây (bạn tự thực hiện)
            move_uploaded_file($tmp_names[$i], $target_dir . $names[$i]);
            echo "Đã lưu file: " . $names[$i];
        }
    }
    echo "Tổng số file upload: " . $numfiles;
}
else{
    echo "Method không hợp lệ || Chưa có file upload";
}