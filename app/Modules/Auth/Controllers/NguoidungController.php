<?php

namespace App\Modules\Auth\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class NguoidungController extends Controller
{
    public function __construct(){
        $this->middleware('nguoidung',['except' => 'getLogout']);
    }
    public function getIndex()
    {
        return "Day la trang admin sau khi da dang nhap, neu chua dang nhap thi se khong duoc phep vao day.";
    }
    public function getLogout() {
        Auth::guard('nguoidung')->logout();
        return redirect('nguoi_dung/login');
    }
}