<?php
require_once "./models/model.php";
class Controller
{
    public $coon;
    function __construct()
    {
        $this->conn = new Model();
    }
    function list()
    {
        $allBoocks = $this->conn->allBoocks();
        require_once "views/list.php";
    }
    function insert()
    {
        require_once "views/insert.php";
        if (isset($_POST['btn_insert'])) {
            $title = $_POST['title'];
            $img = $_FILES['img']['name'];
            $tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($tmp, '../assets/img/' . $img);
            $author = $_POST['author'];
            $publisher = $_POST['nhaxb'];
            $publish_date = $_POST['ngayxb'];
            if ($this->conn->insert($title, $img, $author, $publisher, $publish_date)) {
                header('Location:?act=list');
            } else {
                echo " ngược lại";
            }
        }
    }
    function update($id)
    {
        $onebooks = $this->conn->seachId($id);
        require_once "views/update.php";
        if (isset($_POST['btn_update'])) {
            $title = $_POST['title'];
            $img = $_FILES['img']['name'];
            $tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($tmp, '../assets/img/' . $img);
            $author = $_POST['author'];
            $publisher = $_POST['nhaxb'];
            if ($this->conn->update($id, $title, $img, $author, $publisher)) {
                header('Location:?act=list');
            } else {
                echo " ngược lại";
            }
        }
    }
    function delete($id)
    {
        // tìm sp dựa theo id
        $xoa = $this->conn->seachId($id);
        if (is_array($xoa)) {
            // ktr xem phải là mảng kg
            $this->conn->delete($id);
            //Nếu sản phẩm tồn tại, gọi phương thức delete để xóa sản phẩm khỏi cơ sở dữ liệu
            unlink('../assets/img' . $xoa['cover_img']);
            //Xóa tệp ảnh của sản phẩm trong thư mục assets/img.
            header('Location:?act=list');
        }
    }
}
