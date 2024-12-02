<div class="row mb ">
    <div class="boxtitle">
        Tài Khoản
    </div>
    <div class="boxconten formtaikhoan">
        <form action="#" method="post">
            <div class="row mb10">
                Tên Đăng Nhập <br>
                <input type="text" name="user" id="">
            </div>
            <div class="row mb10">
                Mật Khẩu <br>
                <input type="password" id="">
            </div>
            <div class="row mb10">
                <input type="checkbox" name="" id="">Ghi nhớ tài khoản
            </div>
            <div class="row mb10">
                <input type="submit" value="Đăng Nhập">
            </div>

        </form>
        <li><a href="#">Quên mật khẩu</a></li>
        <li><a href="#">Đăng ký thành viên</a></li>
    </div>
</div>
<div class="row mb ">
    <div class="boxtitle">Danh Mục</div>
    <div class="boxconten2 menudoc">
        <div class="mnu">
            <ul>
                <?php
                foreach ($dsdm as $dm) {
                    extract($dm);
                    $linkdm = "index.php?act=sanpham&iddm=" . $id;
                    echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
                }

                ?>
            </ul>
        </div>

    </div>
    <div class="boxfooter searbox">
        <form action="#" method="post">
            <input type="text" name="" id="">
        </form>
    </div>
</div>
<div class="row">
    <div class="boxtitle">Top 10 yêu thích</div>
    <div class="row boxconten">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $img;
            echo '<div class="row mb10 top10">';
            echo '<a href="' . $linksp . '"><img src="../' . $img . '" alt=""></a>';
            echo '<a href="' . $linksp . '">' . $name . '</a>';
            echo '</div>';
        }
        ?>
    </div>
</div>