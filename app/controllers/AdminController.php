<?php

namespace App\Controllers;

use App\Core\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        $this->view('admin/dashboard', ['message' => 'Welcome to the Admin Dashboard!']);
    }
}
