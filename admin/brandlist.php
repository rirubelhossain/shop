<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Brand.php';?>
<?php

	$bra = new Brand() ;
    /* 
	if( isset($_GET['delcat'])){
		$delcatid = $_GET['delcat'] ;

		$del = $cat -> delCategory($delcatid) ;
	}
    */

?>


        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
				<?php
				
                /*
					if(isset($del)){
						echo $del ;
					}
				*/
				
				?>
                <div class="block">      
				
				

                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
                        /// print brand list here and code started from here.
						$getBra = $bra->getAllbra();

						if($getBra){
							$i = 0 ;
							while($result = $getBra->fetch_assoc()){
							$i++ ;
						
					
					?>
						<tr class="odd gradeX">
							<td><?php echo $i ;?></td>
							<td><?php echo $result['brandName'];?></td>
							<td><a href="catedit.php?catid=<?php echo $result['catId'];?>">Edit</a> || <a onclick="return confirm('Are you sure to delete')" href="?delcat=<?php echo $result['catId'];?>">Delete</a></td>
						</tr>
					<?php 	}
						}
						?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>
<?php include 'inc/footer.php';?>

