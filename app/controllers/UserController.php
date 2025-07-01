<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;
use App\Core\Encryptor;

class UserController extends Controller
{
    public function profile($id = null)
    {
        $userModel = new User();
        $user = $userModel->getUserById($id);

        if (!$user) {
            die("User not found");
        }

        $this->view('user/profile', ['user' => $user]);
    }

    public function list()
    {
        $userModel = new User();
        $users = $userModel->getAllUsers();

        $this->view('user/list', ['users' => $users]);
    }
}
