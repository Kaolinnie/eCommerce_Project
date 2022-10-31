<?php
namespace app\controllers;

class Account extends \app\core\Controller {
    public function register() {
        if(isset($_POST['action'])) {
            if($_POST['password_input']==$_POST['confirm_password_input']) {
                $password_hash = password_hash($_POST['password_input'],PASSWORD_DEFAULT);
                $email = $_POST['email_input'];
                $first_name = $_POST['first_name_input'];
                $last_name = $_POST['last_name_input'];
                $user = new \app\models\User();
                $user->email = $email;
                $user->first_name = $first_name;
                $user->last_name = $last_name;
                $user->password = $password_hash;
                $user->insert();
                header('location:/');
            } else {
                header('location:/Account/index?error=passwords do not match');
            }
        } else {
            $this->view('Account/register');
        }
    }

    public function login(){
        if(isset($_POST['action'])){
            //creates a new object of user called currentUser
            $currentUser = new \app\models\User();
            $currentEmailInput = $this->validate_input($_POST['email_input']);
            $passwordInput = $this->validate_input($_POST['password_input']);
			$currentUser = $currentUser->get($currentEmailInput);
            if(password_verify($passwordInput , $currentUser->password)){
				//correct password provided
				$_SESSION['email'] = $currentUser->email;
				$_SESSION['user_id'] = $currentUser->user_id;
				header("location:/");
            }else{
				//incorrect password provided
                $this->view('Account/login', 'Incorrect password combination!');
			}
		}else{
			$this->view('Account/login');
        }
    }
}