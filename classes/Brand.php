<?php

include_once '../lib/Database.php' ;
include_once '../helpers/Format.php' ;

?>

<?php
class Brand
{
    private $db ;
    private $fm ;
    
    public function __construct(){
        $this->db = new Database() ;
        $this->fm = new Format() ;

    }

    public function brandInsert($brandname){
        $brandname = $this->fm->validation($brandname) ;
        $brandname = mysqli_real_escape_string($this->db->link,$brandname ) ;

        if(empty($brandname)){
            $insetmsg = "<span class = 'error'>Brand field must not be empty !</span>";
            return $insetmsg ;
        }else{
            $query = "INSERT INTO tbl_brand(brandName) VALUES('$brandname')";
            $result = $this->db->insert($query);

            if( $result ){
                $msg = "<span class = 'success'> Brand Inserted Successfully.</span>";
                return $msg ;
            }else{
                $msg = "<span class = 'error'>Brand Inserted Not Successfully.</span>";
                return $msg ;
            }
        }
    }

    public function getAllbra(){
        $query = "SELECT * FROM tbl_brand ORDER BY bandId DESC ";
        $result = $this->db->select($query);
        return $result ;

    }

    public function getBraById($id){
        $query = "SELECT * FROM tbl_brand where bandId = '$id'";
        $result = $this->db->select($query);
        return $result ;
    }

    public function brandUpdate($brandname, $id ){
        $brandname = $this->fm->validation($brandname) ;
        $brandname = mysqli_real_escape_string($this->db->link,$brandname ) ;
        $id = mysqli_real_escape_string($this->db->link,$id ) ;
        
        if(empty($brandname)){
            $insetmsg = "<span class = 'error'>Brand field must not be empty !</span>";
            return $insetmsg ;
        }else{
            $query = "UPDATE tbl_brand 
            SET
            brandName = '$brandname' 
            where  
            bandId = '$id'";
            $update_row = $this->db->update($query);
            if( $update_row ){
                $msg = "<span class = 'success'> Brand Updated Successfully.</span>";
                return $msg ;
            }else{
                $msg = "<span class = 'error'> Brand Not Updated.</span>";
                return $msg ;
            }            
        }
    }

    public function delCategory($delBraid){
        $query = "DELETE FROM tbl_brand where bandId = '$delBraid'";
        $brand_result = $this->db->delete($query) ;

        if($brand_result){
            $msg = "<span class = 'success'>Data has been deleted successfully.</span>";
            return $msg ;
        }else{
            $msg = "<span class = 'error'>Data not deleted yet.</span>";
            return $msg ;
        }
    }
}



?>