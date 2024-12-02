</head>

<body>
    <div class="row">
        <div class="row formtitle mb">
            <h1>Danh sách loại hàng</h1>
        </div>
        <form action="index.php?act=listsp" method="post">
            <input type="text" name="kyw">
            <select name="iddm" id="">
    <option value="0" selected>Tất cả</option>
    <?php
    foreach ($listdanhmuc as $danhmuc) {
        $selected = ($iddm == $danhmuc['id']) ? 'selected' : '';
        echo '<option value="' . htmlspecialchars($danhmuc['id']) . '" ' . $selected . '>' . htmlspecialchars($danhmuc['name']) . '</option>';
    }
    ?>
</select>

            <input type="submit" name="listok" value="GO">
        </form>
    </div>
    <div class="row mb10">
        <table>
            <tr>
                <th></th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th>Hình ảnh</th>
                <th>Gía sản phẩm</th>
                <th>Lượt xem</th>
                <th></th>
            </tr>
            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp = "index.php?act=suasp&id=" . $id;
                $xoasp = "index.php?act=xoasp&id=" . $id;
                $hinhpath = "../upload/" . $img;
                if (is_file($hinhpath)) {
                    $hinh = "<img src='" . $hinhpath . "' height='80'>";
                } else {
                    $hinh = "không có hình ảnh";
                }
                echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $hinh . '</td>
                        <td>' . $price . '</td>
                        <td>' . $luotxem . '</td>
                        <td><a href="' . $suasp . '"><input type="button" value= "SỬA"></a> <a onclick="return confirm(\'Bạn có muốn xoá không?\')" href="' . $xoasp . '"><input type="button" value="XÓA"></a></td>

                    </tr>';
            }
            ?>
        </table>
    </div>
    <div class="form-group">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xoá các mục đã chọn">
        <a href="index.php?act=adsp"><input type="button" value="Nhập thêm"></a>
    </div>