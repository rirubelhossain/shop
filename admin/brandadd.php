<?php
include_once '../classes/Brand.php' ;
///include_once '../lib/Database.php' ;

?>
<?php

    $bra = new Brand() ;
    if($_SERVER['REQUEST_METHOD']  == 'POST'){
        $brandname = $_POST['brandName'] ;
        $insetBra = $bra->brandInsert($brandname);
    }

?>

<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Brand</h2>
               <div class="block copyblock"> 
                <?php
                    if(isset($insetBra)){
                        echo $insetBra ;
                    }
                
                ?>

                 <form action = "brandadd.php" method = "POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="brandName" placeholder="Enter Brand Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>
