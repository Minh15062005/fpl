<div class="row">
    <div class="row formtitle">
        <h1>Them mới sản phẩm</h1>
    </div>
    <div class="row formconten ">
        <form action="index.php?act=adsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <p> Danh mục sản phẩm thuộc về</p> <br>
                <select name="iddm" id="">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row m10">
                <p> Tên sản phẩm</p><br>
                <input type="text" name="tensp">
            </div>
            <div class="row m10">
                <p> Gía sản phẩm</p><br>
                <input type="text" name="giasp">
            </div>
            <div class="row m10">
                <p> Hình </p><br>
                <input type="file" name="hinh">
            </div>
            <div class="row m10">
                <p> Mô tả</p><br>
                <textarea name="mota" id="" cols="30" rows="30"></textarea>
            </div>
            <div class="row m10">
                <input type="submit" name="themmoi" value="Thêm mới">
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