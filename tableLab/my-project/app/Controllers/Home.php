<?php

namespace app\Controllers;
//use app\Controllers\BaseController;
use CodeIgniter\Controller;
class Home extends Controller
{
    public function index()
    {
        return view('welcome_message');
    }
}
