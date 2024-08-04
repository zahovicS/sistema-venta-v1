<?php

namespace App\Controllers\Dashboard;

use App\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return render('pages.dashboard.index');
    }

    public function test()
    {
        echo "hola";
    }
}
