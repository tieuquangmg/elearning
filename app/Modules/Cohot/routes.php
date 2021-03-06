<?php
Route::group(['middleware' => ['web','nguoidung']], function () {
    Route::controller('lop', 'LopController', [
        'getData' => 'lop.data',
        'getSyncLop' => 'lop.sync',
    ]);
    Route::controller('chuyennganh','ChuyenNganhController', [
        'getData' => 'chuyennganh.data',
        'getSyncChuyenNganh' => 'chuyennganh.sync',
    ]);
    Route::controller('bomon','BoMonController', [
        'getData' => 'bomon.data',
        'getSyncBomon' => 'bomon.sync',
        'getSyncForum' =>'bomon.syncforum'
    ]);
    Route::controller('chuongtrinhdaotao','ChuongTrinhDaoTaoController',[
        'getSyncChiTiet' => 'chuongtrinhdaotaochitiet.sync'
    ]);
});