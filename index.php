<?php 
include 'core/init.php';
include 'include/overall/header.php'; 

?>
		<h1>Home</h1>
    	<p>Just a template.</p>
   

    <?php
    	if (has_access($session_user_id, 1) === true){
    		echo 'Admin!';
    	} else if (has_access($session_user_id, 2) === true){
    		echo 'Moderator!';
    	}
    ?>
 </div>

<?php include 'include/overall/footer.php'; ?> 