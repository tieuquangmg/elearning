<?php
Route::group(['middleware'=>['web', 'guest']], function() {
    Route::controller('facebook', 'FacebookController', [
        'getFacebook' => 'auth.facebook.login',
        'getCallBack' => 'auth.facebook.callback',
    ]);
});

Route::group(['middleware'=>['web', 'nguoidung']], function (){
    Route::controller('user', 'UserController', [
        'getProfile' => 'auth.user.profile',
        'postQrCode' => 'auth.user.qr_code',
        'getData'    => 'auth.user.data',
        'getDelete'    => 'auth.user.delete',
        'getAdd'    => 'auth.user.add',
        'postCreate'    => 'auth.user.create',
        'getEdit'    => 'auth.user.edit',
        'postUpdate'    => 'auth.user.update',
        'getActive' => 'auth.user.active',
        'getImport' => 'auth.user.import',
        'postImport' => 'auth.user.import',
        'getExport' => 'auth.user.export',
        'getSyncForums' => 'auth.user.syncforums',
    ]);

//    Route::controller('qr_code', 'QrCodeController', [
//        'getIndex' => 'auth.qr_code.index',
//        'getScan' => 'auth.qr_code.scan',
//        'getRender' => 'auth.qr_code.render',
//        'getUser' => 'auth.qr_code.user',
//        'postAjaxChangeQrCode' => 'auth.qr_code.change'
//    ]);
});

Route::group(['middleware'=>['nguoidung', 'auth']], function (){
    Route::controller('nguoidung', 'NguoidungController',[
        'getIndex'    => 'nguoidung.index',
        'getProfile' => 'nguoidung.profile',
        'postQrCode' => 'nguoidung.qr_code',
        'getData'    => 'nguoidung.data',
        'getDelete'    => 'nguoidung.delete',
        'getAdd'    => 'nguoidung.add',
        'postCreate'    => 'nguoidung.create',
        'getEdit'    => 'nguoidung.edit',
        'postUpdate'    => 'nguoidung.update',
        'getActive' => 'nguoidung.active',
        'getImport' => 'nguoidung.import',
        'postImport' => 'nguoidung.import',
        'getExport' => 'nguoidung.export',
        'getSyncForums' => 'nguoidung.syncforums',
    ]);
});
