<?php
include 'core/init.php';
logged_in_redirect();
if(empty($_POST) === false){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username) === true || empty($password) === true){
		$errors[] = 'You need to enter a username and password';
	}else if(user_exists($username) === false){
		$errors[] = 'We can\'t find this username , Have u register ?';
	}else if(user_active($username) === false ){
		$errors[] = 'You have\'t activated ur account';
	}else {

		if(strlen($password) > 32){
			$errors[] = "Password is too long";
		}


		$login = login($username,$password);
		if($login === false){
			$errors[] = 'this username/password combination is incorrect';
		}else {
			$_SESSION['user_id'] = $login ;
			header('Location: index.php');
			exit();
		}
	}

	//print_r($errors);
}else {
	$errors[] = "No data recieved ";
}
include 'include/overall/header.php';
if(empty($errors) === false){
	echo output_errors($errors);
}

include 'include/overall/footer.php';
?>
