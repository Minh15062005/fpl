<style>
    .spct{
    text-align: center;
}
.spct img {
    width: 80%;
    height: 400px;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>
<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php extract($onesp); ?>
            <div class="boxtitle"><?= $name ?></div>
            <div class="row boxcontent">
                <?php
                $img = $img_path . $img;
                echo '<div class="row mb spct"><img src="../' . $img . '"  ></div>';
                echo $mota;
                ?>
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">BÌNH LUẬN</div>
            <div class="row boxcontent">
                <!-- Form bình luận -->
                <form action="index.php?act=submit_comment" method="post">
                    <input type="hidden" name="idsp" value="<?= $id ?>">
                    <textarea name="comment" rows="4" placeholder="Viết bình luận của bạn..."></textarea>
                    <br>
                    <input type="submit" value="Gửi">
                </form>
                
                <!-- Hiển thị bình luận -->
                <?php
                if (!empty($comments)) {
                    foreach ($comments as $comment) {
                        echo '<p>' . htmlspecialchars($comment['content']) . '</p>';
                        echo '<p><small>Đăng vào ' . $comment['date_posted'] . '</small></p>';
                    }
                } else {
                    echo '<p>Chưa có bình luận nào.</p>';
                }
                ?>
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent">
                <?php
                foreach ($sp_cung_loai as $related_product) {
                    extract($related_product);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>
