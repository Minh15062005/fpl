<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>sửa sản phẩm mới</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $onebooks['id'] ?>">
       <p>Tên sách</p>
       <input type="text" name="name"  value="<?= $onebooks['title'] ?>">
       <p>ảnh bìa sách</p>
       <img src="../assets/img<?= $onebooks['cover_image']  ?>" alt="">
       <input type="file" name="img">
       <p>tác giả</p>
       <input type="text" name="author" value="<?= $onebooks['author'] ?>">
       <p>nhà xuất bản</p>
       <input type="text" name="nhaxb" value="<?= $onebooks['publisher'] ?>">
       <p>ngày xuất bản</p>
       <input type="text" name="ngayxb">
       <input type="submit" value="Sửa sản phẩm" name="btn_update">
    </form>
</body>
</html>