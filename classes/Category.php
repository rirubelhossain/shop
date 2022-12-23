<?php
include_once '../lib/Database.php' ;
include_once '../helpers/Format.php' ;


?>

<?php

class Category
{
    private $db ;
    private $fm ; 
    public function __construct(){
        $this->db = new Database() ;
        $this->fm = new Format()  ;
    }

    public function catInsert($catname){
        $catname = $this->fm->validation($catname) ;
        $catname = mysqli_real_escape_string($this->db->link,$catname ) ;

        if(empty($catname)){
            $insetmsg = "<span class = 'error'>Categoy field must not be empty !</span>";
            return $insetmsg ;
        }else{
            $query = "INSERT INTO tbl_category(catName) VALUES('$catname')";
            $result = $this->db->insert($query);

            if( $result ){
                $msg = "<span class = 'success'> Category Inserted Successfully.</span>";
                return $msg ;
            }else{
                $msg = "<span class = 'error'>Category Inserted Not Successfully.</span>";
                return $msg ;
            }
        }
    }

    public function getAllcat(){
        $query = "SELECT * FROM tbl_category ORDER BY catId DESC ";
        $result = $this->db->select($query);
        return $result ;

    }
}


?>