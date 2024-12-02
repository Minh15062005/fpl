
</head>

<body>
    <div class="row">
        <div class="row formtitle">
            <h1>Danh sách loại hàng</h1>
        </div>
    </div>
    <div class="row mb10">
    <table>
        <tr>
            <th></th>
            <th>Mã loại</th>
            <th>Tên loại</th>
            <th></th>
        </tr>
        <?php
        foreach ($listdanhmuc as $dmuc) {
            extract($dmuc);
            $suadm = "index.php?act=suadm&id=" . $id;
            $xoadm = "index.php?act=xoadm&id=" . $id;
            echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td><a href="' . $suadm . '"><input type="button" value= "SỬA"></a> <a onclick="return confirm(\'Bạn có muốn xoá không?\')" href="' . $xoadm . '"><input type="button" value="XÓA"></a></td>

                    </tr>';
        }
        ?>
    </table>
    </div>
    <div class="form-group">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xoá các mục đã chọn">
        <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
    </div>