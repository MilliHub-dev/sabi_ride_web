<?php
session_start();
     require_once '../functions/helpers.php';
     require_once '../functions/pdo_connection.php';

     $error = '';
     if(isset($_POST['email']) && $_POST['email'] !== ''
         && isset($_POST['password']) && $_POST['password'] !== '') 
         {

            $query = "SELECT * FROM users WHERE email = ?;";
            $statement = $pdo->prepare($query);
            $statement->execute([$_POST['email']]);
            $user = $statement->fetch();
            if($user !== false)
            {
                    if(password_verify($_POST['password'], $user->password))
                    {
                            $_SESSION['user'] =  $user->email;
                            redirect('admin');
                    }
                    else{
                        $error = 'password is wrong';
                    }
            }
            else{
                $error = 'Email is wrong';
            }

         }
         else{
            if(!empty($_POST))
            $error = 'All fields are required';
        }

     ?>