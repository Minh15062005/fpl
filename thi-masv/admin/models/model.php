<?php
class Model
{
    public $conn;
    function __construct()
    {
        $this->conn = connectDB();
    }
    // function allBooks()
    // {
    //     $sql = "select * from books order by id desc";
    //     return $this->conn->query($sql);
    // }
    function allBoocks()
    {
        $sql = " select * from books order by id desc";
        return $this->conn->query($sql);
    }
    function insert($title, $img, $author, $publisher, $publish_date)
    {
        ///tạo câu lệnh thêm sp
        $sql = "insert into books value(null,'$title','$img','$author','$publisher','$publish_date')";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    // lấy id sản phẩm
    function seachId($id)
    {
        $sql = "select * from books where id=$id";
        return $this->conn->query($sql)->fetch();
    }
    function update($id, $title, $img, $author, $publisher)
    {
        if (empty($img)) {
            $sql = " update books set title='$title', author='$author' , publisher='$publisher' where id=$id ";
        } else {
            $sql = " update books set title='$title',cover_image='$img' , author='$author' , publisher='$publisher' where id=$id ";
        }
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function delete($id)
    {
        $sql = " delete from books where id=$id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
}
