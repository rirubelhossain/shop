<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Brand.php';?>
<?php

	$bra = new Brand() ;
    
    /// delete brand code here 
	if( isset($_GET['delbrand'])){
        $delBraid = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delbrand']);
		$delbrand = $bra -> delCategory($delBraid) ;
	}
    

?>


        <div class="grid_10">
            <div class="box round first grid">
                <h2>Brand List</h2>
				<?php
				
					if(isset($delbrand)){
						echo $delbrand ;
					}
				 
				
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
							<td><a href="braedit.php?braid=<?php echo $result['bandId'];?>">Edit</a> || <a onclick="return confirm('Are you sure to delete')" href="?delbrand=<?php echo $result['bandId'];?>">Delete</a></td>
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

