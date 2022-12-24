<?php
include_once '../lib/Database.php' ;
include_once '../helpers/Format.php' ;

?>

<?php

class Product
{   
    private $db ;
    private $fm ;
    
    public function __construct(){
        $this->db = new Database();
        $this->fm = new Format() ;
    }

    public function productInsert($data , $file ){

        $productName = mysqli_real_escape_string($this->db->link,$data['productName'] ) ;
        $catId = mysqli_real_escape_string($this->db->link,$data['catId'] ) ;
        $bandId = mysqli_real_escape_string($this->db->link,$data['bandId'] ) ;
        $body = mysqli_real_escape_string($this->db->link,$data['body'] ) ;
        $price = mysqli_real_escape_string($this->db->link,$data['price'] ) ;
        $type = mysqli_real_escape_string($this->db->link,$data['type'] ) ;

        $permited  = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "upload/".$unique_image;

        if($productName == "" || $catId == "" || $bandId == "" || $body == "" || $price == "" || $type == "" ){
            $msg = "<span class = 'error'>Fields Must Not be empty !</span>";
            return $msg ;
        }else{
            //move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_product(productName,catId,bandId,body,price,image,type)VALUES('$productName','$catId' , '$bandId' , '$body' , '$price', '$uploaded_image','$type')";
            $insert_result = $this->db->insert($query);

            if( $insert_result ){
                $msg = "<span class = 'success'>Product Add Successfully!</span>";
                return $msg ;
            }else{
                $msg = "<span class = 'error'>Product Not added</span>";
                return $msg ;
            }
        }
    }
    public function getAllProduct(){
        $query = "SELECT * FROM tbl_product ORDER BY productId  DESC ";
        $result = $this->db->select($query);
        return $result ;
    }
}


?>