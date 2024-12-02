<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle"> SẢN PHẨM <strong><?= $tendm ?></strong></div>
            <div class="row boxcontent">
                <?php
                $i = 0;
                foreach ($dssp as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $img_src = $img_path . $img;

                    // Set the class for margin adjustment
                    if (($i % 3) == 2) {
                        $class = "";
                    } else {
                        $class = "mr";
                    }

                    echo '<div class="boxsp ' . $class . '">
                        <div class="row img"><a href="' . $linksp . '"><img src="' . $img_src . '" alt=""></a></div>
                        <p>$' . $price . '</p>
                        <a href="' . $linksp . '">' . $name . '</a>
                    </div>';
                    $i += 1;
                }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>
