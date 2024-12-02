<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Thêm sản phẩm mới</h2>
    <form action="" method="POST" enctype="multipart/form-data">
       <p>Tên sách</p>
       <input type="text" name="title">
       <p>ảnh bìa sách</p>
       <input type="file" name="img">
       <p>tác giả</p>
       <input type="text" name="author">
       <p>nhà xuất bản</p>
       <input type="text" name="nhaxb">
       <p>ngày xuất bản</p>
       <input type="date" name="ngayxb">
       <input type="submit" value="Thêm sản phẩm" name="btn_insert">
    </form>
</body>
</html>