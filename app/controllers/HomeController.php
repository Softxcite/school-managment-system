<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Encryptor;

class HomeController extends Controller
{
    public function index()
    {
        $adminLink = Encryptor::encrypt('admin/dashboard');
        $usersLink = Encryptor::encrypt('user/list');

        $this->view('home/index', [
            'adminLink' => $adminLink,
            'usersLink' => $usersLink
        ]);
    }
}
