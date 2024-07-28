<?php
namespace App\Http\Controllers\Front;

// namespace App\Http\Middleware;

use Illuminate\Http\Request;

use illuminate\Routing\Controller;
class SecondController
{
    public function __construct()
    {
         // Assign to ALL methods in this Controller
            //$this->middleware('auth');

    }
    public function showString()
    {
        return 'static string';
    }
}
