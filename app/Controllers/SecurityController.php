<?php

namespace App\Controllers;

use App\Models\AppUser;


class SecurityController extends CoreController
{
    public function login()
    {
        $this->show('security/login');
    }

    public function loginPost()
    {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        $appUser = AppUser::findByEmail($email);

        if ($appUser instanceof AppUser && password_verify($password, $appUser->getPassword())) {
   
            $_SESSION['userId'] = $appUser->getId();
            $_SESSION['userObject'] = $appUser;

        
            global $router;
            header('Location: ' . $router->generate('main-home'));
        } else {
        
            global $router;
            header('Location: ' . $router->generate('security-login'));            
        }
    }


    public function logout()
    {
        
        unset($_SESSION['userId']);
        unset($_SESSION['userObject']);

        global $router;
        header('Location: ' . $router->generate('security-login'));
    }
}