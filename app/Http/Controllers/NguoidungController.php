<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use Session;
use App\Http\Requests;

class NguoidungController extends Controller
{
    public function __construct() {
        $this->middleware('nguoidung',['except' => 'getLogout']);
    }
    public function getIndex()
    {
        dd(Session::all());
        return "da dang nhap";
    }
    public function getLogout() {
        Session::flush();
        return Redirect::to('/');
    }
}