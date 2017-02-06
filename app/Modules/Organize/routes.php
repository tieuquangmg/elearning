<?php
Route::group(['middleware' => ['web', 'nguoidung']], function () {
    Route::controller('class', 'ClassesController', [
        'getData' => 'class.data',
        'getAdd' => 'class.add',
        'postCreate' => 'class.create',
        'getEdit' => 'class.edit',
        'postUpdate' => 'class.update',
        'getDelete' => 'class.delete',
        'getFind' => 'class.find',
        'getDetail' => 'class.detail',
        'getEnroll' => 'class.enroll',
        'getTest' => 'class.test',
        'getFilter' => 'class.filter',
        'getUnEnroll' => 'class.unenroll',
        'getAttendance' => 'class.attendance',
        'getScore' => 'class.score',
        'getUpdateTest' => 'class.updatetest',
        'getUpdateScore' => 'class.updatescore',
        'postUpdateAttendance' => 'class.updateattendance',
        'getSyncSubject' => 'class.sync',
        'postSyncProcess' => 'class.process',
        'getSyncSinhvien' => 'class.syncsinhvien',
        'getSyncNguoidung' => 'class.syncnguoidung',
        'getSyncClass' => 'class.sync.class',
        'postSyncClass' => 'class.sync.class',

        'getSyncAllClassDetail' => 'class.syncallclasseetail',

        'getSyncClassDetail' => 'class.syncclassdetail',
        'postSyncClassDetail' => 'class.syncclassdetail',

        'getSetting' => 'class.setting',
        'postSetting' => 'class.setting',
        'getSyncForum' =>'class.syncforum',
        'getSettingUnit' =>'class.setttingunit',
        'postSettingUnit' =>'class.setttingunit',
        'getSettingAdvance' =>'class.settingadv',
        'postSettingAdvance' =>'class.settingadv'
    ]);
});