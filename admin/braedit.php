<?php
include_once '../classes/Brand.php' ;
///include_once '../lib/Database.php' ;

?>
<?php


    if(!isset($_GET['braid']) || $_GET['braid'] == NULL ){
        echo "<script>window.location='bradlist.php' ; </script>";
    }else{
        $id = $_GET['braid'];
    }


    $bra = new Brand() ;
    
    if($_SERVER['REQUEST_METHOD']  == 'POST'){
        $brandname = $_POST['brandName'] ;
        $updateBrand = $bra->brandUpdate($brandname, $id );
    }
    

?>

<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock"> 
                <?php
                
                    if(isset($updateBrand)){
                        echo $updateBrand ;
                    }
                
                ?>

                <?php
                    $getBrand = $bra->getBraById($id);
                    
                    if( $getBrand ){
                        while($result = $getBrand->fetch_assoc()){

                ?>

                 <form action = "" method = "POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="brandName" value = "<?php echo $result['brandName']?>" class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php }}?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>
