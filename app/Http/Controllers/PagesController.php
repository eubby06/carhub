<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;

class PagesController extends Controller
{
    
    protected $layout = 'master';

    public function index()
    {
        return view('pages.index');
    }
    
}
