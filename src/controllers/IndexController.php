<?php

declare(strict_types=1);

namespace Controllers;

use Core\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->render('index/index');
    }
}
