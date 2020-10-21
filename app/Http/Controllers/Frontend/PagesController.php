<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller {

    public function index()
    {
        return view('frontend.index');
    }

    public function login()
    {
        return view('auth.login');
    }

}
