<?php
if (is_array(($sanpham))) {
    extract($sanpham);
    $hinhpath = "../upload/" . $img;
    if (is_file($hinhpath)) {
        $hinh = "<img src='" . $hinhpath . "' height='80'>";
    } else {
        $hinh = "không có hình ảnh";
    }
}
?>
<div class="row">
    <div class="row formtitle">
        <h1>Cập nhật loại hàng hóa</h1>
    </div>
    <div class="row formconten ">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
            <select name="iddm" id="">
    <option value="0" selected>Tất cả</option>
    <?php
    foreach ($listdanhmuc as $danhmuc) {
        extract($danhmuc);
        $s = ($iddm == $id) ? "selected" : "";
        echo '<option value="' . htmlspecialchars($id) . '" ' . htmlspecialchars($s) . '>' . htmlspecialchars($name) . '</option>';
    }
    ?>
</select>

            </div>
            <div class="row m10">
            <p> Tên sản phẩm</p> <br>
                <input type="text" name="tensp" value="<?= $name ?>">
            </div>
            <div class="row m10">
                <p> Gía sản phẩm</p><br>
                <input type="text" name="giasp" value="<?= $price ?>">
            </div>
            <div class="row m10">
                <p> Hình </p><br>
                <input type="file" name="hinh">
                <?= $hinh ?>;
            </div>
            <div class="row m10">
                <p> Mô tả</p><br>
                <textarea name="mota" id="" cols="30" rows="30"><?= $mota ?></textarea>
            </div>
            <div class="row m10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="themmoi" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"> <input type="button" value="Danh sách"></a>

            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>