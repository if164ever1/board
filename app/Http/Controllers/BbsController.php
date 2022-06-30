<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index(){
        return response ('There are list of things')
        ->header('Content0type', 'text/plain');
    }
}
