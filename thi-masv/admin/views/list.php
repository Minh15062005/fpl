<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    img{
        width: 200px;
    }
</style>
<body>
    <h1>danh sách sản phẩm</h1>
    <a href="?act=insert"><button>Thêm sản phẩm</button></a>
    <table border="1">
        <tr>
            <td>Định danh</td>
            <td>Tên sách</td>
            <td>hình ảnh bìa sách</td>
            <td>tác giả</td>
            <td>nhà xuất bản</td>
            <td>ngày xuất bản</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
         <?php foreach ($allBoocks as $key => $rows) {
        ?>
            <tr>
                <td> <?= $rows['id'] ?></td>
                <td> <?= $rows['title'] ?></td>
                <td><img src="../assets/img/<?= $rows['cover_image'] ?>" alt=""></td>
                <td> <?= $rows['author'] ?></td>
                <td> <?= $rows['publisher'] ?></td>
                <td> <?= $rows['publish date'] ?></td>
                <td><a href="?act=update&id=<?= $rows['id'] ?>"><button>sửa</button></a></td>
                <td><a onclick="return confirm ('bạn có mún xóa sp này không')" href="?act=delete&id=<?= $rows['id'] ?>"><button>xóa</button></a></td>
            </tr>
        <?php
        }  ?>
    </table>
</body>

</html>