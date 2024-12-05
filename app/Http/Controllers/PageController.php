<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function privatePage1()
    {
        return view('private.page1');
    }

    public function privatePage2()
    {
        return view('private.page2');
    }
}
