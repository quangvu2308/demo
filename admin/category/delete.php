<?php
// Import file dbhelper.php vào script để sử dụng các hàm và biến cần thiết.
require_once('..database/dbhelper.php');

// Kiểm tra xem biến POST có tồn tại và có giá trị cho khóa chính (id) hay không.
if (isset($_POST['id'])) {
    // Lấy giá trị của id từ biến POST.
    $id = $_POST['id'];

    // Tạo câu truy vấn SQL để xóa dòng có id tương ứng trong bảng "category".
    $sql = 'DELETE FROM category WHERE id=' . $id;

    // Thực hiện truy vấn SQL để xóa dòng dữ liệu từ cơ sở dữ liệu.
    execute($sql);

    // Chuyển hướng người dùng đến trang index.php.
    header('Location: index.php');

    // Dừng thực thi script sau khi thực hiện xóa và chuyển hướng.
    die();
}
?>
