<?php 
include 'core/init.php';
include 'include/overall/header.php'; 

?>
		<h1>Home</h1>
    	<p>Just a template.</p>
   

    <?php
    	if (is_admin($session_user_id) === true){
    		echo 'Admin!';
    	}
    ?>
 </div>

<?php include 'include/overall/footer.php'; ?> 