<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo View('Frontend/head.php');
        echo View('Frontend/nav.php');
        echo View('principal.php');
        echo View('Frontend/footer.php');
    }
}
