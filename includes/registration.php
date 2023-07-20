<?php

/*registar Form*/

	$response = array();
	if (isset($_POST['signup'])) {
		$user_name = esc($_POST['user_name']);
		$user_email = esc($_POST['user_email']);
		$user_pass = esc($_POST['user_pass']);
		// $check_user = 'SELECT * FROM users WHERE user_email = $email LIMIT 0,1';
		// $fetch = mysqli_query($dbc, $q);
		if (mysqli_num_rows(check_user_by_email($user_email)) > 0) {
			$response['response'] = ['msg' => 'user already exist', 'sts' => 'danger'];
		 }  
		if (empty($response)) {
			$user_pass = password_hash($user_pass, PASSWORD_DEFAULT);  
			$user_role = 'author';
			$username = strtolower(str_replace(' ', '', $user_name.rand(0,100)));
			$register_time = date('Y-m-d H:i:s', time());
			$sql = "INSERT INTO users (user_full_name, username, user_email, user_pass, user_role, created_at, updated_at) VALUES ('$user_name', '$username', '$user_email', '$user_pass', '$user_role', '$register_time', '0000-00-00')";
			$query = mysqli_query($dbc, $sql);
			if ($query) {
				$response['response'] = ['msg' => 'Profile Created', 'sts' => 'success'];
			}else{
				$response['response'] = ['msg' => mysqli_error($dbc), 'sts' => 'danger'];
			}
		}
	}
  
	/* login process */
	if (isset($_POST['login'])) {
		$login_email = esc($_POST['login_email']);
		$login_pass = esc($_POST['login_pass']);
		$fetch_user = check_user_by_email($login_email);
		if (mysqli_num_rows($fetch_user) == 0) {
			$response['response'] = ['msg' => 'No user found against ('.$login_email.') this email', 'sts' => 'warning'];
		}else{
			$user = mysqli_fetch_assoc($fetch_user);
			$pass_hash = $user['user_pass'];
			if (password_verify($login_pass, $pass_hash)) {
				$role = $user['user_role'];
               echo"<pre>";
               print_r($user);
               echo"</pre>";
                    /*   create User session    */

            $_SESSION['user_id']=$user['user_id'];
            $_SESSION['user_full_name']=$user['user_full_name'];
            $_SESSION['username']=$user['username'];
			
            $_SESSION['user_email']=$user['user_email'];
            $_SESSION['user_role']=$user['user_role'];
            $_SESSION['user_pass']=$user['user_pass'];
            $_SESSION['Created_at']=$user['Created_at'];
            $_SESSION['updated_at']=$user['updated_at_at'];
				if ($role == 'user') {
					header('location:user/');
				}else{
					header('location:admin/');
				}
			}else{
				$response['response'] = ['msg' => 'Incorrect password', 'sts' => 'danger'];
			}
		}
	}
?> 